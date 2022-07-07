<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use App\Models\Reference;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Clients extends Component
{
    use WithPagination;
    use WithFileUploads;
    use AuthorizesRequests;

    public $table=true,$show=false,$addClient=false,$addReference=false,$client,$references=[],$orders=[],$splits=[];
    public $order,$addOrder=false,$contractDescription;
    public $name,$email,$password,$company_name,$bussiness_name,$RFC,$legal_representative_name;
    public $amount,$description,$ref;
    public $listeners=['render'];
    public $editContract,$rand;
    public $showPass=false;

    protected $rules = [
            'name' => 'required',
            'email'=> 'required|email|unique:users',
            'password' => 'required',
            'company_name' => 'required',
            'bussiness_name' => 'required',
            'RFC' => 'required',
            //'legal_representative_name' => 'required',
    ];
    public $editForm = [
            'company_name' => null,
            'bussiness_name' => null,
            'RFC' => null,
            'email' => null,
            'legal_representative_name' => null
    ];
     public $editOrder = [
            'open'=> false,
            'contract' => null
    ];

    public $editReference = [
            'open'=> false,
            'reference' =>null,
            'amount' => null,
            'description' => null,
            'contract' => null
    ];
    public $search = '';

    public function updatingSearch(){
        $this->resetPage();
    }

    public function index(){
        $this->reset('table','show');
    }

    public function mount(){
        $this->rand = rand();
    }
    //Funciones para agregar clientes
    public function store(){
        $this->validate();
        User::create([
            'name' => $this->name,
            'email'=> $this->email,
            'password' => Hash::make($this->password),
            'company_name' => $this->company_name,
            'bussiness_name' => $this->bussiness_name,
            'RFC' => $this->RFC,
            'legal_representative_name' => $this->legal_representative_name
        ]);
        $this->reset('table','show','addClient');
    }

    public function show(User $user){
        $this->table = false;
        $this->show = true;
        $this->client = $user;
        $this->orders = $user->orders;
        /* $this->references = $user->references; */
        $this->editForm['company_name'] = $user->company_name;
        $this->editForm['bussiness_name'] = $user->bussiness_name;
        $this->editForm['RFC'] = $user->RFC;
        $this->editForm['email'] = $user->email;
        $this->editForm['legal_representative_name'] = $user->legal_representative_name;
    }

    public function update(){
        $rules = [
            'editForm.company_name' => 'required',
            'editForm.bussiness_name' => 'required',
            'editForm.RFC' => 'required',
            'editForm.legal_representative_name' => 'required',

        ];

        $this->validate($rules);
        $this->client->update($this->editForm);
        $this->emit('updated');
    }

    public function delete(User $user){
        $user->delete();
    }

    //Funciones para agregar Ordenes de compras

    public function storeOrder(){
        $rules=[
            'contractDescription' => 'required',
        ];
        $this->validate($rules);

        Order::create([
            'contract' => $this->contractDescription,
            'user_id'=> $this->client->id,
        ]);

        $this->orders = Order::where('user_id',$this->client->id)->get();
        $this->reset('addOrder','contractDescription');
    }

    public function editOrder(Order $order){
        $this->order = $order;
        $this->editOrder['open'] = true;
        $this->editOrder['contractDescription'] = $order->contract;
    }

    public function updateOrder(){
        $this->order->update([
            'contract' => $this->editOrder['contractDescription'],
        ]);
        $this->orders = Order::where('user_id',$this->client->id)->get();
        $this->reset('editOrder');
    }


    // Funciones para las partidas(Referencias)

    public function formAddReferences(Order $order){
        $this->addReference = true;
        $this->order = $order;
        $this->splits = $order->references;
    }

    public function storeReference(){
        $rules = [
            'amount' => 'required',
            'description' => 'required',
        ];
        $this->validate($rules);

        $this->order->references()->create([
            'amount' => $this->amount,
            'description' => $this->description,
        ]);
        $this->orders = Order::where('user_id',$this->client->id)->get();
        /* if ($this->contract) {
            $url = $this->contract->store('contracts');
            $reference->document()->create([
            'url' => $url
            ]);
        } */
        /* $this->references = Reference::where('user_id', $this->client->id)->get(); */
        $this->addReference=false;
        $this->reset('description','amount');
    }

    public function editReference(Reference $reference){
        $this->ref = $reference;
        $this->reset('editReference');
        $this->editReference['open'] = true;
        $this->editReference['amount'] = $reference->amount;
        $this->editReference['description'] = $reference->description;
/*         if ($reference->document) {
            $this->editReference['contract'] = $reference->document->url;
        } */
    }

    public function updateReference(){
        $rules = [
            'editReference.amount' => 'required',
            'editReference.description' => 'required',
        ];
        $this->validate($rules);

        $this->ref->update([
            'amount' => $this->editReference['amount'],
            'description' => $this->editReference['description'],
        ]);

        /* if ($this->editContract) {
            Storage::delete($this->editReference['contract']);
            $url = $this->editContract->store('contracts');
            $this->ref->document()->update([
                'url' => $url
            ]);
        }
        $this->reset('editReference'); */
        $this->orders = Order::where('user_id',$this->client->id)->get();
        $this->rand = rand();
        $this->editReference['open'] = false;
    }

    public function deleteReference(Reference $reference){
        $reference->delete();
        $this->orders = Order::where('user_id',$this->client->id)->get();
    }

    public function render()
    {
        return view('livewire.admin.clients',[
            'clients' => User::doesntHave('roles')->latest()->paginate(10),
        ])->layout('layouts.app');
    }
}
