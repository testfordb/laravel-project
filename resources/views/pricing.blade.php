
@extends('layouts.app')

@section('content')
    
    <div class="pricing" id="pricing">
        <div class="dots dots-up"></div>
        <div class="dots dots-down"></div>
        <h2 class="main-title">Pricing Plans</h2>
        <div class="container">
            <div class="box">
                <div class="title">Basic</div>
                <img src="{{ asset('Imgs/hosting-basic.png') }}" alt="">
                <div class="price">
                    <span class="amount">$15</span>
                    <span class="time">Per Month</span>
                </div>
                <ul>
                    <li>10GB HDD Space</li>
                    <li>5 Emails</li>
                    <li>2 Subdomains</li>
                    <li>4 Databases</li>
                    <li>Basic Support</li>
                </ul>
                <a href="">Choose Plan</a>
            </div>
            <div class="box popular">
                <div class="label">Most Popular</div>
                <div class="title">Advanced</div>
                <img src="{{ asset('Imgs/hosting-advanced.png') }}" alt="">
                <div class="price">
                    <span class="amount">$25</span>
                    <span class="time">Per Month</span>
                </div>
                <ul>
                    <li>20GB HDD Space</li>
                    <li>10 Emails</li>
                    <li>5 Subdomains</li>
                    <li>8 Databases</li>
                    <li>Advanced Support</li>
                </ul>
                <a href="">Choose Plan</a>
            </div>
            <div class="box">
                <div class="title">Professional</div>
                <img src="{{ asset('Imgs/hosting-professional.png') }}" alt="">
                <div class="price">
                    <span class="amount">$45</span>
                    <span class="time">Per Month</span>
                </div>
                <ul>
                    <li>50GB HDD Space</li>
                    <li>20 Emails</li>
                    <li>10 Subdomains</li>
                    <li>20 Databases</li>
                    <li>Professional Support</li>
                </ul>
                <a href="">Choose Plan</a>
            </div>
        </div>
    </div>
    
@endsection
