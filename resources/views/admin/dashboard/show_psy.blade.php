@extends('admin.dashboard.home')
@section('dashboard_content')
<ul>
    <h1>hello world</h1>
    <li>{{ $user->q1p }}</li>
    <li>{{ $user->q2p }}</li>
    <li>{{ $user->q3p }}</li>
</ul>
@endsection