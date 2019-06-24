@extends('layouts.app')
@section('content')
<div class="details">
    <aside>
        <img src="{{ URL::to('/images/no-image-icon.png') }}" alt="flat-img" height="50%"> 
    </aside>
    <table id="info-table">
        <tbody>
            <tr>
                <td>Iela</td>
                <td>{{$flat->street}}</td>
            </tr>
            <tr>
                <td>Pilsēta</td>
                <td>{{$flat->city}}</td>
            </tr>
            <tr>
                <td>Dzīvokļa numurs</td>
                <td>{{$flat->apartment_no}}</td>
            </tr>
            <tr>
                <td>Stāvs</td>
                <td>{{$flat->floor}}</td>
            </tr>
            <tr>
                <td>Istabu skaits</td>
                <td>{{$flat->rooms}}</td>
            </tr>
        </tbody>
    </table>
    <p>
        <h3>Apraksts:</h3>
        {{$flat->description}}
    </p>
</div>
<div class="review details">
    <h3>Atsauksmes:</h3>
    <span>Test span</span>
</div>
@endsection