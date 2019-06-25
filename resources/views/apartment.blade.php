@extends('layouts.app')
@section('content')
<p>Pilsēta: {{$apartment->city}}</p>
<p>Stāvs: {{$apartment->floor}}. stāvs</p>
<p>Istabu skaits: {{ $apartment->rooms }}</p>
<p>Dzīvokļa numurs: {{$apartment->apartment_no}}</p>
<p>Apraksts: {{$apartment->description}}</p>
<p>Izīrētājs: <a href="/user/{{ $apartment->userID }}">{{ $apartment->first_name }}</a></p>
<p>Papildus informācija:</p>
<ul>
    <li>Tālrunis: {{ $apartment->phone }}</li>
    <li>E-pasts: {{ $apartment->email }}</li>
</ul>
@endsection