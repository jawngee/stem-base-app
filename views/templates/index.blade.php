@extends('layouts/page')

@section('main')

@foreach($posts as $post)
    @include('partials/post-excerpt')
@endforeach

{{$currentPage}} of {{ $totalPosts }}
{{  count($posts) }}

@endsection