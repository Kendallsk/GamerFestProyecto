<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Jugador;
use App\Models\Equipo;
use Illuminate\Support\Facades\DB;
use App\Models\InscripcionEqu;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EquiposInsExport;
use PDF;
class EquiposIns extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $id_equ, $nombre_jug, $cedula_jug, $telefono_jug, $correo_jug, $descripcion_jug, $nombre_equ=null;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        $nombre_equ = $this->nombre_equ ;
        $equipos = Equipo::all();
        return view('livewire.equipos-ins.view', [
            'equiposIns' => DB::select('SELECT * FROM 
            (SELECT equipos.nombre_equ,jugadors.nombre_jug, jugadors.cedula_jug, jugadors.telefono_jug,jugadors.correo_jug,jugadors.descripcion_jug FROM jugadors  INNER JOIN equipos  ON jugadors.id_equ = equipos.id  ) t1
            INNER JOIN 
            (SELECT equipos.nombre_equ, equipos.descripcion_equ, inscripcion__equs.precio_ins_equ FROM inscripcion__equs INNER JOIN equipos  ON inscripcion__equs.id_equ = equipos.id  ) t2
        ON (t1.nombre_equ = t2.nombre_equ) WHERE t1.nombre_equ = "'.$nombre_equ.'"')],compact('equipos'));
    }
	
    public function viewPDF()
    {

        $nombre_equ = $_GET['nombre_equ'] ;
        $equiposIns =DB::select('SELECT * FROM 
        (SELECT equipos.nombre_equ,jugadors.nombre_jug, jugadors.cedula_jug, jugadors.telefono_jug,jugadors.correo_jug,jugadors.descripcion_jug FROM jugadors  INNER JOIN equipos  ON jugadors.id_equ = equipos.id  ) t1
        INNER JOIN 
        (SELECT equipos.nombre_equ, equipos.descripcion_equ, inscripcion__equs.precio_ins_equ FROM inscripcion__equs INNER JOIN equipos  ON inscripcion__equs.id_equ = equipos.id  ) t2
    ON (t1.nombre_equ = t2.nombre_equ) WHERE t1.nombre_equ = "'.$nombre_equ.'"');
        
        $pdf = PDF::loadView('livewire.equipos-ins.equipoInsReporte', array('equiposIns'=> $equiposIns))->setPaper('a4','landscape');
        return $pdf->stream();
    }
    
    public function downloadPDF()
    {
        $nombre_equ = $_GET['nombre_equ'] ;
        $equiposIns =DB::select('SELECT * FROM 
        (SELECT equipos.nombre_equ,jugadors.nombre_jug, jugadors.cedula_jug, jugadors.telefono_jug,jugadors.correo_jug,jugadors.descripcion_jug FROM jugadors  INNER JOIN equipos  ON jugadors.id_equ = equipos.id  ) t1
        INNER JOIN 
        (SELECT equipos.nombre_equ, equipos.descripcion_equ, inscripcion__equs.precio_ins_equ FROM inscripcion__equs INNER JOIN equipos  ON inscripcion__equs.id_equ = equipos.id  ) t2
    ON (t1.nombre_equ = t2.nombre_equ) WHERE t1.nombre_equ = "'.$nombre_equ.'"');

        $pdf = PDF::loadView('livewire.equipos-ins.equipoInsReporte', array('equiposIns'=> $equiposIns))->setPaper('a4','landscape');
        return $pdf->download('Equipos_Inscritos.pdf');
    }
    public function exportExcel(){

        return Excel::download(new EquiposInsExport, 'equipos.xlsx');
    }
}
