@extends('layouts.main')

@section('title', 'Countries')

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
                    <div class="row">
                        <div class="col">
                            <form action="{{ route('countries.index') }}" method="GET">
                                <div class="form-row align-items-center">
                                    <div class="col">
                                        <input type="search" name="search" class="form-control mb-2">
                                    </div>
                                    <div class="col">
                                        <button class="btn btn-primary mb-2">Search</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div>
                            <a href="{{ route('countries.create') }}" class="float-right">Add Country</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <th>Country Code</th>
                            <th>Name</th>
                            <th>Manage</th>
                        </thead>
                        <tbody>
                            @foreach ($countries as $country)
                            <tr>
                                <td>{{ $country->country_code }}</td>
                                <td>{{ $country->name }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('countries.edit', $country->id) }}" class="btn btn-primary">Edit</a> &nbsp;&nbsp;

                                        <form method="POST" action="{{ route('countries.destroy', $country->id) }}">
                                            @csrf
                                            @method('DELETE')
                            
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </div>
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