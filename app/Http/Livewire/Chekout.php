<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;

class Chekout extends Component
{
    public $order,$references,$total;

    public function mount(Order $order){
        $this->order = $order;
        $this->references = session()->get('references');
    }
    public function render()
    {
        return view('livewire.chekout')->layout('layouts.kanan-login');
    }
}
