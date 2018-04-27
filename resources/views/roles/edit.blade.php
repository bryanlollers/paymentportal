@extends('layouts.master')

@section('title', '| Edit Role')

@section('content')
<div class="row">
    <div class='col-lg-12'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class='fa fa-edit'></i> Edit Role: {{$role->name}}
            </div>
            <div class="panel-body">
                {{ Form::model($role, array('route' => array('roles.update', $role->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                                {{ Form::label('name', 'Role Name') }}
                                {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    
                </div>
                
                <h5><b>Assign Permissions</b></h5>
            
                <div class='form-group'>
                    @foreach ($permissions as $permission)

                        {{Form::checkbox('permissions[]',  $permission->id, $role->permissions ) }}
                        {{Form::label($permission->name, ucfirst($permission->name)) }}<br>

                    @endforeach
                </div>
            
                {{ Form::submit('Save Changes', array('class' => 'btn btn-primary')) }}
                <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
                {{ Form::close() }}
            </div>
        </div>
        
    </div>
</div>

@endsection