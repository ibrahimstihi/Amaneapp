@inject('User', 'App\Models\User')
@extends('admin.dashboard.home')
@section('dashboard_content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">psy</th>
        <th scope="col">partien</th>
        <th scope="col">date</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($sessions as $session)
    <tr>
        <?php
            $psy = \App\Models\User::find($session->psy_id);
            $partien = \App\Models\User::find($session->partien_id);
        ?>

        <th scope="row">{{ $session->psy_id }} : {{ $psy->name }}</th>
        <td>{{ $session->partien_id }} : {{ $partien->name }}</td>
        <td>{{ $session->date }}</td>
        {{-- <td><a href="{{ route('psy.show', $user->id)}}">Show ansswer</a></td> --}}
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection