@extends('layouts.app')

@section('title', '| Edit User')

@section('content')
<div class="row">
    <div class='col-lg-4 col-lg-offset-4'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class='fa fa-user-plus'></i> Edit {{$user->name}}
            </div>
            <div class="panel-body">
                {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

                <div class="form-group">
                    {{ Form::label('name', 'Name') }}
                    {{ Form::text('name', null, array('class' => 'form-control')) }}
                </div>
            
                <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email', null, array('class' => 'form-control')) }}
                </div>
            
                <h5><b>Give Role</b></h5>
            
                <div class='form-group'>
                    @foreach ($roles as $role)
                        {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
                        {{ Form::label($role->name, ucfirst($role->name)) }}<br>
            
                    @endforeach
                </div>
            
                <div class="form-group">
                    {{ Form::label('password', 'Password') }}<br>
                    {{ Form::password('password', array('class' => 'form-control')) }}
            
                </div>
            
                <div class="form-group">
                    {{ Form::label('password', 'Confirm Password') }}<br>
                    {{ Form::password('password_confirmation', array('class' => 'form-control')) }}
            
                </div>
            
                {{ Form::submit('Update', array('class' => 'btn btn-primary btn-flat')) }}
                <a href="{{ route('users.index') }}" class="btn btn-default btn-flat">Cancel</a>
                {{ Form::close() }}
            </div>
        </div>
        
    </div>
</div>

@endsection