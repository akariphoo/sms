@extends('layouts.app')

@section('content')
<div class="container">
    <div class="drop">
        <div class="content">
            <h2>Sign in</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="inputBox">
                    <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                    @enderror
                </div>
        
                <div class="inputBox">
                    <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
               
                <div class="inputBox">
                    <input type="submit" value="Login">
                </div>      
            </form>
        </div>
        @if (Route::has('password.request'))
        <a class="btns" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
    @endif
    </div>
</div>
@endsection
