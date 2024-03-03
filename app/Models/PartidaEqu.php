<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartidaEqu extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'partida__equs';

    protected $fillable = ['id_equ1','id_equ2','ganador_par_equ','fecha_par_equ','observacion_par_equ'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function inscripcionEqu()
    {
        return $this->hasOne('App\Models\InscripcionEqu', 'id', 'ganador_par_equ');
    }
    public function equipo1()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'id_equ1');
    }
    public function equipo2()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'id_equ2');
    }
    public function equipo3()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'ganador_par_equ');
    }
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
}
