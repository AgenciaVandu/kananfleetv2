<?php

namespace App\Http\Livewire;

use App\Models\Reference;
use Livewire\Component;
use Illuminate\Http\Request;

class TableSplit extends Component
{
    public $order, $currencies, $currencySelected = "";
    public $references = [];

    public function mount()
    {
        $this->currencies = $this->order->references->where('status', 1);
    }

    public function updatedCurrencySelected($value)
    {
        $this->references = [];
    }

    public function checkout()
    {
        $total = 0;
        $description = "";
        $order = json_decode($this->order);
        $splits = $this->references;
        $array_references = [];

        foreach ($this->references as $split) {
            $reference = Reference::find($split);
            array_push($array_references, $reference);
            $total = $reference->amount + $total;
        }

        session([
            'description' => $order->contract,
            'references' => $array_references,
            'total' => $total
        ]);

        return redirect()->route('test', ['order' => $order->id,'total' => $total]);
    }

    public function render()
    {
        return view('livewire.table-split', [
            'splits' => Reference::where('order_id', $this->order->id)->where('status', 1)->where('currency', $this->currencySelected)->get()
        ]);
    }
}
