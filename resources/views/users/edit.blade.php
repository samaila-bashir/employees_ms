@extends('layouts.main')

@section('title', 'Edit User')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('users.index') }}" class="float-right">All Users</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('users.update', $user->id) }}">
                        @csrf
                        @method('PUT')

                        @include('users.form')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update User') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            @if (Auth::user()->id !== $user->id)
                <div class="m-2 p-2">
                    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                        @csrf
                        @method('DELETE')
        
                        <button class="btn btn-danger" type="submit">Delete {{ $user->username }}</button>
                    </form>
                </div>
            @endif

        </div>
    </div>
@endsection