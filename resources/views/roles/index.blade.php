@extends('layouts.app')

@section('title', '| Roles')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <ol class="breadcrumb">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <li class="active">Roles</li>
        </ol>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="btn-group pull-right">
                    <a href="{{ route('roles.create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add Role</a>
                    <a href="{{ route('users.index') }}" class="btn btn-default btn-xs">Users</a>
                    <a href="{{ route('permissions.index') }}" class="btn btn-default btn-xs">Permissions</a>
                </div>
                <i class="fa fa-th-list"></i> Roles
            </div>
            <div class="table-responsive">
                    
                <table class="table table-bordered table-condensed table-striped">
    
                    <thead>
                        <tr>
                            <td colspan=3>
                                <form method="GET" action="">
                                    <div class="input-group pull-left">
                                    <input type="search" name="search" class="form-control" id="search" placeholder="Search" value="{{$string}}">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th>Role</th>
                            <th>Permissions</th>
                            <th>Actions</th>
                        </tr>
                        
                        
                    </thead>
    
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
        
                            <td>{{ $role->name }}</td>
        
                            <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                            <td>
                                <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info btn-xs pull-left" style="margin-right: 3px;"><i class="fa fa-edit"></i></a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'onsubmit' => 'return ConfirmDelete()' ]) !!}
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'text-muted btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
        
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
    
                </table>
                
            </div>
            
        </div>  
        
    </div>
</div>

@endsection