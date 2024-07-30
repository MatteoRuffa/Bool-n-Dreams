@extends('layouts.admin')

@section('content')
<div class="container">
    <h2 class="fs-4 my-4">
        {{ __('Welcome to the dashboard') }}
    </h2>
    <div id="dashboard" class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">{{ __('User Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                {{ __('Once you are logged in, you can browse the site through the sidebar, which can be opened by clicking on
                     the icon at the top right. For the time being, there are only a few features, in which you can see editing 
                     and creating new projects. Happy browsing')}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
