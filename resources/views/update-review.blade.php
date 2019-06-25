@extends('layouts.app')
@section('content')
@if (!$isPrivileged)
<h1>Jums nav tiesību labot šo atsauksmi!</h1>
@else
<section>
    <h1>Labot atsauksmi</h1>
    <p>Jūsu atsauksme:</p>
    <p>{{ $review->review }}</p>
    <p>Jūsu vērtējums: {{ $review->rating }}</p>
</section>
<section>
    <form method="POST" action="/apartment/{{ $apartmentID }}/update/{{ $review->id }}">
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
</section>
@endif
@endsection