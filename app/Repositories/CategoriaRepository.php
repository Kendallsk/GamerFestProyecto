<?php

namespace App\Repositories;

use App\Models\Categoria;
use App\Repositories\BaseRepository;

/**
 * Class CategoriaRepository
 * @package App\Repositories
 * @version December 8, 2022, 8:02 am +07
*/

class CategoriaRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'tipo_cat',
        'num_jug_cat',
        'descripcion_cat'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Categoria::class;
    }
}
