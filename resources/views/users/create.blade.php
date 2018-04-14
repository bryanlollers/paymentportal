@extends('layouts.app')

@section('title', '| Add User')

@section('content')
<div class="row">
    <div class='col-lg-4 col-lg-offset-4'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class='fa fa-user-plus'></i> Add User
            </div>
            <div class="panel-body">
                    {{ Form::open(array('url' => 'users')) }}
    
                    <div class="form-group">
                        {{ Form::label('name', 'Name') }}
                        {{ Form::text('name', '', array('class' => 'form-control')) }}
                    </div>
                
                    <div class="form-group">
                        {{ Form::label('email', 'Email') }}
                        {{ Form::email('email', '', array('class' => 'form-control')) }}
                    </div>
                
                    <div class='form-group'>
                        @foreach ($roles as $role)
                            {{ Form::checkbox('roles[]',  $role->id ) }}
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
                
                    {{ Form::submit('Add', array('class' => 'btn btn-primary btn-flat')) }}
                    <a href="{{ route('users.index') }}" class="btn btn-default btn-flat">Cancel</a>
                    {{ Form::close() }}
            </div>
        </div>
    </div>

</div>


@endsection