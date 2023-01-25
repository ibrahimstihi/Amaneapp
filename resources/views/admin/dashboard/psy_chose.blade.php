@extends('admin.dashboard.home')
@section('dashboard_content')
  @if ($partien->is_matched)
      <h4>this partien is matched</h4>
  @else
  <h1>Chose for {{ $partien->name }}</h1>
  @foreach ($psys as $psy)
      <ul>
          <li>{{ $psy->id }}</li>
          <li>{{ $psy->name }}</li>
          <li>{{ $psy->email }}</li>
          <li>
              <form class="text-center pb-2" method="post" action="{{ route('post.matching',[$partien->id,$psy->id]) }}">
                  @csrf
                  <button type="submit" class="btn btn-success py-0">
                      <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                      Match
                  </button>
              </form>
          </li>
      </ul>
  @endforeach
  @endif
@endsection