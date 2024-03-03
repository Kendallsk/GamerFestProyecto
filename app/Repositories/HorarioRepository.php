<?php

namespace App\Repositories;

use App\Models\Horario;
use App\Repositories\BaseRepository;

/**
 * Class HorarioRepository
 * @package App\Repositories
 * @version December 9, 2022, 12:43 am +07
*/

class HorarioRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id_jue',
        'hora_ini_hor',
        'hora_fin_hor',
        'observacion_hor'
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
        return Horario::class;
    }
}
