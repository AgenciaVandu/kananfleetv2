<?php

namespace App\Http\Livewire\Admin;

use App\Models\Currency;
use Livewire\Component;

class Curriencies extends Component
{
    public $mxn,$usd;
    public function mount(){
        if (auth()->user()->hasRole('admin') || auth()->user()->hasRole('contenido')) {
            if (auth()->user()->hasRole('admin')) {

            }else{
                return redirect()->route('pages.index');
            }
        }else{
            return redirect()->route('terminal.dashboard');
        }
        $this->mxn = Currency::find(1)->mxn;
        $this->usd = Currency::find(1)->usd;
    }

    public function update(){
        $currency = Currency::find(1);
        $currency->mxn = $this->mxn;
        $currency->save();
        $this->emit('updated');
    }



    public function render()
    {
        return view('livewire.admin.curriencies')->layout('layouts.app');
    }
}
