
<title>{{'Role Management'}}</title>
@extends('layouts.admin')
@section('content')
 <div class="content-wrapper ">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Role Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
                 @can('role-create')
                    <a class="btn btn-success" href="{{ route('roles.index') }}" style="float: right;"> View Role</a>
                  @endcan
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Edit Role
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}
                  <div class="row">
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Name:</strong>
                              {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control','readonly'=> 'true')) !!}
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <div class="form-group">
                              <strong>Permission:</strong>
                              <br/>
                              @foreach($permission as $value)
                                  <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id, $rolePermissions) ? true : false, array('class' => 'name')) }}
                                  {{ $value->name }}</label>
                              <br/>
                              @endforeach
                          </div>
                      </div>
                      <div class="col-xs-12 col-sm-12 col-md-12">
                          <button type="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </div>
                  {!! Form::close() !!}
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

</div>
    
@stop