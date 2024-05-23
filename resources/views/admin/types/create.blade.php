@extends('layouts.admin')

@section('content')
    <div class="container text-white py-3">
        <h1>Add a new type</h1>
        @include('partials.validate-errors')
        <form action="{{ route('admin.types.store') }}" method="post">
            @csrf {{-- this is a laravel directive to protect your application from cross-site request forgery --}}

            {{-- name input --}}
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                    placeholder="add the name" value="{{ old('name') }}" />
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">
                Submit
            </button>
        </form>

    </div>
@endsection
