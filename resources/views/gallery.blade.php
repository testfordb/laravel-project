
@extends('layouts.app')

@section('content')
    
    <div class="gallery" id="gallery">
        <h2 class="main-title">Gallery</h2>
        <div class="container">
            @for ($i = 1; $i <= 6; $i++)
                <div class="box">
                    <div class="image">
                        <img src="{{ asset('Imgs/gallery-0' . $i . ($i <= 3 ? '.png' : ($i == 5 ? '.jpg' : '.png'))) }}" alt="">
                    </div>
                </div>
            @endfor
        </div>
    </div>
    
@endsection
