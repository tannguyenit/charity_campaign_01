<?php
namespace App\Repositories\Follow;

use App\Models\Relationship;
use App\Repositories\BaseRepository;
use App\Repositories\Follow\FollowRepositoryInterface;
use Auth;

class FollowRepository extends BaseRepository implements FollowRepositoryInterface
{

    public function model()
    {
        return Relationship::class;
    }

    public function followOrUnFollowUser($targetId)
    {
        if (!$targetId) {
            return false;
        }

        $follow = $this->getFollowUser($targetId);

        if ($follow) {
            $follow->status = $follow->status ? config('constants.NOT_ACTIVE') : config('constants.ACTIVATED');
            $follow->save();

            return $follow;
        }

        return $this->model->create([
            'user_id' => auth()->id(),
            'target_id' => $targetId,
            'target_type' => config('constants.FOLLOW_USER'),
            'status' => config('constants.ACTIVATED'),
        ]);
    }

    public function getFollowUser($targetId)
    {
        if (!$targetId) {
            return false;
        }

        return $this->model->where('user_id', auth()->id())
            ->where('target_id', $targetId)
            ->where('target_type', config('constants.FOLLOW_USER'))
            ->first();
    }

    public function following($userId)
    {
        if (!$userId) {
            return false;
        }

        return $this->model->where('user_id', $userId)
            ->where('target_type', config('constants.FOLLOW_USER'))
            ->where('status', config('constants.ACTIVATED'))
            ->with('following');
    }

    public function followers($userId)
    {
        if (!$userId) {
            return false;
        }

        return $this->model->where('target_id', $userId)
            ->where('target_type', config('constants.FOLLOW_USER'))
            ->where('status', config('constants.ACTIVATED'))
            ->with('follower');
    }

    public function searchUserFollowing($keyWords, $arrId)
    {

        $users = $this->model->where('user_id', auth()->id())
            ->where('target_type', config('constants.FOLLOW_USER'))
            ->where('status', config('constants.ACTIVATED'))
            ->with(['following' => function ($query) use ($keyWords, $arrId) {
                $query->where('fullname', 'LIKE', '%' . $keyWords . '%')->whereNotIn('id', $arrId);
            }])->get();

        $result = [];
        foreach ($users as $user) {
            $result[] = [
                'html' => view('messenger.search_result', ['user' => $user])->render(),
                'success' => true,
            ];
        }

        return $result;
    }
}
