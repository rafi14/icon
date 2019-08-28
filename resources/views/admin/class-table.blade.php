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
          <h3 style="text-align: center" class="box-title">Table Kelas</h3><br>
          <a class="btn btn-primary" href="{{route('admin.class.create')}}">Tambah</a>

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
                    <th>image</th>  
                    <th>name</th>
                    <th>description</th>
                    <th>Jenis Produk</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
              @foreach($kelas as $kelasku)
                  <tr>
                    <td><img src="{{ url('kelasimage/' . $kelasku->image) }}" width="200"></td>
                    <td>{{$kelasku->name}}</td>
                    <td>{{$kelasku->description}}</td>
                    <td>{{$kelasku->product->name}}</td>
                    <td>
                        <a href="{{route('admin.class.detail',$kelasku->id)}}"><i class="fa fa-eye"></i></a>
                        <a href=""><i class="fa fa-pencil"></i></a>
                        <a href=""><i class="fa fa-trash"></i></a>
                    </td>
                    
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