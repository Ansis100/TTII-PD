@extends('layouts.app')
@section('content')
<form>
  <fieldset>
    @if ($user->type == 'iretajs')
    <h1>Īrnieka {{ $data->first_name }} profila lapa</h1>
    <h3>Informācija: </h3>
    <p>{{ $data->first_name }}</p>
    <p>{{ $data->email }}</p>
    <p>{{ $data->phone }}</p>
    @else
    @if ($isCurrentUser)
    <a href="/apartment/new">Pievienot jaunu dzīvokli</a>
    @endif
    <h1>{{ $isCurrentUser ? 'Mans' : 'Izīrētāja ' . $data->first_name }} profils</h1>
    <h3>{{ $isCurrentUser ? 'Mani dati:' : 'Izīrētāja dati' }} </h3>
    <p>{{ $data->first_name }}</p>
    <p>{{ $data->email }}</p>
    <p>{{ $data->phone }}</p>
    <hr>
    <h3>Atsauksmes:</h3>
    @foreach ($reviews as $review)
    <p>Atsauksme par dzīvokli <a href="/apartment/{{ $review->apartmentID }}">{{ $review->street }}</a></p>
    <p>Atsauksme: {{ $review->review }}</p>
    <p>Atsauksmi rakstīja: <a href="/user/{{ $review->userID }}">{{ $review->first_name }}</a></p>
    <hr>
    @endforeach
    @endif
  </fieldset>
</form>
@endsection
