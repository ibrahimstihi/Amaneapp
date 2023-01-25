@extends('admin.dashboard.home')
@section('dashboard_content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">Datasheet</th>
        <th scope="col">Matche</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($partiens as $partien)
    <tr>
        <th scope="row">{{ $partien->id }}</th>
        <td>{{ $partien->name }}</td>
        <td>{{ $partien->email }}</td>
        <td><a href="{{ route('partien.show', $partien->id)}}">Click</a></td>
        @if ($partien->is_matched){
            <td>is matched</td>  
        }@else{
            <td><a href="{{ route('chose.psy',$partien->id) }}">chose a psy : {{ $partien->id }}</a></td>
        }
            
        @endif
        
    </tr>
    @endforeach
    </tbody>
  </table>
@endsection