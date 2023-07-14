<x-forms::form-tag :attrs="[
    'id' => 'department-form',
    'formName' => 'department-form',
    'id' => 'department-form',
    'class' => 'department-form',
    'method' => $method,
    'action' => $route
]">  
    <x-forms::text-input :attrs="[
        'name' => 'name',
        'id' => 'name',
        'value' => $department->name,
        'label' => 'Department Name',
        'class' => 'name',
        'required' => 'required',
        'placeholder' => ''
    ]" />
    <x-forms::textarea :attrs="[
        'name' => 'description',
        'id' => 'description-id',
        'class' => 'description',
        'value' => $department->description,
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
        'oldValue' =>  $department->status,
        'classOne' => '',
        'classTwo' => 'ml-4',
        'required' => 'required',
    ]"/>

</x-forms::form-tag>

<div class="text-center pt-5">
    <button type="submit" name="form-submit-button" form="department-form" class="btn btn-success btn-hover">
        {{ __($button) }}
    </button>
</div>

