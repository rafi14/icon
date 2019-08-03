<form class="form-horizontal" method="post" action="{{route('simpan-hewan')}}">
@csrf
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Jenis Hewan</label>  
  <div class="col-md-4">
  <input id="textinput" name="jenis" type="text" placeholder="Jenis Hewan" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Berat</label>  
  <div class="col-md-4">
  <input id="textinput" name="berat" type="text" placeholder="Berat" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Harga</label>  
  <div class="col-md-4">
  <input id="textinput" name="harga" type="text" placeholder="harga" class="form-control input-md">
    
  </div>
</div><br>
<button type="submit">Submit</button>

</fieldset>
</form>
