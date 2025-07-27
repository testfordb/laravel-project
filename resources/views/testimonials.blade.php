
@extends('layouts.app')

@section('content')
    
    <div class="testimonials" id="testimonials">
        <h2 class="main-title">Testimonials</h2>
        <div class="container">
            @for ($i = 1; $i <= 6; $i++)
                <div class="box">
                    <img src="{{ asset('Imgs/avatar-0' . $i . '.png') }}" alt="">
                    <h3>Mohamed Farag</h3>
                    <span class="title">Full Stack Developer</span>
                    <div class="rate">
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="fas fa-star filled"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores et reiciendis voluptatum, amet est natus quaerat ducimus</p>
                </div>
            @endfor
        </div>
    </div>
    
@endsection
