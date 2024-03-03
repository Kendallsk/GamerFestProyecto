<?php

namespace App\Exports;

use App\Models\InscripcionInd;
use App\Models\InscripcionEqu;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\Sheet;
class RecaudacionExport implements FromView,WithEvents
{
    public $nombre_equ=null,$sheet;
    public function view(): View
    {
        return view('livewire.recaudacion.recaudacionReporte', [
            'recaudacionInd' => InscripcionInd::select('juegos.nombre_jue', InscripcionInd::raw('count(*) as total'), InscripcionInd::raw('sum(precio_ins) as precioIns'))
            ->join('juegos','inscripcion__inds.id_jue', '=', 'juegos.id')
            ->groupBy('juegos.nombre_jue')
            ->get()
    
        ],[
            'recaudacionEqu' => InscripcionEqu::select('juegos.nombre_jue', InscripcionEqu::raw('count(*) as total'), InscripcionEqu::raw('sum(precio_ins_equ) as precioIns'))
            ->join('juegos','inscripcion__equs.id_jue', '=', 'juegos.id')
            ->groupBy('juegos.nombre_jue')
            ->get(),
    
        ]);
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                
                
                $styleHeader = [
                    'borders' => [
                        'allBorders' => [
                            'borderStyle' => 'thin',
                            'color' => ['rgb' => '808080']
                        ],
                    ]
                ];
        $event->sheet->getStyle("A1:D50")->applyFromArray($styleHeader);
            }
        ];
    }
}
