@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Production Detail</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Name</label>  
            <div class="col-md-4">
               {{ $detailProduk->name}}
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Image</label>  
            <div class="col-md-4">
            <img src="{{ url('productimage/' . $detailProduk->image) }}" width="200" alt="">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
               {{ $detailProduk->description}}
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Total</label>  
            <div class="col-md-4">
               {{ $detailProduk->total}}
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Weight</label>  
            <div class="col-md-4">
               {{ $detailProduk->weight}}
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Type</label>  
            <div class="col-md-4">
               {{ $detailProduk->tipe->name}}
            </div>
        </div>
       
        
        

        <!-- Text input-->

        <div class="form-group text-center">
                  <a href="{{route('admin.product.edit',$detailProduk->id)}}" class="btn btn-primary" type="submit">Edit</a>
                  <a href="{{route('admin.product.delete',$detailProduk->id)}}" class="btn btn-danger" type="submit">Delete</a>
        </div>

        </fieldset>
        </form>
@endsection        
