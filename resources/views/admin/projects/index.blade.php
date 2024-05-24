@extends('layouts.admin')


@section('content')
    {{-- Projects --}}
    <div class="admin-projects-index d-flex ">
        {{-- side-bar with links --}}
        @include('partials.side-bar')

        {{-- right-side , main content --}}
        <div class="main text-white py-3 ">
            @include('partials.action-message')

            {{-- heading --}}
            <div class=" mb-3 d-flex justify-content-between">
                <h3>My Projects</h3>
                <a class="btn btn-primary" href="{{ route('admin.projects.create') }}">Create</a>
            </div>

            {{-- table --}}
            <div class="table-responsive">
                <table class="table table-hover table-secondary">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Title</th>
                            <th scope="col">Image</th>
                            <th scope="col">Description</th>
                            <th scope="col">Type</th>
                            <th scope="col">Technologies</th>
                            <th scope="col">Date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr class="">
                                <td scope="row">{{ $project->id }}</td>
                                <td>{{ $project->title }}</td>
                                <td>
                                    @if (str_starts_with($project->image, 'uploads/'))
                                        <img height="80" width="150" src="{{ asset('storage/' . $project->image) }}"
                                            alt="">
                                    @else
                                        <img height="80" width="150" src="{{ $project->image }}" alt="">
                                    @endif
                                </td>
                                <td style="max-width: 200px" class="truncate">{{ $project->description }}</td>
                                <td>{{ $project->type ? $project->type->name : 'There are no types linked to this project' }}
                                </td>
                                <td style="max-width: 100px">{{ $project->technologies }}</td>
                                <td>{{ $project->date }}</td>

                                {{-- action buttons --}}
                                <td>
                                    <a class="btn btn-dark" href="{{ route('admin.projects.show', $project) }}"><i
                                            class="fa-solid fa-eye "></i></a>
                                    <a class="btn btn-dark" href="{{ route('admin.projects.edit', $project) }}"><i
                                            class="fa-solid fa-pencil "></i></a>
                                    @include('partials.delete-modal')
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
    </div>
@endsection
