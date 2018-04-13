@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">Edit post: {{ $post->title }}</div>

        <div class="panel-body">
            <form action="{{route('post.update', ['id' => $post->id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ $post->title }}">
                </div>
                <div class="form-group">
                    <label for="featured">Foto Kerusakan</label>
                    <input type="file" id="featured" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"
                            @if($category->id == $post->category->id)selected
                                    @endif
                            >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Kota Disabilitas</label>
                    <select name="city_id" id="city" class="form-control">
                        @foreach($cities as $city)
                            <option value="{{ $city->id }}"
                            @if($city->id == $post->city->id)selected
                                    @endif
                            >{{ $city->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content_post" id="content_post" rows="5" cols="5" class="form-control">{{ $post->content_post }}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Post</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop

@section('styles')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
@stop

@section('scripts')
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
    <script>
        $(document).ready(function() {
            $('#content_post').summernote();
        });
    </script>
@stop