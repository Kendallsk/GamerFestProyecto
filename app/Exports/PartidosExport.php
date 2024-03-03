<?php

namespace App\Exports;

use App\Models\PartidaEqu;
use App\Models\PartidaInd;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\Sheet;

class PartidosExport implements FromView,WithEvents
{
    public $keyWord;
    public function view(): View
    {
        $keyWord = '%'.$this->keyWord .'%';
        return view('livewire.partidos.partidosReporte', [
            'partidosInd' => PartidaInd::with('jugadors1')->with('jugadors2')->with('jugadors3')
            ->whereHas('jugadors1', fn ($query) => 
            $query->where('nombre_jug', 'LIKE', $keyWord)
            )
            ->whereHas('jugadors2', fn ($query) => 
            $query->where('nombre_jug', 'LIKE', $keyWord)
            )
            ->whereHas('jugadors3', fn ($query) => 
            $query->where('nombre_jug', 'LIKE', $keyWord)
            )
            ->orWhere('fecha_par_ind', 'LIKE', $keyWord)
            ->orWhere('observacion_par_ind', 'LIKE', $keyWord)
            ->get(),
        ],[
            'partidosEqu' => PartidaEqu::with('equipo1')->with('equipo2')->with('equipo3')
            ->whereHas('equipo1', fn ($query) => 
            $query->where('nombre_equ', 'LIKE', $keyWord)
            )
            ->whereHas('equipo2', fn ($query) => 
            $query->where('nombre_equ', 'LIKE', $keyWord)
            )
            ->whereHas('equipo3', fn ($query) => 
            $query->where('nombre_equ', 'LIKE', $keyWord)
            )
            ->orWhere('fecha_par_equ', 'LIKE', $keyWord)
            ->orWhere('observacion_par_equ', 'LIKE', $keyWord)
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
        $event->sheet->getStyle("A1:F50")->applyFromArray($styleHeader);
            }
        ];
    }
}

