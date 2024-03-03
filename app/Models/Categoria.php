<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
	use HasFactory;
	
    public $timestamps = true;

    protected $table = 'categorias';

    protected $fillable = ['tipo_cat','num_jug_cat','descripcion_cat'];
	
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function juegos()
    {
        return $this->hasMany('App\Models\Juego', 'id_cat', 'id');
    }
    
}
