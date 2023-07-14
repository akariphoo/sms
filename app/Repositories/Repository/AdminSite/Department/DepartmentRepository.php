<?php 
namespace App\Repositories\Repository\AdminSite\Department;

use App\Models\Department\Department;
use App\Repositories\Interfaces\AdminSite\Department\DepartmentRepositoryInterface;

class DepartmentRepository implements DepartmentRepositoryInterface
{
    private $basePath = "admin-site.pages.departments.";

    /**
     * get all departments
     */
    public function getAllDepts() {
        $departments = Department::all();
        $data = [
            'departments' => $departments
        ];

        return viewPath($this->basePath . 'index', $data);
    }

    /**
     * create form for department
     */
    public function create($department) {
        $data = [
            'title' => 'Department Create',
            'route' => route('department.store', $department),
            'method' => 'POST',
            'button' => $department ? 'Update' :'Save',
            'department' => $department ?? New Department(),
        ];

        return viewPath($this->basePath. 'create', $data);
    }

    /**
     * store and update Department
     */
    public function store($request, $department) {
        $refineData = $request->all();
        if($department) {
            $department->update($refineData);

            return jsonResponse('success', 'Successfully updated!', route('department.index'));
        }else {
            $department = Department::create($refineData);

            return jsonResponse('success', 'Successfully created!', route('department.index'));
        }
    }

    /**
     * delete department
     */
    public function delete($department) {
        $department->delete();

        return jsonResponse('success', 'Successfully Deleted!', route('department.index'));
    }
}
