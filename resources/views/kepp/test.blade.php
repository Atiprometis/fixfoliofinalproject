{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'test')


@section('content')


@foreach ($createcourses as $createcourse)
<p>{{ $createcourse->course_id }}</p>
<p>{{ $createcourse->course_name }}</p>

@endforeach


@foreach ($schools as $school)
    
<p>{{ $school->shcool_name }}</p>

@endforeach

{{-- <a href="{{ action('TestDataController@index') }}">test</a> --}}

<a href="{{ action('TestDataController@create') }}">create</a>


@endsection