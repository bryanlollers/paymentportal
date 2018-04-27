@extends('layouts.master')

@section('title', '| Roles')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="btn-group pull-right">
                    <a href="{{ route('roles.create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add Role</a>
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
                            <th></th>
                            <th>Role</th>
                            <th>Permissions</th>
                            
                        </tr>
                        
                        
                    </thead>
    
                    <tbody>
                        @foreach ($roles as $role)
                        <tr>
                            <td class="text-center">
                                
                                {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id], 'onsubmit' => 'return ConfirmDelete()' ]) !!}
                                <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info btn-xs" style="margin-right: 3px;"><i class="fa fa-edit"></i></a>
                                {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'text-muted btn btn-danger btn-xs']) !!}
                                {!! Form::close() !!}
        
                            </td>
                            <td>{{ $role->name }}</td>
        
                            <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                            
                        </tr>
                        @endforeach
                    </tbody>
    
                </table>
                
            </div>
            
        </div>  
        
    </div>
</div>

@endsection