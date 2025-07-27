
@extends('layouts.app')

@section('content')
    
    <div class="team-members" id="team-members">
        <h2 class="main-title">Team Members</h2>
        <div class="container">
            @for ($i = 1; $i <= 8; $i++)
                <div class="box">
                    <div class="data">
                        <img src="{{ asset('Imgs/team-0' . $i . ($i <= 4 ? '.jpg' : ($i == 5 || $i == 6 ? '.png' : '.jpg'))) }}" alt="">
                        <div class="social">
                            <a href=""><i class="fab fa-facebook-f"></i></a>
                            <a href=""><i class="fab fa-twitter"></i></a>
                            <a href=""><i class="fab fa-linkedin-in"></i></a>
                            <a href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="info">
                        <h3>Name</h3>
                        <p>Simple Short Description</p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
    <div class="spikes"></div>
    
@endsection
