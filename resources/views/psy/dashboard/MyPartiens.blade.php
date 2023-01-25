@extends('psy.dashboard.home')
@section('dashboard_content')

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">Fiche</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($sessions as $session)
       <?php
           $partien = \App\Models\User::find($session->partien_id);
       ?>
    <tr>
        <th scope="row">{{ $partien->id }}</th>
        <td>{{ $partien->name }}</td>
        <td>{{ $partien->email }}</td>
        <td><a href="#">Show ansswer</a></td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection