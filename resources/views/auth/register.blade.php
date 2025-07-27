@extends('layouts.guest')
@section('title', 'Register')
@section('content')
<div class="discount" id="register">
    <div class="form">
        <div class="content">
            <h2>Register</h2>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <input class="input" type="text" name="name" placeholder="Your Name" value="{{ old('name') }}">
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
                <input class="input" type="email" name="email" placeholder="Your Email" value="{{ old('email') }}">
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
                <input class="input" type="password" name="password" placeholder="Your Password">
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
                <input class="input" type="password" name="password_confirmation" placeholder="Confirm Password">
                <input type="submit" value="Register">
            </form>
            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
</div>
@endsection