@extends('layouts.app')
@section('content')
<div class="main">
    @foreach ($apartments as $apartment)
    <section>
        <h2>
            <a href="/apartment/{{$apartment->id}}">
                <b>
                    Dzīvokļa adrese: {{$apartment->street}}, {{$apartment->city}}
                </b>
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