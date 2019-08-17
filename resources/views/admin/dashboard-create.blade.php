<form class="form-horizontal" method="post" action="" enctype="multipart/form-data">
@csrf
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Nama Hewan</label>  
  <div class="col-md-4">
  <input id="textinput" name="nama" type="text" placeholder="Nama Hewan" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Gambar Hewan</label>  
  <div class="col-md-4">
  <input name="gambar" type="file"  class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->

<button type="submit">Submit</button>

</fieldset>
</form>
