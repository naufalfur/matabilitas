@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        {{--<div class="panel-heading">Create a new post</div>--}}

        <div class="panel-body">
            <table class="table table-hover">
                <thead>
                    <th>City Name</th>
                    <th>Editing</th>
                    <th>Deleting</th>
                </thead>

                <tbody>
                    @if($cities->count() == 0)
                        <tr>
                            <th colspan="3" class="text-center">
                                No Cities Yet
                            </th>
                        </tr>
                    @endif
                    @foreach($cities as $city)
                        <tr>
                            <td>{{ $city->name }}</td>
                            <td><a href="{{ route('city.edit', ['id' => $city->id, ]) }}" class="btn btn-xs btn-info">Edit</a></td>
                            <td><a href="{{ route('city.delete', ['id' => $city->id, ]) }}" class="btn btn-xs btn-danger">Delete</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop