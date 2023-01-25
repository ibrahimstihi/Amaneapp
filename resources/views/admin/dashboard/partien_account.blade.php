@extends('admin.dashboard.home')
@section('dashboard_content')
<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#id</th>
        <th scope="col">name</th>
        <th scope="col">email</th>
        <th scope="col">Ansswer</th>
        <th scope="col">Valide</th>

      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
    <tr>
        <th scope="row">{{ $user->id }}</th>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
        <td><a href="{{ route('psy.show', $user->id)}}">Show ansswer</a></td>
        <td>
            <form class="text-center pb-2" method="post" action="{{ route('account.destroy', $user->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger py-0">
                    <i class="fa fa-trash" aria-hidden="true"></i>
                    Delete
                </button>
            </form>
            <form class="text-center pb-2" method="post" action="{{ route('account.valide', $user->id) }}">
                @csrf
                {{ method_field('put') }}
                <button type="submit" class="btn btn-success py-0">
                    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                    Valide
                </button>
            </form>  
        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
@endsection