@extends('master')
@section("content")
<div class="container">

  <section class="panel panel-default">
    <div class="panel-heading">
      <h3 class="panel-title">Edit Your Product Details</h3>
    </div>
    <div class="panel-body">

      
      <!-- {{url('edit_product')}} // -->
      
      
         
     @php
        $item = $products[0];
     @endphp
      <form action="{{route('productUpdate',$item->id)}}" method= "POST"class="form-horizontal" role="form" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Product Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" id="name" placeholder="Name the product"  value="{{$item->name}}">
          </div>
        </div> <!-- form-group // -->
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Price Per kg</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" name="price" id="name" placeholder="Unit Price" required value="{{$item->price}}">
          </div>
        </div> <!-- form-group // -->
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Quantity</label>
          <div class="col-sm-9">
            <input type="number" class="form-control" name="quantity" id="name" placeholder="Available Quantity As kg" required value="{{$item->quantity}}">
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label for="about" class="col-sm-3 control-label"  aria-placeholder="Describe the product">Discription</label>
          <div class="col-sm-9">
            <textarea class="form-control"name="desc" required value="{{$item->description}}"></textarea>
          </div>
        </div> <!-- form-group // -->

        <div class="form-group">
          <label class="col-sm-3 control-label">Existance</label>
          <div class="col-sm-3">
            <label class="control-label small" for="date_start">MFD: </label>
            <input type="date" class="form-control" name="MFD" id="date_start" placeholder="Manufacture Date" value="{{$item->MFD}}">
          </div>
          <div class="col-sm-3">
            <label class="control-label small" for="date_finish">EXP:</label>
            <input type="date" class="form-control" name="EXP" id="date_finish" placeholder="Expiration Date" value="{{$item->EXP}}">
          </div>
        </div> <!-- form-group // -->
        <div class="form-group">
          <label for="name" class="col-sm-3 control-label">Thumbnails</label>
          <div class="col-sm-3">
            <label class="control-label small" for="file_img">images (jpg/png):</label> <input type="file" name="img">
          </div>
        </div> <!-- form-group // -->

        <hr>
        <div class="form-group">
            
          <div class="col-sm-offset-3 col-sm-9">
            <button type="submit" class="btn btn-primary" >Edit</button>
          </div>
         <!-- form-group //  <div class="col-sm-3" style="padding-top: 20px;">                             
                <a  class="btn btn-primary" type="submit" >Edit </a>
             </div>-->

        </div> <!-- form-group // -->
      </form>

    </div><!-- panel-body // -->
  </section><!-- panel// -->


</div> <!-- container// -->


@endsection