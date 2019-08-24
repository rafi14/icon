@extends('layouts.master')

@section('content')

<section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 style="text-align: center" class="box-title">Table Admin</h3><br>
          <a class="btn btn-primary" href="{{route('admin.create')}}">Tambah</a>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                    title="Collapse">
              <i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fa fa-times"></i></button>
          </div>
        </div>
        <div class="box-body">
          <div class="row">
            <div class="col-md-12">
              <table class="table table-striped table-bordered">
                <thead>
                  <tr>
                    <th>Image</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No_Telp</th>
                    <th>Role</th>
                    <th>admin_login</th>
                    <th>admin_logout</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($admin as $admins)
                  <tr>
                    <td><img src="{{ url('adminimage/' . $admins->image) }}" width="200"></td>
                    <td>{{$admins->username}}</td>
                    <td>{{$admins->email}}</td>
                    <td>{{$admins->no_telp}}</td>
                    <td>{{$admins->myrole->name}}</td>
                    <td>{{$admins->admin_login}}</td>
                    <td>{{$admins->admin_logout}}</td>
                  </tr>
             @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
         
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
@endsection