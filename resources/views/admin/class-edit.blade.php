@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('admin.class.update',$editKelas->id)}}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="put">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Edit Kelas</legend>

        <!-- Text input-->
        <div class="form-group">
            <div class="form-group">
            <label class="col-md-4 control-label" for="textinput">Image Of Class</label>  
                <div class="col-md-4">
                    <input id="textinput" name="image" type="file"  class="form-control input-md">
                </div>
            </div>
        <label class="col-md-4 control-label" for="textinput">Name Of Class</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" value="{{$editKelas->name}}" type="text" class="form-control input-md">
            </div>
        </div>
       
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Type</label>  
            <div class="col-md-4">
                <select name="id_production" id="" class="form-control">
               @foreach($type as $v)
                    <option value="{{$v->id}}" @if($v->id == $editKelas->id_production) selected="selected" @endif>{{$v->name}}</option>
               @endforeach     
               
                </select>
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
            <textarea name="description" id="" cols="30" rows="10">{{$editKelas->description}}</textarea>
                
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
