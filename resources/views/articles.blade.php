
@extends('layouts.app')

@section('content')
    
    <div class="articles" id="articles">
        <h2 class="main-title">Articles</h2>
        <div class="container">
            @for ($i = 1; $i <= 8; $i++)
                <div class="box">
                    <img src="{{ asset('Imgs/cat-0' . $i . '.jpg') }}" alt="">
                    <div class="text">
                        <h3>Test Title</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reprehenderit</p>
                    </div>
                    <div class="info">
                        <a href="#">Read More</a>
                        <i class="fas fa-long-arrow-alt-right"></i>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="spikes"></div>
    
@endsection
