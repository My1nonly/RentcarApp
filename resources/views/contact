@extends('layouts.rentcar')
@section('title','Upload Post')

@section('content')

<!--Page Header-->
<section class="page-header contactus_page">
  <div class="container">
    <div class="page-header_wrap">
      <div class="page-heading">
        <h1>Upload Post</h1>
      </div>
      <ul class="coustom-breadcrumb">
        <li><a href="home">Home</a></li>
        <li>Upload Post</li>
      </ul>
    </div>
  </div>
  <!-- Dark Overlay-->
  <div class="dark-overlay"></div>
</section>
<!-- /Page Header--> 


<section>
<div class="uploadcontainer">  
  <form id="contact" action="{{route('car_details.store')}}" method="POST" enctype=multipart/form-data>
     @csrf
    <h2><a>Upload Car</a></h2>
    <h4><a>Provide The Details</a></h4>
    <fieldset>
      <input placeholder="Car name" type="text" name="carname"  required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Car Price Per Day" type="number" name="carprice"  required autofocus>
    </fieldset>

    <fieldset>
      <input placeholder="car brand" type="text" name="brand"  required autofocus>
    </fieldset>

    <fieldset>   
    <input placeholder="Car color" type="text" name="color"  required autofocus>
    </fieldset>

    
    <fieldset>
   <input id="carpic" type="file" name="carpic"  required autofocus>
    </fieldset>
  <input style="display:none"  value='{{ Auth::user()->id }}' name="user_id"/>
   
    <fieldset>
    <div class="form-group">
              <button class="btn" type="submit" name="send" type="submit">Upload </button>
            </div>
    </fieldset>
   
  </form>
</div>

</section>


@endsection