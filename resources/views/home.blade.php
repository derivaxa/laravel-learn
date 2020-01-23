@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-hover">
                    <thead>
                        <th>Name</th>
                        <th>E-mail</th>
                        <th>Role</th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}} </td>
                            <td>{{$user->email}} </td>
                            <td>{{$user->roles->first()->name}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
