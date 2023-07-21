<?php 
namespace App\Repositories\Repository\AdminSite\Course;

use App\Models\Course\Course;
use App\Models\Department\Department;
use App\Repositories\Interfaces\AdminSite\Course\CourseRepositoryInterface;

class CourseRepository implements CourseRepositoryInterface
{
    private $basePath = "admin-site.pages.courses.";
    
    /**
     * get all courses
     */
    public function index() {
        $courses = Course::all();

        $data = [
            'courses' => $courses
        ];

        return viewPath($this->basePath. 'index', $data);
    }

    /**
     * create form for course
     */
    public function create($course) {
        $data = [
            'title' => 'Course Create',
            'route' => route('course.store', $course),
            'method' => 'POST',
            'button' => $course ? 'Update' :'Save',
            'course' => $course ?? New Course(),
            'departments' => Department::pluck('name', 'id')
        ];

        return viewPath($this->basePath.'create', $data);
    }

    /**
     * store and update course data
     * @param Request $request
     * @param Course $course
     */
    public function store($request, $course) {
        $refineData = $request->except('__token');
        if($course) {
            $course->update($refineData);

            return jsonResponse('success', 'Successfully updated!', route('course.index'));
        } else {
            $course = Course::create($refineData);

            return jsonResponse('success', 'Successfully created!', route('course.index'));
        }
    }

    /**
     * delete course data
     * @param Course $course
     */
    public function delete($course) {
        if($course) {
            $course->delete();

            return jsonResponse('success', 'Successfully Deleted!', route('course.index'));
        }

        return jsonResponse('error', 'Course Not Found!', route('course.index'));
    }

}