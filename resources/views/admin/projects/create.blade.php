@extends('layouts.admin')

@section('content')
    <div class="container text-white py-3">
        @include('partials.validate-errors')
        <h1>Add a new Project</h1>
        <form action="{{ route('admin.projects.store') }}" method="post" enctype="multipart/form-data">
            @csrf {{-- this is a laravel directive to protect your application from cross-site request forgery --}}

            {{-- title input --}}
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                    placeholder="add the title" value="{{ old('title') }}" />
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Image input --}}
            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" id="image"
                    class="form-control  @error('image') is-invalid @enderror" placeholder="add an image"
                    value="{{ old('image') }}" />
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- technologies input --}}
            <div class="mb-3">
                <label for="technologies" class="form-label ">technologies</label>
                <input type="text" name="technologies" id="technologies"
                    class="form-control @error('technologies') is-invalid @enderror" placeholder="add the used technologies"
                    value="{{ old('technologies') }}" />
                @error('technologies')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- date input --}}
            <div class="mb-3">
                <label for="date" class="form-label ">Sale Date</label>
                <input type="date" name="date" id="date" class="form-control @error('date') is-invalid @enderror"
                    placeholder="add the date" value="{{ old('date') }}" />
                @error('date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            {{-- Description input --}}
            <div class="mb-3">
                <label for="description" class="form-label ">Description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
                    rows="5" placeholder="add the description">{{ old('description') }}</textarea>
                @error('description')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">
                Submit
            </button>

        </form>
    </div>
@endsection
