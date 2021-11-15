@extends('layouts.main')

@section('title', 'Users')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">

                <div>
                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif
                </div>

                <div class="card-header">
                    <a href="{{ route('users.create') }}" class="float-right">Create User</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Full Name</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Manage</th>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection