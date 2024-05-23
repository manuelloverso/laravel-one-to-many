@extends('layouts.admin')

@section('content')
    <div class="container py-3 text-white">
        <div class=" mb-3 d-flex justify-content-between">
            <h3>Available Types</h3>
            <a class="btn btn-primary" href="{{ route('admin.types.create') }}">Add Type</a>

        </div>
        <div class="table-responsive">
            <table class="table table-hover table-secondary">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($types as $type)
                        <tr class="">
                            <td scope="row">{{ $type->id }}</td>
                            <td>{{ $type->name }}</td>


                            <td>
                                {{-- NOT SHOWING THE SINGLE TYPE AS THERE IS NOTHING TO SHOW --}}
                                <a class="btn btn-dark" href="{{ route('admin.types.edit', $type) }}"><i
                                        class="fa-solid fa-pencil "></i></a>
                                {{-- @include('partials.delete-modal') --}}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7">Nothing to show here</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
