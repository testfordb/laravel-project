
@extends('layouts.app')

@section('content')
    
    <div class="discount" id="discount">
        <div class="image">
            <div class="content">
                <h2>We Have A Discount</h2>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Excepturi asperiores consectetur, recusandae ratione provident necessitatibus, unde temporibus.</p>
                <img src="{{ asset('Imgs/discount.png') }}" alt="">
            </div>
        </div>
        <div class="form">
            <div class="content">
                <h2>Request A Discount</h2>
                <form action="">
                    <input class="input" type="text" name="name" placeholder="Your Name">
                    <input class="input" type="email" name="email" placeholder="Your Email">
                    <input class="input" type="text" name="mobile" placeholder="Your Phone">
                    <textarea name="message" class="input" placeholder="Tell Us About Your Needs"></textarea>
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </div>
    
@endsection
