<?php

namespace App\Exports;

use App\Models\Juego;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class JuegosRepExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public $selected_id, $keyWord,$nombre_jue;
    public function collection()
    {
        $keyWord = '%'.$this->keyWord .'%';

        $juegos = Juego::with('categorias')->with('aulas')
        ->whereHas('aulas', fn ($query) => 
        $query->where('codigo_aul', 'LIKE', $keyWord)
        )
        ->whereHas('categorias', fn ($query) => 
        $query->where('tipo_cat', 'LIKE', $keyWord)
        )
        ->orWhere('nombre_jue', 'LIKE', $keyWord)
        ->orWhere('compania_jue', 'LIKE', $keyWord)
        ->orWhere('precio_jue', 'LIKE', $keyWord)
        ->orWhere('descripcion_jue', 'LIKE', $keyWord)   

        ->get();
        return $juegos;
    }
    public function map($juegos) : array {
        return [
            $juegos->id,
            $juegos->aulas->codigo_aul,
            $juegos->categorias->tipo_cat,
            $juegos->nombre_jue,
            $juegos->compania_jue ,
            $juegos->precio_jue,
            $juegos->descripcion_jue,    
        ] ;
 
 
    }
 
    public function headings() : array {
        return [
           'ID',
           'Aula',
           'Tipo',
           'Nombre',
           'Compania',
           'Precio',
           'Descripcion',
        ] ;
    }
}
