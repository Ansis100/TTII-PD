@extends('layouts.app')
@section('content')
@if ($user->type == 'iretajs')
<section>
    <h1>Īrnieka {{ $data->first_name }} profila lapa</h1>
    <h3>Informācija: </h3>
    <p>{{ $data->first_name }}</p>
    <p>{{ $data->email }}</p>
    <p>{{ $data->phone }}</p>
</section>
@else
@if ($isCurrentUser)
<a href="/apartment/new">Pievienot jaunu dzīvokli</a>
@endif
<section>
    <h1>{{ $isCurrentUser ? 'Mans' : 'Izīrētāja ' . $data->first_name }} profils</h1>
    <h3>{{ $isCurrentUser ? 'Mani dati:' : 'Izīrētāja dati' }} </h3>
    <p>{{ $data->first_name }}</p>
    <p>{{ $data->email }}</p>
    <p>{{ $data->phone }}</p>
</section>
<section class="review-section">
    <h3>Atsauksmes:</h3>
    @foreach ($reviews as $review)
    <h5>Atsauksme par dzīvokli <a href="/apartment/{{ $review->apartmentID }}">{{ $review->street }}</a></h5>
    <p class="review-text">{{ $review->review }}</p>
    <p>Atsauksmi rakstīja: <a href="/user/{{ $review->userID }}">{{ $review->first_name }}</a></p>
    <hr>
    @endforeach
</section>
@endif
@endsection