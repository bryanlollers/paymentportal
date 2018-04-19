@extends('layouts.app')

@section('title', '| Add User')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('users.index')}}">User Administration</a></li>
            <li class="active">Add User</li>
        </ol>
    </div>
    
    <div class='col-lg-12'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class='fa fa-plus'></i> Add User
            </div>
            <div class="panel-body">
                    {{ Form::open(array('url' => 'users')) }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', '', array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', '', array('class' => 'form-control')) }}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('password', 'Password') }}<br>
                                {{ Form::password('password', array('class' => 'form-control')) }}
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('password', 'Confirm Password') }}<br>
                                {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
                            </div>
                        </div>
                    </div>
                
                    <h5><b>Assign Role</b></h5>
                
                    <div class='form-group'>
                        @foreach ($roles as $role)
                            {{ Form::checkbox('roles[]',  $role->id ) }}
                            {{ Form::label($role->name, ucfirst($role->name)) }}<br>
                
                        @endforeach
                    </div>
                
                
                    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
                    <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
                    {{ Form::close() }}
            </div>
        </div>
    </div>

</div>


@endsection