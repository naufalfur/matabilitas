@extends('layouts.app')

@section('content')
    @include('admin.includes.errors')

    <div class="panel panel-default">
        <div class="panel-heading">Edit your profile</div>

        <div class="panel-body">
            <form action="{{route('user.profile.update', [])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" value="{{ $user->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ $user->email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">New Password</label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <div class="form-group">
                    <label for="avatar">New Avatar</label>
                    <input type="file" id="avatar" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="about">About You</label>
                    <textarea class="form-control" id="about" name="about" cols="6" rows="6">{{ $user->profile->about }}</textarea>
                </div>
                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop