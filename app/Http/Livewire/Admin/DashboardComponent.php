<?php

namespace App\Http\Livewire\Admin;

use App\Models\Order;
use Asantibanez\LivewireCharts\Facades\ColumnChartModel;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use App\Models\Reference;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class DashboardComponent extends Component
{

    public function render()
    {
        $total = 0;
        $references = Reference::where('status','like','1')->get();

        foreach ($references as $reference) {
            $total = $total+$reference->amount;
        }

        $orders = Order::whereHas('references',function(Builder $query){
            $query->where('status','like','1');
        })->get();

        $references_pending = Reference::where('status','like','1')->count();
        $references_success = Reference::where('status','like','2')->count();

        $pieChartModel = LivewireCharts::pieChartModel()
        ->setTitle('Reporte de partidas')
        ->setDataLabelsEnabled('Pendientes','Pagadas')
        ->withDataLabels()
        ->setOpacity(1)
        ->legendPositionBottom()
        ->legendHorizontallyAlignedCenter()
        ->setDataLabelsEnabled(true)
        ->addSlice('Pendientes', $references_pending, '#4FAFFF')
        ->addSlice('Pagadas', $references_success, '#2EFF7A');


        return view('livewire.admin.dashboard-component')
        ->with([
            'pieChartModel' => $pieChartModel,
            'orders' => $orders,
            'total' => $total,
        ]);
    }
}
