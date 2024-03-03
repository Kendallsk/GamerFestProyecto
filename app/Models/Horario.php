<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'horarios';

    protected $fillable = ['id_jue','hora_ini_hor','hora_fin_hor','observacion_hor'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function juegos()
    {
        return $this->hasOne('App\Models\Juego', 'id', 'id_jue');
    }
    
}
