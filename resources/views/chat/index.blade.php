@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($users as $key => $user)
                        <li class="list-group-item">
                            <strong><a href="{{ route('message', $user->id) }}">{{++$key}}.
                                    {{ $user->name }}</a></strong>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
