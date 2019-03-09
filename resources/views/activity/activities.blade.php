@extends('layouts.app')
@section('content')
    <div class="content-wrapper">

        <div class="page-header">
            <h3 class="page-title">
              <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
              </span>
                Dashboard
            </h3>
            <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">
                        <span></span>Activities
                        <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="col-lg-12 grid-margin stretch-card">

            <div class="card">
                <a href="{{route('activities.create')}}" class="btn btn-gradient-danger float-right"><i class="mdi mdi-plus"></i>Add Activity</a>

                <div class="card-body">
                    <h4 class="card-title">Activities table</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Date</th>
                            <th>Check In</th>
                            <th>Check Out</th>
                            <th>Works</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $i=1;?>
                        @if($activities)
                            @foreach($activities as $activity)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$activity->check_in}}</td>
                            <td>{{$activity->check_out}}</td>
                            <td>
                                {{$activity->daily_works}}
                            </td>
                            <td></td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop

