@extends('layouts.master')

@section('task')
<div >

<div class="container">
    <h1>Add Task</h1>
    
</div>
<div class="container ">
    <form action="{{route('store')}}" method="POST">
    {{csrf_field()}}

    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</div>   
@endsection
