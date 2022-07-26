<?php

namespace App\Repositories\MasterData;

use App\Models\MasterData\Group;
use App\Repositories\Contracts\MasterData\GroupInterface;
use App\Repositories\BaseRepository;
use Auth;

class GroupRepository extends BaseRepository implements GroupInterface
{
    /**
     * @var
     */
    protected $model;

    public function __construct(Group $group)
    {
        $this->model = $group;
    }

    public function getAllSimplePaginatedWithParams($params, $limit = 10)
    {
        $groups = $this->model;
        if(isset($params->search) && !empty($params->search)) $groups->where('name', 'like', '%' . $params->search . '%')->orWhere('email', 'like', '%' . $params->search . '%');
        $groups = $groups->simplePaginate($limit);
        return $groups;
    }

    public function getAll()
    {
        $groups = $this->model;
        $groups = $groups->orderBy('id', 'DESC');
        return $groups;
    }
}
