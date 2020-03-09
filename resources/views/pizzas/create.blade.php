@extends('layouts.layout')

@section('content')
    <div class="flex-center full-height">
        <div class="container">
            <h1 class="center-align">Create Pizza</h1>
            <div class="divider"></div>

            <div class="row">
                <form class="col s12" action="{{ route('pizza.store') }}" method="POST">
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="name" name="name" type="text" class="validate">
                            <label for="name">Name</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="type" id="type">
                              <option value="" disabled selected>Choose your option</option>
                              <option value="hawaiian">Hawaiian</option>
                              <option value="marrgherita">Margherita</option>
                              <option value="veg supreme">Veg Supreme</option>
                              <option value="volcano">Volcano</option>
                            </select>
                            <label>Pizza Type</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="base" id="base">
                              <option value="" disabled selected>Choose your option</option>
                              <option value="cheesy crust">Cheesy Crust</option>
                              <option value="garlic crust">Garlic Crust</option>
                              <option value="thin & crispy">Thin & Chrispy</option>
                              <option value="thick">Thick</option>
                            </select>
                            <label>Base Type</label>
                        </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Order pizza
                        <i class="material-icons right">send</i>
                      </button>
                </form>
            </div>

        </div>
    </div>
@endsection
