@extends('layouts.app')
@section('content')
<div class="main">
    @foreach ($apartments as $apartment)
    <section>
        <h2>
            <a class="apartment-link" href="/apartment/{{$apartment->id}}">
                Dzīvokļa adrese: {{$apartment->street}}, {{$apartment->city}}
            </a>
        </h2>
        <p class="flat-description">
            <img src="{{ URL::to('/images/no-image-icon.png') }}" alt="flat-img">
            Apraksts: {{$apartment->description}}
        </p>
    </section>
    @endforeach
</div>
@endsection