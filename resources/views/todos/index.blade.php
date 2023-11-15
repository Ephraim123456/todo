@extends('master')
@section('content')
<div class="row my-4">
    <div class="col-xl-6">
        <div class="col-xl-6 m-auto">
            @if (Session::has('success'))
            <div class="alert alert-success">
                {{Session::get('success')}}
            </div>
            @elseif (Session::has('error'))
            <div class="alert alert-danger">
                {{Session::get('error')}}
            </div>
            @endif
    </div>

<div class="row my-2">
    <div class="col-12 text-end">
        <a href="{{route('todos.create')}}" class="btn btn-primary">Create Todo</a>
    </div>
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        <tbody>
            <tr>
                @forelse($todos as $todo)
                <td>{{$todo->id}}</td>
                <td>{{$todo->name}}</td>
                <td>{{$todo->description}}</td>
                <td>
                    <a href="{{route('todos.show', $todo->id)}}" class="btn btn-info">View</a>
                    <a href="{{route('todos.edit', $todo->id)}}" class="btn btn-success">Edit</a>
                    <a href="" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="4">
                    <p class="text-danger">No todo found!</p>

                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endSection
