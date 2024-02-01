@extends('layout')
@section('title',"Home Page")
@section('content')
@auth
<div>
<!-- <img src="{{ asset('images/about.jpg') }}" style="width:350px; margin:25px" > -->
<img src="{{ asset('images/logo.png') }}" style="width:75%; margin:10px 0 10px 100px">

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" style="width:400px; margin:25px 0 10px 20px;">
    <img src="{{ asset('images/slider01.jpg') }}"  class="d-block w-100" alt="Image description" >
      
    </div>
    <div class="carousel-item" style="width:400px; margin:25px 0 10px 20px;">
    <img src="{{ asset('images/slider02.jpg') }}" class="d-block w-100" alt="Image description">
      
    </div>
    <div class="carousel-item" style="width:400px; margin:25px 0 10px 20px;">
    <img src="{{ asset('images/slider03.jpg') }}" class="d-block w-100" alt="Image description">
    </div>
    <div class="carousel-item" style="width:400px; margin:25px 0 10px 20px;">
    <img src="{{ asset('images/slider05.jpg') }}" class="d-block w-100" alt="Image description">
    </div>
    <div class="carousel-item" style="width:400px; margin:25px 0 10px 20px;">
    <img src="{{ asset('images/slider06.jpg') }}" class="d-block w-100" alt="Image description">
    </div>
    <div class="carousel-item" style="width:400px; margin:25px 0 10px 20px;">
    <img src="{{ asset('images/slider07.jpg') }}" class="d-block w-100" alt="Image description">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container text-center" style=" margin-top:50px; background-color: #48dbfb;
background-image: linear-gradient(315deg, #48dbfb 0%, #d3d3d3 74%);">
  <div class="row align-items-center">
    <div class="col">
    <h3>About Us</h3>
    <p> Empowering Panchayats in Karnataka through Technology.</p>
    <p> We envision a future where every Panchayat in Karnataka is equipped with a robust and accessible system. 
       We believe that technology can be a powerful tool for transforming Panchayat governance, enhancing resource management, and empowering communities. 
       Our mission is to develop and implement the Panchayat Resource Tracking and Survey Management (PRASM) - a comprehensive digital platform designed to revolutionize 
       the way Panchayats operate.</p>
    </div>
    <div class="col">
    <img src="{{ asset('images/about.jpg') }}" style="width:350px; margin:25px" >
    </div> 
    <!-- <div class="col">
      One of three columns
    </div> -->
  </div>
</div>

</div> 

    
    <div class="footer"> <img src="{{ asset('images/mainfooter.png') }}"style="padding: 10px;bottom: 0; width: 100%;" > </div> 

@endauth

@endsection