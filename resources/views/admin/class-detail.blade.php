@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Class Detail</legend>

        <!-- Text input-->
        <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Image Class</label>  
            <div class="col-md-4">
                <img src="{{ url('kelasimage/' . $kelas->image) }}" width="200" alt="">
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Name Of Class</label>  
            <div class="col-md-4">
                {{ $kelas->name}}
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Jenis Produk</label>  
            <div class="col-md-4">
               {{ $kelas->product->name}}
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
               {{ $kelas->description}}
            </div>
        </div>
       
       
        
        

        <!-- Text input-->

        <div class="form-group text-center">
                  <a href="{{route('admin.class.edit',$kelas->id)}}" class="btn btn-primary" type="submit">Edit</a>
                  <a href="" class="btn btn-danger" type="submit">Delete</a>
        </div>

        </fieldset>
        </form>
@endsection        
