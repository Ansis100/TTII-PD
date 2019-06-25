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
                <td>{{$apartment->street}}</td>
            </tr>
            <tr>
                <td>Pilsēta</td>
                <td>{{$apartment->city}}</td>
            </tr>
            <tr>
                <td>Dzīvokļa numurs</td>
                <td>{{$apartment->apartment_no}}</td>
            </tr>
            <tr>
                <td>Stāvs</td>
                <td>{{$apartment->floor}}</td>
            </tr>
            <tr>
                <td>Istabu skaits</td>
                <td>{{$apartment->rooms}}</td>
            </tr>
            <tr>
                <td>Izīrētājs</td>
                <td><a href="/user/{{ $apartment->userID }}">{{ $apartment->first_name }}</a></td>
            </tr>
            <tr>
                <td>Tālrunis</td>
                <td>{{ $apartment->phone }}</td>
            </tr>
            <tr>
                <td>E-pasts</td>
                <td>{{ $apartment->email }}</td>
            </tr>
        </tbody>
    </table>
    <p>
        <h3>Apraksts:</h3>
        {{$apartment->description}}
    </p>
</div>
<div class="review details">
    <h3>Atsauksmes:</h3>
    @foreach ($reviews as $review)
    <h4><a href="/user/{{ $review->userID }}">{{ $review->first_name }}</a></h4>
    <p>{{ $review->review }}</p>
    @endforeach
</div>
<br>
<div>
    <form method="POST" action="">
        <div>
            <textarea name="body" placeholder="Kāda ir Jūsu atsauksme?"></textarea>
        </div>
        <div>
            <button type="submit">Pievienot atsauksmi</button>
        </div>
    </form>
</div>
<br>

@endsection