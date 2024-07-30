@section('title', 'Admin Dashboard / Projects')
@extends('layouts.admin')


@section('content')
    <section class="container py-5">


        <div class="container rounded-2 hype-shadow-white p-5 background-gradient-color">
            <h1 class="hype-text-shadow  fw-bolder text-center ">Add a Project</h1>

            <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data" novalidate>
                @csrf

                <div class="mb-3 @error('title') @enderror">
                    <label for="title" class="form-label ">Project Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror"
                        id="title" name="title" value="{{ old('title') }}" required maxlength="255" >
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 @error('description') @enderror">
                    <label for="description" class="form-label ">Description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                        name="description" style="min-height: 300px">{{ old('description') }}</textarea>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 @error('created') @enderror">
                    <label for="created" class="form-label ">Date of Creation</label>
                    <input type="date" class="form-control @error('created') is-invalid @enderror"
                        id="created" name="created" value="{{ old('created') }}" required>
                    @error('created')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 @error('categories') @enderror">
                    <label for="categories" class="form-label ">Project Categories</label>
                    <input type="text" class="form-control @error('categories') is-invalid @enderror"
                        id="categories" name="categories" value="{{ old('categories') }}" required maxlength="255"
                        minlength="3">
                    @error('categories')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3 @error('image_url') @enderror d-flex gap-5 align-items-center">
                    <div class="w-25 text-center">
                        <img id="uploadPreview" class="w-100" width="100"
                            src="{{asset('image/placeholder.png')}}">
                    </div>
                    <div class="w-75">
                        <label for="image" class="form-label ">Image</label>
                        <input type="file" accept="image/*"
                            class="form-control @error('image_url') is-invalid @enderror" id="uploadImage"
                            name="image_url" value="{{ old('image_url') }}" required maxlength="255">
                        @error('image_url')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <br>
                <div class="text-center w-25 mx-auto d-flex gap-2">
                    <button type="submit" class="btn ">Add the Project</button>
                    <a href="{{ route('admin.projects.index') }}"
                        class="btn ">Back</a>
                </div>
            </form>
        </div>

    </section>
@endsection