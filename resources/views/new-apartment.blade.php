@extends('layouts.app')
@section('content')
@if ( $user->type == 'iretajs')
<h1>Jums nav tiesību pievienot jaunu dzīvokli!</h1>
@else
<form class="form-horizontal" method="POST" action="/apartment/new">
    {{ csrf_field() }}
    <fieldset>

        <legend>
            <div class="panel-heading">Jauns dzīvoklis</div>
        </legend>

        <div class="form-group row">
            <label for="street" class="control-label">Street</label>
            <input id="street" type="text" class="form-control" name="street" value="{{ old('street') }}" required autofocus>
        </div>

        <div class="form-group row">
            <label for="city" class="control-label">Pilsēta</label>
            <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required autofocus>
        </div>

        <div class="form-group row">
            <label for="rooms" class="control-label">Istabas</label>
            <input id="rooms" type="number" min="1" class="form-control" name="rooms" value="{{ old('rooms') }}" required autofocus>
        </div>

        <div class="form-group row">
            <label for="floor" class="control-label">Stāvs</label>
            <input id="floor" type="number" class="form-control" name="floor" value="{{ old('floor') }}" required autofocus>
        </div>

        <div class="form-group row">
            <label for="apartment_no" class="control-label">Dzīvokļa numurs</label>
            <input id="apartment_no" type="number" min="0" class="form-control" name="apartment_no" value="{{ old('apartment_no') }}" required autofocus>
        </div>

        <div class="form-group row">
            <label for="description" class="control-label">Apraksts</label>
            <textarea id="description" type="textarea" class="form-control" name="description" value="{{ old('description') }}" required autofocus></textarea>
        </div>

        <button type="submit" class="btn btn-primary">
            Register
        </button>

    </fieldset>
</form>
@endif
@endsection