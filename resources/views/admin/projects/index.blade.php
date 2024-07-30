@section('title', 'Admin Dashboard / Projects')
@extends('layouts.admin')

@section('content')
    <section class="my-5">
        <h1 class=" m-3">All Projects</h1>
        <a role="button" class="btn btn-add mb-3" href="{{ route('admin.projects.create') }}">Add a Project</a>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @include('partials.table', ['elements' => $projects])
        {{$projects->links('vendor.pagination.bootstrap-5')}}
    </section>
    
@endsection