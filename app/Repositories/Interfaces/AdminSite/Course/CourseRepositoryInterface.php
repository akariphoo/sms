<?php 
namespace App\Repositories\Interfaces\AdminSite\Course;

interface CourseRepositoryInterface 
{
    //get all courses
    public function index();

    //create form for course
    public function create($course);

    //store and update course
    public function store($request, $course);

    //delete course data
    public function delete($course);

}