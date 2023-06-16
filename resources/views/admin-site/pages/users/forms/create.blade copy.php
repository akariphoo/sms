<x-forms.form-tag :attrs="[
    'id' => 'user-form',
    'formName' => 'user-form',
    'id' => 'user-form',
    'class' => 'user-form',
    'method' => $method,
    'action' => $route
]">
  
    <x-forms.text-input :attrs="[
        'name' => 'name',
        'id' => 'name',
        'value' => $user->name,
        'label' => 'Name',
        'class' => 'name',
        'required' => 'required',
        'placeholder' => ''
    ]" />
    <x-forms.text-input :attrs="[
        'name' => 'email',
        'id' => 'email',
        'value' => $user->email,
        'label' => 'Email',
        'class' => 'email',
        'required' => 'required',
        'placeholder' => ''
    ]" />
    <x-forms.password-input :attrs="[
        'name' => 'password',
        'id' => 'password',
        'value' => '',
        'label' => 'Password',
        'class' => 'password',
        'required' => $user->id ? '' : 'required',
        'placeholder' => ''
    ]" />
    <x-forms.password-input :attrs="[
        'name' => 'password_confirmation',
        'id' => 'password_confirmation',
        'value' => '',
        'label' => 'Confirm Password',
        'class' => 'password_confirmation',
        'required' => $user->id ? '' : 'required',
        'placeholder' => ''
    ]" />
    <x-forms.select-with-key-value :attrs="[
        'name' => 'role_id',
        'id' => 'role_id',
        'label' => 'Role',
        'class' => 'role_id',
        'selected' => $user->role_id,
        'required' => 'required',
        'placeholder' => '',
        'list' => $roles
        ]"
    />
  
</x-forms.form-tag>

<div class="text-center pt-5">
    <button type="submit" name="form-submit-button" form="user-form" class="btn btn-success btn-hover">
        {{ __($button) }}
    </button>
</div>

