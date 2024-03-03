<?php

namespace App\Exports;

use App\Models\Equipo;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\Sheet;
class EquiposInsExport implements FromView,WithEvents
{
    public $nombre_equ=null,$sheet;
    public function view(): View
    {
        $nombre_equ = $_GET['nombre_equ'] ;
        return view('livewire.equipos-ins.equipoInsReporte', [
            'equiposIns' => DB::select('SELECT * FROM 
            (SELECT equipos.nombre_equ,jugadors.nombre_jug, jugadors.cedula_jug, jugadors.telefono_jug,jugadors.correo_jug,jugadors.descripcion_jug FROM jugadors  INNER JOIN equipos  ON jugadors.id_equ = equipos.id  ) t1
            INNER JOIN 
            (SELECT equipos.nombre_equ, equipos.descripcion_equ, inscripcion__equs.precio_ins_equ FROM inscripcion__equs INNER JOIN equipos  ON inscripcion__equs.id_equ = equipos.id  ) t2
        ON (t1.nombre_equ = t2.nombre_equ) WHERE t1.nombre_equ = "'.$nombre_equ.'"')
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