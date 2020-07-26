@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>


                <div class="card-body">
                    <h1>{{ Auth::user()->username }}</h1>
                    <p>{{ Auth::user() -> profile -> title }}</p>
                    <p><?=Auth::user() -> profile -> description ?></p>
                    <a href="#"><p><?=Auth::user() -> profile -> url ?></p></a>
                    <p><?=Auth::user() -> name ?></p>
                    <p><?=Auth::user() -> email ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
