@extends('layouts.master')

@section('content')
        <form class="form-horizontal" method="post" action="{{route('admin.role.store')}}">
        @csrf
        <fieldset>

        <!-- Form Name -->
        <legend>Form Production</legend>

        <!-- Text input-->
        <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Name Of Role</label>  
            <div class="col-md-4">
                <input id="textinput" name="name" type="text" placeholder="Name Of Role" class="form-control input-md">
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
