@extends('layouts.app')
@section('content')
@if ($user->type == 'iretajs')
<h1>Īrnieka {{ $data->first_name }} profila lapa</h1>
<h3>Tavi dati: </h3>
<p>{{ $data->first_name }}</p>
<p>{{ $data->email }}</p>
<p>{{ $data->phone }}</p>
@else
<h1>Izīrētāja {{ $data->first_name }} profila lapa</h1>
<h3>Tavi dati: </h3>
<p>{{ $data->first_name }}</p>
<p>{{ $data->email }}</p>
<p>{{ $data->phone }}</p>
@endif
@endsection