@extends('layout.master')

@section('title', 'upload')


@section('content')

    
<div> 
    {{-- <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <input type="file" name="image" >
        <button type="submit">Submit</button>  
      </form> --}}
      <form action="{{ url('/upload') }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('POST') }}
        <input type="file" name="image" > 
        <button type="submit" class="btn btn-light mt-2" style="width: 100%; border-radius: 20px;">+ Upload new photo</button>
</form>
</div>





@endsection

