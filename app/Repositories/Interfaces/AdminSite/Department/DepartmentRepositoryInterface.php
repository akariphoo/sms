<?php 
namespace App\Repositories\Interfaces\AdminSite\Department;

interface DepartmentRepositoryInterface {

    /**
     * get all departments
     */
    public function getAllDepts();

    /**
     * create form for department
     */
    public function create($department);

    /**
     * store and update department
     * @param Request $request
     * @param Department $department
     */
    public function store($request, $department);

    /**
     * delete department
     * @param Department $department
     */
    public function delete($department);
}