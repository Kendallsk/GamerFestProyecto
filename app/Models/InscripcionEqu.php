<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InscripcionEqu extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'inscripcion__equs';

    protected $fillable = ['id_equ','id_jue','precio_ins_equ','pago_ins_equ'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function equipos()
    {
        return $this->hasOne('App\Models\Equipo', 'id', 'id_equ');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function juegos()
    {
        return $this->hasOne('App\Models\Juego', 'id', 'id_jue');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function partidaEquses()
    {
        return $this->hasMany('App\Models\PartidaEqu', 'id_equ2', 'id');
    }
    

}
