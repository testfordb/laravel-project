
@extends('layouts.app')

@section('content')
    
    <div class="work-steps" id="work-steps">
        <h2 class="main-title">How It Works?</h2>
        <div class="container">
            <img src="{{ asset('Imgs/work-steps.png') }}" alt="" class="image">
            <div class="info">
                <div class="box">
                    <img src="{{ asset('Imgs/work-steps-1.png') }}" alt="">
                    <div class="text">
                        <h3>Business Analysis</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt obcaecati quisquam quis laborum recusandae debitis vel</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('Imgs/work-steps-2.png') }}" alt="">
                    <div class="text">
                        <h3>Architecture</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt obcaecati quisquam quis laborum recusandae debitis vel</p>
                    </div>
                </div>
                <div class="box">
                    <img src="{{ asset('Imgs/work-steps-3.png') }}" alt="">
                    <div class="text">
                        <h3>Development</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Enim nesciunt obcaecati quisquam quis laborum recusandae debitis vel</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection
