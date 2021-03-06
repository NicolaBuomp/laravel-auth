@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>New Post</h1>

<form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">

    @csrf
    @method('POST')

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="{{ old('title')}}">
    </div>

    <div class="form-group">
        <label for="body">Body</label>
       <textarea name="body" id="body" class="form-control">
           {{ old('body') }}
       </textarea>
    </div>

    <div class="form-group">
        <label for="path_img">Post Image</label>
        <input class="form-control" type="file"  name="path_img" id="path_img" accept="image/*">
    </div>

    <input class="btn btn-primary" type="submit" value="Create post">


</form>

</div>
@endsection
