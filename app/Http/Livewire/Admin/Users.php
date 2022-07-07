<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    use WithPagination;

    public $create=false,$editForm=false,$modalDelete=true;
    public $name,$email,$password,$password_confirmation,$role="";
    public $user,$user_restore;
    public $check=0;

    public function store(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6',
            'password_confirmation'=>'required|same:password',
            'role'=>'required',
        ]);
        $user=User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>bcrypt($this->password),
        ]);
        $user->assignRole($this->role);
        $this->reset('name','email','password','password_confirmation','role');
        $this->create=false;
    }

    public function edit(User $user){
        $this->editForm=true;
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->roles->first()->id;
    }
    public function update(){
        $this->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email,'.$this->user->id,
            'password'=>'nullable|min:6',
            'password_confirmation'=>'nullable|same:password',
            'role'=>'required',
        ]);
        $this->user->update([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password ? bcrypt($this->password) : $this->user->password,
        ]);
        $this->user->syncRoles($this->role);
        $this->reset('name','email','password','password_confirmation','role');
        $this->editForm=false;
    }

    public function delete(User $user){
        $this->user = $user;
        $this->user->delete();
    }

    public function restoreUser($user){
        $user = User::withTrashed()->where('id',$user)->first();
        $user->restore();

    }

    public function render()
    {
        return view('livewire.admin.users',[
            'users' => User::withTrashed()->where('id','!=',auth()->user()->id)->paginate(10),
            'roles' => Role::where('name','!=','user')->get(),
        ]);
    }
}
