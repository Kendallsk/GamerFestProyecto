<?php

namespace App\Exports;

use App\Models\InscripcionInd;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class JugadorInsExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $selected_id, $keyWord,$nombre_jue;
    public function collection()
    {
        //returns Data with User data, all user data, not restricted to start/end dates
        $keyWord = '%'.$this->keyWord .'%';
        $nombre_jue = $this->nombre_jue ;
        $jugadorIns =  InscripcionInd::with('jugadors')->with('juegos')
        ->whereHas('jugadors', fn ($query) => 
        $query->orderBy('nombre_jug','desc')
    )
                    ->whereHas('juegos', function ($query) use($nombre_jue){
                        if($nombre_jue){
                            $query->where('nombre_jue', '=', $nombre_jue);
                            
                        }
                    } )
                    
                    
                    
        ->get();
        return $jugadorIns;
    }
 
    public function map($jugadorIns) : array {
        return [
            $jugadorIns->id,
            $jugadorIns->jugadors->nombre_jug,
            $jugadorIns->jugadors->cedula_jug,
            $jugadorIns->jugadors->telefono_jug,
            $jugadorIns->jugadors->correo_jug,
            $jugadorIns->jugadors->descripcion_jug,
            $jugadorIns->juegos->nombre_jue,
            $jugadorIns->precio_ins,
            
        ] ;
 
 
    }
 
    public function headings() : array {
        return [
           'ID',
           'Nombre',
           'Cedula',
           'Telfono',
           'Correo',
           'Descripcion',
           'Juego',
           'Precio'
        ] ;
    }
}

