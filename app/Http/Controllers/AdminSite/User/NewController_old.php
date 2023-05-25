<?php

namespace App\Http\Controllers\AdminSite\User;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Repositories\Interfaces\AdminSite\User\UserRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class NewController extends Controller
{
    private $basePath = "admin-site.pages.users.";
    /**
     * show all user_lists
     */
    public function index()
    {
        $users = User::all();
        $data = [
            'users' => $users
        ];
        
        return viewPath($this->basePath . 'index', $data);
    }

    /**
     * create form amd edit form for user
     * @param  User $user
     */
    public function create(User $user=null)
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
     * store user
     * @param  User $user
     */
    public function store(Request $request, User $user=null)
    {
        $refineData = $request->except('password') + [
            'password' => Hash::make($request->password)
        ];

        if($user) {
            $user->update($refineData);
        }

         User::create($refineData);
         
        return jsonResponse('success', 'Successfully User Created!', route('user.index'));
    }

    /**
     * delete user
     * @param User $user
     */
    public function delete(User $user)
    {
        if($user) {
            $user->delete();
            return jsonResponse('success', 'Successfully User Created!', route('user.index'));
        }

        return jsonResponse('error', 'User Not Fount!', route('user.index'));
    }


}
