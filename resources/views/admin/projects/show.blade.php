<div class="container show">
        <div class="d-flex p-3">
            <div class="img-show p-3">
                <img src="" alt="{{ $project->title }}">
            </div>
            <div class="info p-3">
                <h1>{{ $project->title }}</h1>
                <p>Description: {{ $project->description }}</p>
                <p>created: {{ $project->created }}</p>
                <p>categories: {{ $project->categories }}</p>
                <div class="link d-flex align-items-center justify-content-start">
                    <a href="{{ route('projects.edit', ['project' => $project->id]) }}" class="update-link p-4">
                        <i class="fa-solid fa-gear"></i>
                    </a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="fa-solid fa-trash"></i>
                        </button>
                </div>
            </div>
        </div>
    </div>
@include('partials.modal-delete')
{{-- @include('admin.project.show') --}}
