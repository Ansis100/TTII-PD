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
    <hr>
    @foreach ($reviews as $review)
    <h4><a href="/user/{{ $review->userID }}">{{ $review->first_name }}</a></h4>
    <p>Reitings: {{ $review->rating }} punkti</p>
    <p class="review-text">{{ $review->review }}</p>
    @if ($review->userID == Auth::user()->id)
    <p><a href="/apartment/{{ $review->dzivoklis_id }}/update/{{ $review->id }}">Labot</a> | <a href="/apartment/{{ $review->dzivoklis_id }}/delete/{{ $review->id }}">Dzēst</a></p>
    @endif
    <hr>
    @endforeach
</div>
<br>
@if ($isIretajs)
<div>
    <form method="POST" action="/apartment/{{ $apartment->id }}">
        {{ csrf_field() }}
        <div>
            <textarea name="review" placeholder="Kāda ir Jūsu atsauksme?"></textarea>
            <select name="rating">
                <option value="1">1 Punkts</option>
                <option value="2">2 Punkti</option>
                <option value="3">3 Punkti</option>
                <option value="4">4 Punkti</option>
                <option value="5">5 Punkti</option>
            </select>
        </div>
        <div>
            <button type="submit">Pievienot atsauksmi</button>
        </div>
    </form>
</div>
<br>

@endif
@endsection