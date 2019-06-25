@extends('layouts.app')
@section('content')
<div id="Table">
    <table class="MainPageTable">
        <tr>
            <td>
                <div class="content">
                    <h1>Dzīvokļi:</h1>
                    @foreach ($apartments as $apartment)
                    <h3><a href="/apartment/{{ $apartment->id }}">{{ $apartment->street }}</a></h3>
                    <p>Pilsēta: {{$apartment->city}}</p>
                    <p>Stāvs: {{$apartment->floor}}. stāvs</p>
                    <p>Dzīvokļa numurs: {{$apartment->apartment_no}}</p>
                    <p>Apraksts: {{$apartment->description}}</p>
                    <hr>
                    @endforeach
                </div>
            </td>
        </tr>
    </table>
</div>
@endsection