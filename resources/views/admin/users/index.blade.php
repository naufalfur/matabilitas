@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        {{--<div class="panel-heading">Create a new post</div>--}}

        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                <th>Image</th>
                <th>Name</th>
                <th>Permissions</th>
                <th>Delete</th>
                <th>Point</th>
                </thead>

                <tbody>
                @if($users->count() > 0)
                    @foreach($users as $user)
                        <tr>
                            <td><img src="{{ $user->profile->avatar }}"  width="60px" style="border-radius: 50%;"></td>
                            <td>{{ $user->name }}</td>
                            @if(Auth::id() !== $user->id)
                                @if($user->admin)
                                    <td><a href="{{ route('user.not.admin', ['id' => $user->id, ]) }}" class="btn btn-xs btn-danger">Remove Permissions</a></td>
                                @else
                                    <td><a href="{{ route('user.admin', ['id' => $user->id, ]) }}" class="btn btn-xs btn-success">Make Admin</a></td>
                                @endif
                            @else
                                <td><h5 class="text-primary">On</h5></td>
                            @endif


                            @if(Auth::id() !== $user->id)
                                <td><a href="{{ route('user.delete', ['id' => $user->id, ]) }}" class="btn btn-xs btn-danger">Delete</a></td>
                            @else
                                <td><h5 class="text-primary">On</h5></td>
                            @endif

                            <td><h5 class="text-primary">{{ $user->profile->point }}</h5></td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <th colspan="5" class="text-center">No Users</th>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop