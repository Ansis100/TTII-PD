@extends('layouts.app')
@section('content')
@if ($user->type == 'iretajs')
<h1>Īrnieka {{ $data->first_name }} profila lapa</h1>
<h3>Informācija: </h3>
<p>{{ $data->first_name }}</p>
<p>{{ $data->email }}</p>
<p>{{ $data->phone }}</p>
@else
<h1>Izīrētāja {{ $data->first_name }} profila lapa</h1>
<h3>Tavi dati: </h3>
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
@endsection