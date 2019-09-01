@extends('layouts.app')
 
@section('content')
<div class="container">
    @if(session()->has('status'))
        <p class="alert alert-info">
            {{  session()->get('status') }}
        </p>
    @endif
    <div class="col-sm-6 col-sm-offset-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                User Details
            </div>
            <div class="panel-body">
                <div class="form-horizontal">
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">Name</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->name }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">Email</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">Password</label>
                        <div class="col-sm-9">
                            <p class="form-control">********</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">Created On</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->created_at->format('m-d-Y') }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label" for="name">Last Updated</label>
                        <div class="col-sm-9">
                            <p class="form-control">{{ $user->created_at->format('m-d-Y') }}</p>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 col-sm-offset-4">
                            <a href="{{ route('users.index') }}" class="btn btn-success">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection