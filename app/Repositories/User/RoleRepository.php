<?php

namespace App\Repositories\User;

use Spatie\Permission\Models\Role;
use App\Repositories\Contracts\RoleInterface;
use App\Repositories\BaseRepository;

class RoleRepository extends BaseRepository implements RoleInterface
{
    /**
     * @var
     */
    protected $model;

    public function __construct(Role $role)
    {
        $this->model = $role;
    }

    public function getAllSimplePaginatedWithParams($params, $limit = 10)
    {
        $roles = $this->model;
        if(isset($params->search) && !empty($params->search)) $roles->where('name', 'like', '%' . $params->search . '%');
        $roles = $roles->simplePaginate($limit);
        return $roles;
    }

    public function getAll()
    {
        $roles = $this->model->orderBy('id', 'DESC');
        return $roles;
    }
}
