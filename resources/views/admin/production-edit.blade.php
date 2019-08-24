@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('admin.product.update',$editProduk->id)}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Production</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Name</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" value="{{$editProduk->name}}" type="text" class="form-control input-md">
            </div>
        </div>
       
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Type</label>  
            <div class="col-md-4">
                <select name="id_type" id="" class="form-control">
               @foreach($type as $v)
                    <option value="{{$v->id}}" @if($v->id == $editProduk->id_type) selected="selected" @endif>{{$v->name}}</option>
               @endforeach     
               
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Image</label>  
            <div class="col-md-4">
                <input id="textinput" name="image" type="file"  class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
            <textarea name="description" id="" cols="30" rows="10">{{$editProduk->description}}</textarea>
                
            </div>
        </div>
        
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Total</label>  
            <div class="col-md-4">
                <input id="textinput" name="total" type="text" value="{{$editProduk->total}}" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Weight</label>  
            <div class="col-md-4">
                <input id="textinput" name="weight" type="text" value="{{$editProduk->weight}}" class="form-control input-md">
            </div>
        </div><br>
        

        <!-- Text input-->

        <div class="form-group text-center">
                  <button class="btn btn-primary" type="submit">Simpan</button>
        </div>

        </fieldset>
        </form>
@endsection        
