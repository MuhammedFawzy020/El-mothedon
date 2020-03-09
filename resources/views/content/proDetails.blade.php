@extends('layouts.app')
@section('content')
<div class="col-lg-12 cover">
	<div class="container">
		<div class="img-cover col-lg-12">
			<img src="{{url('/')}}/img/b6fbe37d-8b57-4824-a87b-975f3ce28497.jpg" alt="">
		</div>
	</div>
</div>

<div class="col-lg-12 proDetails">
	<div class="container">
		<h3>Project Name</h3>
			<hr>
		<div class="row">
			<div class="col-lg-6">
				<div class="row">
					<div class="col-lg-3"><strong>Category:</strong></div>
					<div class="col-lg-6">Construction</div>	
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-3"><strong>Contractor:</strong></div>
					<div class="col-lg-6">Al Hamed Co. for General Contracting</div>	
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-3"><strong>Project Value:</strong></div>
					<div class="col-lg-6">IQD 42,546,000,000.00</div>	
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-3"><strong>Client:</strong></div>
					<div class="col-lg-6">Ministry Of Planning</div>	
				</div>
				<hr>
				<div class="row">
					<div class="col-lg-3"><strong>Description:</strong></div>
					<div class="col-lg-6">Location: Baghdad <br>	
					Begining Date: 23/6/2008<br>
					Contract No.: 6/23/11/2008</div>	
					</div>
			</div>
			<div class="col-lg-6" style="height: 400px;">
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="{{url('/')}}/img/matthew-ronder-seid-YMMCvPn05qY-unsplash.jpg" class="d-block w-100" alt="..." style="height: 100%;">
				    </div>
				    <div class="carousel-item">
				      <img src="{{url('/')}}/img/matthew-ronder-seid-YMMCvPn05qY-unsplash.jpg" class="d-block w-100" alt="..." style="height: 100%;">
				    </div>
				    <div class="carousel-item">
				      <img src="{{url('/')}}/img/matthew-ronder-seid-YMMCvPn05qY-unsplash.jpg" class="d-block w-100" alt="..." style="height: 100%;">
				    </div>
				  </div>
				  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				    <span class="carousel-control-next-icon" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection