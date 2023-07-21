<?php

namespace App\Http\Controllers\AdminSite\Course;

use App\Http\Controllers\Controller;
use App\Http\Requests\Course\StoreRequest;
use App\Models\Course\Course;
use App\Repositories\Interfaces\AdminSite\Course\CourseRepositoryInterface;
use Illuminate\Http\Request;

class NewController extends Controller
{
    /**
     * get all courses
     */
    public function index(
        CourseRepositoryInterface $courseRepositoryInterface
    )
    {
        return $courseRepositoryInterface->index();
    }

    /**
     * create form for Course
     */
    public function create(
        CourseRepositoryInterface $courseRepositoryInterface,
        Course $course = null
    )
    {
        return $courseRepositoryInterface->create($course);
    }

    /**
     * store and update courses
     */
    public function store(
        CourseRepositoryInterface $courseRepositoryInterface,
        StoreRequest $request,
        Course $course = null
    )
    {
        return $courseRepositoryInterface->store($request, $course);
    }

    /**
     * delete course 
     * @param Course $course
     */
    public function delete(
        CourseRepositoryInterface $courseRepositoryInterface,
        Course $course
    )
    {
        return $courseRepositoryInterface->delete($course);
    }
}
