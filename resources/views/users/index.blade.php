@extends('layouts.master')

@section('title', '| Users')

@section('content')

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="btn-group pull-right">
                    <a href="{{ route('users.create') }}" class="btn btn-success btn-xs"><i class="fa fa-plus"></i> Add User</a>
                </div>
                <i class="fa fa-th-list"></i> User Administration
            </div>
            <div class="table-responsive">
                    
                <table class="table table-bordered table-condensed table-striped">
    
                    <thead>
                        <tr>
                            <td colspan=5>
                                <form method="GET" action="">
                                    <div class="input-group pull-left">
                                        <input type="search" name="search" class="form-control" id="search" placeholder="Search">
                                        <span class="input-group-btn">
                                        <button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
                                        </span>
                                    </div>
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Date/Time Added</th>
                            <th>User Roles</th>
                            
                        </tr>
                        
                        
                    </thead>
    
                    <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td class="text-center">
                            
                                    {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'onsubmit' => 'return ConfirmDelete()' ]) !!}
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info btn-xs" style="margin-right: 3px;"><i class="fa fa-edit"></i></a>
                                    {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'text-muted btn btn-danger btn-xs']) !!}
                                    {!! Form::close() !!}
                                
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->created_at->format('F d, Y h:ia') }}</td>
                                <td>{{  $user->roles()->pluck('name')->implode(' ') }}</td>{{-- Retrieve array of roles associated to a user and convert to string --}}
                                
                            </tr>
                            @endforeach
                    </tbody>
    
                </table>
                
            </div>
            
        </div>  
        
    </div>
</div>

@endsection