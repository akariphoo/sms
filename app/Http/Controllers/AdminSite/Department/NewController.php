<?php

namespace App\Http\Controllers\AdminSite\Department;

use App\Http\Controllers\Controller;
use App\Http\Requests\Department\StoreRequest;
use App\Models\Department\Department;
use App\Repositories\Interfaces\AdminSite\Department\DepartmentRepositoryInterface;
use Illuminate\Http\Request;

class NewController extends Controller
{
    /**
     * get all departments
     */
    public function index(
        DepartmentRepositoryInterface $departmentRepositoryInterface
    )
    {
        return $departmentRepositoryInterface->getAllDepts();
    }

    /**
     * create form for deparment
     */
    public function create(
        DepartmentRepositoryInterface $departmentRepositoryInterface,
        Department $department = null
    ) 
    {
        return $departmentRepositoryInterface->create($department);
    }

    /**
     * store and update department
     */
    public function store(
        DepartmentRepositoryInterface $departmentRepositoryInterface,
        StoreRequest $request,
        Department $department = null
    )
    {
        return $departmentRepositoryInterface->store($request, $department);
    }

    /**
     * delete department
     */
    public function delete(
        DepartmentRepositoryInterface $departmentRepositoryInterface,
        Department $department
    )
    {
        return $departmentRepositoryInterface->delete($department);
    }
}
