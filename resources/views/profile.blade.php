@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Profile</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Your about page
                        {{--@if (count($records) === 1)
                            I have one record!
                        @elseif (count($records) > 1)
                            I have multiple records!
                        @else
                            I don't have any records!
                        @endif--}}
                        @foreach($posts as $post)
                            <h1>{{ $post->title }}</h1>
                            <p>{{ $post->body}}</p>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
