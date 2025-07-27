@extends('layouts.guest')
@section('title', 'Login')
@section('content')
<div class="discount" id="login">
    <div class="form">
        <div class="content">
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <input class="input" type="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
                <input class="input" type="password" name="password" placeholder="Your Password">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
                <input type="submit" value="Login">
            </form>
            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
        </div>
    </div>
</div>
@endsection