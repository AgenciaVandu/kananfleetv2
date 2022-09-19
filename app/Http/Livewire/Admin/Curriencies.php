<?php

namespace App\Http\Livewire\Admin;

use App\Models\Currency;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Curriencies extends Component
{
    public $mxn,$usd;
    public function mount(){
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
        $currency_base = Currency::find(1);
        $conversion = Http::get("https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43784/datos/".now()->format('Y-m-d')."/".now()->format('Y-m-d')."/?token=570f63e4e5caaa0a8848bcc07e31ba64774bfb9838a9940cba6b5003cb6bcfc8");//SF43784
        $conversion = json_decode($conversion);
        $valor = $currency_base->mxn;
        foreach ($conversion->bmx->series as $valor) {
            foreach($valor->datos as $dato){
                $valor = $dato->dato;
            }
        }
        $currency_base->update([
                'mxn' => 23.50
        ]);
        return view('livewire.admin.curriencies')->layout('layouts.app');
    }
}
