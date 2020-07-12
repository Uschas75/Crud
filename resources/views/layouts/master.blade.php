@extends('layouts.app')
@section('content')

<div class="d-flex">
    
    <!--sidebar-->
    <div class="sideBar" >
        <ul>
        <li class="border text-center ">
            <a href="{{route('showTask')}}" class="dashBoard">
                <i class="fas fa-chart-line d-block"></i>
                <span class="d-block">Task List</span>
            </a>
            <ul>
            <li class="border-bottom"> Lorem </li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            </ul>
        </li>
        <li class="border text-center">
            <a href="{{route('create')}}" class="dashBoard">
                <i class="fab fa-uikit d-block"></i>
                <span class="d-block">Create Task</span>
            </a>
            <ul>
            <li class="border-bottom"> Lorem </li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            </ul>
        </li>
        <li class="border text-center">
            <a href="{{route('modify')}}" class="dashBoard">
                <i class="fas fa-medkit d-block"></i>
                <span class="d-block">Edit Task</span>
            </a>
            <ul>
            <li class="border-bottom"> Lorem </li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            </ul>
        </li>
        <li class="border text-center">
            <a href="{{route('destroy')}}" class="dashBoard">
                <i class="fas fa-apple-alt d-block"></i>
                <span class="d-block">Delete</span>
            </a>
            <ul>
            <li class="border-bottom"> Lorem </li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            </ul>
        </li>
        <li class="border text-center">
            <a href="#" class="dashBoard">
                <i class="fab fa-wpforms d-block"></i>
                <span class="d-block">Forms</span>
            </a>
            <ul>
            <li class="border-bottom"> Lorem </li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            <li class="border-bottom"> puss</li>
            </ul>
        </li>
        
        </ul>

    </div>
    <!--/sidebar-->
    <div >
        @yield('task')
    </div>

    
</div>






@endsection()