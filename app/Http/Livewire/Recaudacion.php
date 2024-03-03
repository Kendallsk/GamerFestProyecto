<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Juego;
use App\Models\InscripcionInd;
use App\Models\InscripcionEqu;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RecaudacionExport;
use PDF;
class Recaudacion extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_equ, $nombre_jug, $cedula_jug, $telefono_jug, $correo_jug, $descripcion_jug;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.recaudacion.view', [
            'recaudaciones' => InscripcionInd::select('juegos.nombre_jue', InscripcionInd::raw('count(*) as total'), InscripcionInd::raw('sum(precio_ins) as precioIns'))
            ->join('juegos','inscripcion__inds.id_jue', '=', 'juegos.id')
            ->groupBy('juegos.nombre_jue')
            ->get()
    
        ],[
            'recaudacionesEqu' => InscripcionEqu::select('juegos.nombre_jue', InscripcionEqu::raw('count(*) as total'), InscripcionEqu::raw('sum(precio_ins_equ) as precioIns'))
            ->join('juegos','inscripcion__equs.id_jue', '=', 'juegos.id')
            ->groupBy('juegos.nombre_jue')
            ->get(),
    
        ]);
    }
	
    public function viewPDF()
    {
       

        $recaudacionInd = InscripcionInd::select('juegos.nombre_jue', InscripcionInd::raw('count(*) as total'), InscripcionInd::raw('sum(precio_ins) as precioIns'))
        ->join('juegos','inscripcion__inds.id_jue', '=', 'juegos.id')
        ->groupBy('juegos.nombre_jue')
        ->get();
        $recaudacionEqu = InscripcionEqu::select('juegos.nombre_jue', InscripcionEqu::raw('count(*) as total'), InscripcionEqu::raw('sum(precio_ins_equ) as precioIns'))
        ->join('juegos','inscripcion__equs.id_jue', '=', 'juegos.id')
        ->groupBy('juegos.nombre_jue')
        ->get();
        $pdf = PDF::loadView('livewire.recaudacion.recaudacionReporte', array('recaudacionInd'=> $recaudacionInd),array('recaudacionEqu'=> $recaudacionEqu))->setPaper('a4','portrait');
        return $pdf->stream();
    }
    
    public function downloadPDF()
    {
        $recaudacionInd = InscripcionInd::select('juegos.nombre_jue', InscripcionInd::raw('count(*) as total'), InscripcionInd::raw('sum(precio_ins) as precioIns'))
        ->join('juegos','inscripcion__inds.id_jue', '=', 'juegos.id')
        ->groupBy('juegos.nombre_jue')
        ->get();
        $recaudacionEqu = InscripcionEqu::select('juegos.nombre_jue', InscripcionEqu::raw('count(*) as total'), InscripcionEqu::raw('sum(precio_ins_equ) as precioIns'))
        ->join('juegos','inscripcion__equs.id_jue', '=', 'juegos.id')
        ->groupBy('juegos.nombre_jue')
        ->get();
        $pdf = PDF::loadView('livewire.recaudacion.recaudacionReporte',  array('recaudacionInd'=> $recaudacionInd),array('recaudacionEqu'=> $recaudacionEqu))->setPaper('a4','portrait');
        return $pdf->download('Reacudacion_Inscritos.pdf');
    }
    public function exportExcel(){

        return Excel::download(new RecaudacionExport, 'recaudacion.xlsx');
    }
}
