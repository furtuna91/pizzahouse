@extends('layouts.layout')

@section('content')
<div class="flex-center full-height">
    <div class="container">
        <nav>
            <div class="nav-wrapper">
              <div class="col s12">
                <a href="{{ route('pizza.index') }}" class="breadcrumb">Pizzas</a>
                <a href="#!" class="breadcrumb">Pizza</a>
              </div>
            </div>
          </nav>
            <h1 class="center-align">Pizza List</h1>
            <div class="divider"></div>
            <div class="row">
                <div class="col s12 m6 offset-m3">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                          <img class="activator responsive-img" src="{{ asset('img/pizza.jpg') }}">
                        </div>
                        <div class="card-content">
                          <span class="card-title activator grey-text text-darken-4">{{ $pizza->name }}<i class="material-icons right">more_vert</i></span>
                          {{-- <p><a href="#">This is a link</a></p> --}}
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $pizza->name }}<i class="material-icons right">close</i></span>
                            <ul class="collection">
                                <li class="collection-item">Type - {{ $pizza->type }} <span class="secondary-content"><i class="material-icons">local_pizza</i></span></li>
                                <li class="collection-item">Base - {{ $pizza->base }} <span class="secondary-content"><i class="material-icons">panorama_fish_eye</i></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
