@extends('layouts.main')

@section('title', 'Add Country')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('countries.index') }}" class="float-right">All Countries</a>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('countries.store') }}">
                        @csrf

                        @include('countries.form')

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add Country') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection