@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                <div class="col-md-12 col-lg-4 col-xs-12">
            <div class="login_card shadow">
                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-12 col-md-10 col-lg-12 col-xl-10">
                        <div class="card-body">
                            <h3 class="mb-5 white text-center">{{ __('To Login') }}</h3>
                            <x-forms.form-tag :attrs="[
                                'id' => 'login-form',
                                'formName' => 'login-form',
                                'id' => 'login-form',
                                'class' => 'login-form',
                                'method' => $formData['method'],
                                'action' => $formData['route']
                            ]">
                                <x-login.text-input :attrs="[
                                    'name' => 'email',
                                    'id' => 'email',
                                    'value' => '',
                                    'class' => 'email',
                                    'required' => '',
                                    'placeholder' => 'Email or User Name or Login_Id'
                                ]"/>

                                <x-login.password-input :attrs="[
                                    'name' => 'password',
                                    'id' => 'password',
                                    'value' => '',
                                    'class' => 'password',
                                    'required' => '',
                                    'placeholder' => 'Password'
                                ]"/>

                                <div class="row mb-4">
                                    <!-- Checkbox -->
                                    <div class="col-sm-6 col-md-6 col-6 col-xs-6">
                                        <input type="checkbox" value="1" id="remember" name="remember"/>
                                        <label class="form-check-label white" for="remember"> {{ __('To Record Password') }} </label>
                                    </div>
                                </div>
                                <button class="btn btn-lg btn-block login_btn_bg" type="submit" name="form-submit-button" form="login-form">{{ __($formData['button']) }}</button>
                                <hr>
                                <a href="{{ route('dbms.login') }}" class="btn btn-lg btn-block second_login_btn_bg">{{ __('Login with SSO') }}</a>
                            </x-forms.form-tag>
                        </div>
                    </div>
                </div>
            </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
