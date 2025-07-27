
@extends('layouts.app')

@section('content')
    
    <div class="our-skills" id="our-skills">
        <h2 class="main-title">Our Skills</h2>
        <div class="container">
            <img src="{{ asset('Imgs/skills.png') }}" alt="">
            <div class="skills">
                <div class="skill">
                    <h3>HTML <span>80%</span></h3>
                    <div class="the-progress">
                        <span style="width:80%"></span>
                    </div>
                </div>
                <div class="skill">
                    <h3>CSS <span>85%</span></h3>
                    <div class="the-progress">
                        <span style="width:85%"></span>
                    </div>
                </div>
                <div class="skill">
                    <h3>JavaScript <span>70%</span></h3>
                    <div class="the-progress">
                        <span style="width:70%"></span>
                    </div>
                </div>
                <div class="skill">
                    <h3>Python <span>80%</span></h3>
                    <div class="the-progress">
                        <span style="width:80%"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="spikes"></div>
    
@endsection
