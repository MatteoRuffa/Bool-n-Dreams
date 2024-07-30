@section('title', 'Admin Dashboard / Projects')
@extends('layouts.admin')

@section('content')

<form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST" class="py-5" novalidate>
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
            value="{{ $project->title }}" required>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description"
            name="description">{{ $project->description }}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- <div class="form-group">
        <label for="image_url">Image URL</label>
        <input type="text" class="form-control @error('image_url') is-invalid @enderror" id="image_url" name="image_url"
            value="{{ $project->image_url }}">
        @error('image_url')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div> -->
    <div class="mb-3 @error('image_url') @enderror d-flex gap-5 align-items-center">
        <div class="w-25 text-center">
            <img id="uploadPreview" class="w-100" width="100" src="{{asset('image/placeholder.png')}}">
        </div>
        <div class="w-75">
            <label for="uploadImage" class="form-label ">Image</label>
            <input type="file" accept="image/*" class="form-control @error('image_url') is-invalid @enderror"
                id="uploadImage" name="image_url" value="{{ old('image_url') }}" required >
            @error('image_url')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="form-group">
        <label for="created">Created</label>
        <input type="text" class="form-control @error('created') is-invalid @enderror" id="created" name="created"
            value="{{ $project->created }}" required>
        @error('created')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label for="categories">Categories</label>
        <input type="text" class="form-control @error('categories') is-invalid @enderror" id="categories"
            name="categories" value="{{ $project->categories }}">
        @error('categories')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-flex justify-content-start">
        <div class="p-3">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>

        <div class="p-3">
            <a href="{{ route('admin.projects.index', ['project' => $project->id]) }}"
                class="btn btn-secondary p-2">Return to the
                project</a>
        </div>
    </div>
</form>
@endsection