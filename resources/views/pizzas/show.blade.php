@extends('layouts.layout')

@section('content')
    <div class="flex-center full-height">
        <div class="container">
            <h1 class="center-align">Pizza List</h1>
            <div class="divider"></div>
            <div class="row">
                <div class="col-12 col-md-6 mx-auto">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator responsive-img" src="{{ asset('img/pizza.jpg') }}">
                        </div>
                        <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{ $pizza->name }}<i class="material-icons right">more_vert</i></span>
                            {{-- <p><a href="#">This is a link</a></p> --}}
                            <form action="{{ route('pizza.destroy', $pizza->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn waves-effect waves-light" type="submit" name="action">Complete order
                                    <i class="material-icons right">delete</i>
                                </button>
                            </form>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">{{ $pizza->name }}<i class="material-icons right">close</i></span>
                            <ul class="collection">
                                <li class="collection-item">Type - {{ $pizza->type }} <span class="secondary-content"><i class="material-icons">local_pizza</i></span></li>
                                <li class="collection-item">Base - {{ $pizza->base }} <span class="secondary-content"><i class="material-icons">panorama_fish_eye</i></span></li>
                            </ul>
                            <h6>Toppings:<h6>
                            <ul class="collection">
                                @foreach ($pizza->toppings as $topping)
                                    <li class="collection-item">{{ $topping }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
