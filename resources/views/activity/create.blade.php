@extends('layouts.app')

@section('content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Activity Form</h4>
                        <hr>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="check_in">Check In</label>
                                <input type="text" class="form-control dateTimePicker" id="check_in" name="check_in">
                            </div>
                            <div class="form-group">
                                <label for="check_out">Check Out</label>
                                <input type="text" class="form-control dateTimePicker" id="check_out" name="check_out">
                            </div>
                            <div class="text-center">
                                <button class="btn btn-light" type="reset">Reset</button>
                                <button type="submit" class="btn btn-gradient-primary mr-2">Save</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @stop