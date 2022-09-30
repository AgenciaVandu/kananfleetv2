<?php

namespace App\Http\Livewire\Admin;

use App\Exports\ReferencesExport;
use App\Models\Order;
use Asantibanez\LivewireCharts\Facades\ColumnChartModel;
use Asantibanez\LivewireCharts\Facades\LivewireCharts;
use Asantibanez\LivewireCharts\Models\RadarChartModel;
use Asantibanez\LivewireCharts\Models\TreeMapChartModel;
use App\Models\Reference;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Maatwebsite\Excel\Facades\Excel;

class DashboardComponent extends Component
{
    public $start_date;
    public $end_date;

    public function mount(){
        $this->start_date = Carbon::now()->subDay()->format('Y-m-d');
        $this->end_date = Carbon::now()->format('Y-m-d');
    }

    public function allTime(){
        $this->start_date = Carbon::parse('1985-10-05')->format('Y-m-d');
        $this->end_date = Carbon::now()->format('Y-m-d');
    }

    public function today(){
        $this->start_date = Carbon::now()->format('Y-m-d');
        $this->end_date = Carbon::now()->format('Y-m-d');
    }

    public function export()
    {
        return Excel::download(new ReferencesExport($this->start_date, $this->end_date), 'prueba.xlsx');
    }

    public function render()
    {
        $total = 0;
        $references = Reference::where('status','like','1')->whereBetween('created_at',[$this->start_date, $this->end_date])->get();

        foreach ($references as $reference) {
            $total = $total+$reference->amount;
        }

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
            'references' => $references,
            'total' => $total,
        ]);
    }
}
