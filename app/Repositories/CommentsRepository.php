<?php

namespace App\Repositories;

use App\Models\Comments;
use App\Repositories\BaseRepository;

/**
 * Class CommentsRepository
 * @package App\Repositories
 * @version December 3, 2019, 2:35 pm UTC
*/

class CommentsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'textarea'
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
        return Comments::class;
    }
}
