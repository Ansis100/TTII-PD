@extends('layouts.app')
@section('content')

<table id="profile">
  <tr>
    <td>
      <p>{{ $user->name }}</p>
      <p>{{ $user->type }}</p>
    </td>
  </tr>
</table>

@endsection
