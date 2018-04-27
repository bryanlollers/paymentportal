@extends('layouts.master')

@section('title', '| Add Role')

@section('content')

<div class="row">
    <div class='col-lg-12'>
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class='fa fa-plus'></i> Add Role
            </div>
            <div class="panel-body">
                    {{ Form::open(array('url' => 'roles')) }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                {{ Form::label('name', 'Name') }}
                                {{ Form::text('name', '', array('class' => 'form-control')) }}
                            </div>
                        </div>
                        
                    </div>
                    
                
                    <h5><b>Assign Permissions</b></h5>
                
                    <div class='form-group'>
                       
                        @foreach ($permissions as $permission)
                            {{ Form::checkbox('permissions[]',  $permission->id ) }}
                            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

                        @endforeach
                    </div>
                
                
                    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}
                    <a href="{{ route('roles.index') }}" class="btn btn-default">Cancel</a>
                    {{ Form::close() }}
            </div>
        </div>
    </div>

</div>


@endsection