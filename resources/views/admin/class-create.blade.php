@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('admin.class.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Production</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Image Kelas</label>  
            <div class="col-md-4">
            <input id="textinput" name="image" type="file"  class="form-control input-md">
            </div>
        </div>      
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Name Of Class</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="Name Of Class" class="form-control input-md">
            </div>
        </div>    
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Type</label>  
            <div class="col-md-4">
                <select name="id_production" id="" class="form-control">
               @foreach($product as $v)
                    <option value="{{$v->id}}">{{$v->name}}</option>
               @endforeach     
               
                </select>
            </div>
        </div>  
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
                <textarea name="description" placeholder="Description" id="" cols="30" rows="10"></textarea>
            </div>
        </div>      
      <br>
        

        <!-- Text input-->

        <div class="form-group text-center">
                  <button class="btn btn-primary" type="submit">Simpan</button>
        </div>

        </fieldset>
        </form>
@endsection        
