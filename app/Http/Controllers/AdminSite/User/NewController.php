<?php

namespace App\Http\Controllers\AdminSite\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Repositories\Interfaces\AdminSite\User\UserRepositoryInterface;
use Illuminate\Http\Request;

class NewController extends Controller
{
    /**
     * show all user_lists
     */
    public function index(
        UserRepositoryInterface $userRepositoryInterface
    )
    {
        return $userRepositoryInterface->getAllUser();
    }

    /**
     * show create and edit form for user
     * @param User $user
     */
    public function create(
        UserRepositoryInterface $userRepositoryInterface,
        User $user=null
    )
    {
       return $userRepositoryInterface->create($user);
    }

    /**
     * store and update user's date
     * @param Request $request
     * @param User $user
     */
    public function store(
        UserRepositoryInterface $userRepositoryInterface,
        Request $request,
        User $user=null)
    {
        return $userRepositoryInterface->store($request, $user);
    }

    /**
     * delete user
     * @param  User $user
     */
    public function delete(
        UserRepositoryInterface $userRepositoryInterface,
        User $user
    )
    {
        return $userRepositoryInterface->delete($user);
    }
}
