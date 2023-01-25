@extends('layout')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('psychologe.matching.step.fore.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">Step 3: Review Details</div>
                    <div class="card-body">
                            <table class="table">
                                <tr>
                                    <td>Name:</td>
                                    <td><strong>{{$user->name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>email</td>
                                    <td><strong>{{$user->email}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Phone</td>
                                    <td><strong>{{$user->phone}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Q1:</td>
                                    <td><strong>{{$user->q1p}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Q2:</td>
                                    <td><strong>{{$user->q2p}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Q3:</td>
                                    <td><strong>{{$user->q3p}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Q3:</td>
                                    <td><strong>{{$user->q3p}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Q3:</td>
                                    <td><strong>{{$user->q3p}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Q3:</td>
                                    <td><strong>{{$user->q3p}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-6 text-left">
                                <a href="{{ route('psychologe.matching.step.three') }}" class="btn btn-danger pull-right">Previous</a>
                            </div>
                            <div class="col-md-6 text-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection