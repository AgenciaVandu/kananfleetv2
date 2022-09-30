<?php

namespace App\Exports;

use App\Models\Reference;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ReferencesExport implements FromView,WithStyles
{

    public $start_date,$end_date;
    /**
    * @return \Illuminate\Support\Collection
    */


    public function __construct($start_date, $end_date){
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            /* 1    => ['font' => ['bold' => true]], */

            // Styling a specific cell by coordinate.
            'A2' => ['font' => ['bold' => true,'size' => 24]],
            'A3' => ['font' => ['bold' => true,'size' => 12]],
            '5' => ['font' => ['bold' => true,'size' => 12]],
        ];
    }

    public function view(): View
    {
        return view('exports.references-pending',[
            'references' => Reference::where('status','like','1')->whereBetween('created_at',[$this->start_date, $this->end_date])->get(),
            'start_date' => $this->start_date,
            'end_date' => $this->end_date
        ]);
    }
}
