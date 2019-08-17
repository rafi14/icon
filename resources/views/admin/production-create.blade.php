@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Production</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Name</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="Name" class="form-control input-md">
            </div>
        </div>
       
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Type</label>  
            <div class="col-md-4">
                <select name="id_type" id="" class="form-control">
               @foreach($type as $v)
                    <option value="{{$v->id}}">{{$v->name}}</option>
               @endforeach     
               
                </select>
            </div>
        </div>
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Image</label>  
            <div class="col-md-4">
                <input id="textinput" name="image" type="file" placeholder="Image" class="form-control input-md">
            </div>
        </div>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Description</label>  
            <div class="col-md-4">
            <textarea name="description" placeholder="Description" id="" cols="30" rows="10"></textarea>
                
            </div>
        </div>
        
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Total</label>  
            <div class="col-md-4">
                <input id="textinput" name="total" type="text" placeholder="Total" class="form-control input-md">
            </div>
        </div>

        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Weight</label>  
            <div class="col-md-4">
                <input id="textinput" name="weight" type="text" placeholder="Weight" class="form-control input-md">
            </div>
        </div>
        

        <!-- Text input-->

        <button type="submit">Submit</button>

        </fieldset>
        </form>
@endsection        
