<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'equipos';

    protected $fillable = ['nombre_equ','descripcion_equ'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function inscripcionEquses()
    {
        return $this->hasMany('App\Models\InscripcionEqu', 'id_equ', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function jugadors()
    {
        return $this->hasMany('App\Models\Jugador', 'id_equ', 'id');
    }
    
}
