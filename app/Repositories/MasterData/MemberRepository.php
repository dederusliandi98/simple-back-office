<?php

namespace App\Repositories\MasterData;

use App\Models\MasterData\Member;
use App\Repositories\Contracts\MasterData\MemberInterface;
use App\Repositories\BaseRepository;
use Auth;

class MemberRepository extends BaseRepository implements MemberInterface
{
    /**
     * @var
     */
    protected $model;

    public function __construct(Member $member)
    {
        $this->model = $member;
    }

    public function getAllSimplePaginatedWithParams($params, $limit = 10)
    {
        $members = $this->model;
        if(isset($params->search) && !empty($params->search)) $members->where('name', 'like', '%' . $params->search . '%')->orWhere('email', 'like', '%' . $params->search . '%');
        $members = $members->simplePaginate($limit);
        return $members;
    }

    public function getAll()
    {
        $members = $this->model;
        $members = $members->orderBy('id', 'DESC');
        return $members;
    }
}
