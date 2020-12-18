{{-- @include('component.header') --}}
@extends('layout.master')

@section('title', 'test')


@section('content')



<div id = 'msg'>This message will be replaced using Ajax.
    Click the button to replace the message.</div>
 <?php
    echo Form::button('Replace Message',['onClick'=>'getMessage()']);
 ?>

@endsection
