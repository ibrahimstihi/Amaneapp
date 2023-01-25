
@extends('psy.dashboard.home')
@section('dashboard_content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">partien #ID</th>
        <th scope="col">partien name</th>
        <th scope="col">date</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($sessions as $session)
    <tr>
        <?php
            $partien = \App\Models\User::find($session->partien_id);
        ?>

        <th scope="row">{{  $session->partien_id  }}</th>
        <td>{{ $partien->name }}</td>
        @if ($session->date )
        <td>not defini</td>   
        @else
        <td>{{ $session->date }}</td>
        @endif
        {{-- <td><a href="{{ route('psy.show', $user->id)}}">Show ansswer</a></td> --}}
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection