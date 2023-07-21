<x-forms::form-tag :attrs="[
    'id' => 'course-form',
    'formName' => 'course-form',
    'id' => 'course-form',
    'class' => 'course-form',
    'method' => $method,
    'action' => $route
]">  
    <x-forms::text-input :attrs="[
        'name' => 'name',
        'id' => 'name',
        'value' => $course->name,
        'label' => 'Course Name',
        'class' => 'name',
        'required' => 'required',
        'placeholder' => 'Enter Course Name'
    ]" />
    <x-forms::textarea :attrs="[
        'name' => 'description',
        'id' => 'description-id',
        'class' => 'description',
        'value' => $course->description,
        'placeholder' => 'Enter Description',
        'label' => 'Description',
        'required' => 'no'
    ]" />
    <x-forms::radio :attrs="[
        'name' => 'status',
        'mainLabel' => 'Status',
        'labelOne' => 'active',
        'labelTwo' => 'inactive',
        'hoverTitleOne' => 'Active',
        'hoverTitleTwo' => 'Inactive',
        'idOne' => 'active',
        'idTwo' => 'inactive',
        'valueOne' => 'active',
        'valueTwo' => 'inactive',
        'oldValue' =>  $course->status,
        'classOne' => '',
        'classTwo' => 'ml-4',
        'required' => 'required',
    ]"/>
    <x-forms::select-with-key-value :attrs="[
        'name' => 'department_id',
        'id' => 'department_id',
        'label' => 'Choose Department',
        'class' => 'department_id',
        'selected' => $course->department_id,
        'required' => 'required',
        'placeholder' => 'Please Choose Department',
        'list' => $departments
    ]"/>

</x-forms::form-tag>

<div class="text-center pt-5">
    <button type="submit" name="form-submit-button" form="course-form" class="btn btn-success btn-hover">
        {{ __($button) }}
    </button>
</div>

