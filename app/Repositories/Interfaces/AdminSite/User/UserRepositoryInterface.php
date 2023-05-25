<?php 
namespace App\Repositories\Interfaces\AdminSite\User;

interface UserRepositoryInterface
{
    // show user lists
    public function getAllUser();

    // user create and edit
    public function create($user);

    // store user
    public function store($request, $user);

    // delete user
    public function delete($user);

}

?>