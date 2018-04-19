@extends('layouts.app')

@section('title', '| Edit User')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li><a href="{{route('users.index')}}">User Administration</a></li>
            <li class="active">Edit {{$user->name}}</li>
        </ol>
    </div>
    <div class='col-lg-12'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class='fa fa-edit'></i> Edit {{$user->name}}
            </div>
            <div class="panel-body">
                {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                                {{ Form::label('email', 'Email') }}
                                {{ Form::email('email', null, array('class' => 'form-control')) }}
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
                        {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                        {{ Form::label($role->name, ucfirst($role->name)) }}<br>
            
                    @endforeach
                </div>
            
                {{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</a>
                {{ Form::close() }}
            </div>
        </div>
        
    </div>
</div>

@endsection