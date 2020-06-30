@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>{{ $post->title }}</h1>

    <table class="table">
        <thead>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Title
                </th>
                <th>
                    Body
                </th>
                <th>
                    Created
                </th>
                <th>
                    Updated
                </th>
                <th colspan="2">
                </th>
            </tr>
        </thead>
        <tbody>
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="">Delete</a>
                    </td>
                </tr>
        </tbody>
    </table>

    <h3>
        Image post
    </h3>

    @if (!empty($post->path_img))
        <img src="{{ asset('storage/' . $post->path_img ) }}" alt="">
    @else
        <if class="no-img-text">No image for this post.</if>
    @endif


</div>
@endsection