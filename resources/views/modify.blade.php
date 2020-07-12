@extends('layouts.master')

@section('task')
<div>
                <div class="text-center my-5">
                    <h1>Task App</h1>
                </div>
                <div class="row"> 
                    @foreach($tasks as $task)
                    <div class="col-md-12 d-flex justify-content-center my-3">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">Title: {{$task->title}}</h5>
                                <p class="card-text">Description: {{$task->description}}</p>
                                <p class="card-text">Created_at: {{$task->created_at}}</p>
                                <p class="card-text">Updated_at: {{$task->updated_at}}</p>
                                <button><a href="{{route('edit',$task->id)}}">Edit</a></button>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
        </div>
@endsection
