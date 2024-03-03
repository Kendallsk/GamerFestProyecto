<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'aulas';

    protected $fillable = ['codigo_aul','edificio_aul','observacion_aul'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juegos()
    {
        return $this->hasMany('App\Models\Juego', 'id_aul', 'id');
    }
    
}
