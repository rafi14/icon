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
          <h3 style="text-align: center" class="box-title">Table Production</h3><br>
          <a class="btn btn-primary" href="{{route('admin.product.create')}}">Tambah</a>

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
                    <th>name</th>
                    <th>image</th>
                    <th>type</th>
                    <th>description</th>
                    <th>total</th>
                    <th>weight</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
              @foreach($products as $product)
                  <tr>
                    <td>{{$product->name}}</td>
                    <td><img src="{{ url('productimage/' . $product->image) }}" width="200"></td>
                    <td>{{$product->tipe->name}}</td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->total}}</td>
                    <td>{{$product->weight}}</td>
                    <td>
                        <a href="{{route('admin.product.detail', $product->id)}}"><i class="fa fa-eye"></i></a>
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