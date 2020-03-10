@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="container">
            <div class="row valign-wrapper center-align">
                <div class="col s4 offset-s4">
                    <img src="{{ asset('/img/pizzahouse.jpg') }}" class="responsive-img" alt="pizza house logo">
                </div>
            </div>
            <h1 class="center-align">Pizza House</h1>
            <div class="divider"></div>
            @if ( null !== session('msg') )
                <div class="card-panel green">{{ session('msg') }}</div>
            @endif
        </div>
    </div>
@endsection
