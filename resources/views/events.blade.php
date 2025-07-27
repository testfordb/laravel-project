
@extends('layouts.app')

@section('content')
    
    <div class="events" id="events">
        <h2 class="main-title">Latest Events</h2>
        <div class="container">
            <img src="{{ asset('Imgs/events.png') }}" alt="">
            <div class="info">
                <div class="time">
                    <div class="unit">
                        <span>15</span>
                        <span>Days</span>
                    </div>
                    <div class="unit">
                        <span>08</span>
                        <span>Hours</span>
                    </div>
                    <div class="unit">
                        <span>45</span>
                        <span>Minutes</span>
                    </div>
                    <div class="unit">
                        <span>55</span>
                        <span>Seconds</span>
                    </div>
                </div>
                <h2 class="title">Tech Masters Event 2021</h2>
                <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et vero tenetur doloremque iusto ut adipisci quam ratione aliquam excepturi nulla in harum, veritatis porro</p>
            </div>
            <div class="subscribe">
                <form action="">
                    <input type="email" name="email" placeholder="Enter Your Email">
                    <input type="submit" value="Subscribe">
                </form>
            </div>
        </div>
    </div>
    <div class="spikes"></div>
    
@endsection
