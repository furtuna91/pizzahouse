@extends('layouts.layout')

@section('content')
    <div class="flex-center full-height">
        <div class="container">
            <h1 class="center-align">Pizza List</h1>
            <div class="divider"></div>
            <ul class="collection with-header">
                <li class="collection-header"><h4>Pizzas</h4></li>
                @foreach ($pizzas as $pizza)
                    <li class="collection-item"><div>{{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}<a href="{{ route('pizza.show', $pizza->id ) }}" class="secondary-content"><i class="material-icons">send</i></a></div></li>
                @endforeach
              </ul>
        </div>
    </div>
@endsection
