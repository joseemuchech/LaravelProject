@extends('layouts.app')

@section('content')
       <div class="jumbotron text-center pb-2 bg-secondary">
        <h1>Welcome To My Blog</h1>
        <p>This is laravel application written by Josee</p>
        
        <!--start:slideshow-->
   <section class="section1 pt-2 pb-2">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
  <!-- Carousel -->
  <div id="demo" class="carousel slide" data-bs-ride="carousel">
  
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    
    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="imgs/slideshow/david-becker-dMeEJRE18VI-unsplash.jpg" alt="Los Angeles" class="d-block" style ="width:100%; height:50vh; ">
        <div class="carousel-caption">
          <h3>Los Angeles</h3>
          <p>We had such a great time in LA!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="imgs/slideshow/edge-1920x1080-windows-10-windows-10x-microsoft-8k-22713.jpg" alt="Chicago" class="d-block" style="width:100%;  height:50vh;">
        <div class="carousel-caption">
          <h3>Chicago</h3>
          <p>Thank you, Chicago!</p>
        </div> 
      </div>
      <div class="carousel-item">
        <img src="imgs/slideshow/v2osk-1Z2niiBPg5A-unsplash.jpg" alt="New York" class="d-block" style="width:100%;  height:50vh;">
        <div class="carousel-caption">
          <h3>New York</h3>
          <p>We love the Big Apple!</p>
        </div>  
      </div>
    </div>
    
    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
  
  
          </div>
        </div>
      </div>
       </section>
      
      <!--End:slideshow-->
    
       </div>
@endsection
