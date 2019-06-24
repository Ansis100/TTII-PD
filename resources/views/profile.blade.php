@extends('layouts.app')
@section('content')
<p>{{ $user->name }}</p>
<p>{{ $user->type }}</p>
@endsection