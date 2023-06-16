<?php
namespace App\Repositories\Repository\AdminSite\User;

use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\AdminSite\User\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    private $basePath = "admin-site.pages.users.";

    /**
     * get all user's data
     */
    public function getAllUser() 
    {
        $users = User::all();
        $data = [
            'users' => $users
        ];
        
        return viewPath($this->basePath . 'index', $data);
    }

    /**
     * show user's create and edit form
     * @param User $user
     */
    public function create($user)
    {
        $data = [
            'title' => 'User Create',
            'route' => route('user.store', $user),
            'method' => 'POST',
            'button' => $user ? 'Update' :'Save',
            'user' => $user ?? New User(),
            'roles' => Role::pluck('name', 'id')
        ];

        return viewPath($this->basePath. 'create', $data);
    }

    /**
     * store and update user's data
     * @param $request
     * @param User $user
     */
    public function store($request, $user)
    {
        $refineData = $request->except('password') + [
            'password' => Hash::make($request->password)
        ];

        if($user) {
            $user->update($refineData);

            return jsonResponse('success', 'Successfully User Updated!', route('user.index'));
        }

         User::create($refineData);
         
        return jsonResponse('success', 'Successfully User Created!', route('user.index'));
    }

    /**
     * delete user
     * @param User $user
     */
    public function delete($user)
    {
        if($user) {
            $user->delete();
            return jsonResponse('success', 'Successfully User Deleted!', route('user.index'));
        }

        return jsonResponse('error', 'User Not Fount!', route('user.index'));
    }
}