<?php

namespace App\Repositories;

use App\Models\Articles;
use App\Repositories\BaseRepository;

/**
 * Class ArticlesRepository
 * @package App\Repositories
 * @version December 3, 2019, 2:30 pm UTC
*/

class ArticlesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'content'
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
        return Articles::class;
    }
}
