@extends('layouts.app')

@section('content')
 
<div class="card card-custom">
 <div class="card-header">
  <h3 class="card-title">
   ENVOIE DE SMS 
  </h3>
 </div>
 <!--begin::Form-->
 <form method="POST" action="">
     
     @csrf

  
   <div class="form-group row m-10">
    <label for="phone" class="col-2 col-form-label">Numero De Telephone : </label>
    <div class="col-10 m-10">
        <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input" name="phone"/>
    </div>
   </div>

   <div class="form-group row mt-10">
    <label for="message" class="col-2 col-form-label">Message </label>
    <div class="col-10">
        <textarea name="message" id="" cols="30" rows="10"></textarea>
    </div>
   </div>
   
   
   
  <div class="card-footer">
   <div class="row">
    <div class="col-2">
    </div>
    <div class="col-10">
     <button type="reset" class="btn btn-success mr-2">Submit</button>
     <button type="reset" class="btn btn-secondary">Cancel</button>
    </div>
   </div>
  </div>
 </form>
</div>
 
@endsection