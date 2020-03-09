@extends('layouts.app')
@section('content')
<div class="col-lg-12 cover">
	<div class="container">
		<div class="img-cover col-lg-12">
			<img src="{{url('/')}}/img/b6fbe37d-8b57-4824-a87b-975f3ce28497.jpg" alt="">
		</div>
	</div>
</div>
<div class="col-lg-12 media">
	<div class="container">
	<div class="row">
		<div class="col-lg-4">
			<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
			  <a class="nav-link active media-nav" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Latest News</a>
			  <a class="nav-link media-nav" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Photo Gallery</a>
			  <a class="nav-link media-nav" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Downloads</a>
			</div>
		</div>
		<div class="col-lg-8">
			<div class="tab-content" id="v-pills-tabContent">
			  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
			  	<div class="col-lg-12">
			  		<h3>Latest News</h3>
			  		<hr>
			  		<div class="new-cont col-lg-12">
			  			<a href="#">The Opening of Coral Boutique hotel in Baghdad</a><br>
			  			<strong>12 Aug 2012</strong><br>
			  			<small>The Project is in the process of delivery to the Ministry of Agriculture.</small>
			  		</div>
			  		<hr>
			  		<div class="new-cont col-lg-12">
			  			<a href="#">The completion of Modern Village project in Diwaniyah</a><br>
			  			<strong>12 Aug 2012</strong><br>
			  			<small>The Project is in the process of delivery to the Ministry of Agriculture.</small>
			  		</div>
			  		<hr>
			  		<div class="new-cont col-lg-12">
			  			<a href="#">The Modern Village project in Basra is been initiated</a><br>
			  			<strong>12 Aug 2012</strong><br>
			  			<small>The Project is in the process of delivery to the Ministry of Agriculture.</small>
			  		</div>
			  		<hr>
			  		<div class="new-cont col-lg-12">
			  			<a href="#">The completion of the Bazargan Crude Oil Depots</a><br>
			  			<strong>12 Aug 2012</strong><br>
			  			<small>The Project is in the process of delivery to the Ministry of Agriculture.</small>
			  		</div>
			  		<hr>
			  		<div class="new-cont col-lg-12">
			  			<a href="#">Al Jadiriyah Hotel will be launched at begining of July</a><br>
			  			<strong>12 Aug 2012</strong><br>
			  			<small>The Project is in the process of delivery to the Ministry of Agriculture.</small>
			  		</div>
			  		
			  	</div>

			  </div>
			  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
			  	<div class="col-lg-12 photo">
			  		<div class="row">
			  			<label for="">Select Album</label>
			  			<select name="" id="">
			  				<option value="">1</option>
			  				<option value="">2</option>
			  				<option value="">3</option>
			  				<option value="">4</option>
			  			</select>
			  		</div>
			  		<div class="col-lg-12">
			  			<div class="row">
			  			<div class="col-lg-4">
			  				<img src="{{url('/')}}/img/matthew-ronder-seid-YMMCvPn05qY-unsplash.jpg" alt="">
			  			</div>
			  			<div class="col-lg-4">
			  				<img src="{{url('/')}}/img/matthew-ronder-seid-YMMCvPn05qY-unsplash.jpg" alt="">
			  			</div>

                        <div class="col-lg-4">
			  				<img src="{{url('/')}}/img/matthew-ronder-seid-YMMCvPn05qY-unsplash.jpg" alt="">
			  			</div>

                        <div class="col-lg-4">
			  				<img src="{{url('/')}}/img/matthew-ronder-seid-YMMCvPn05qY-unsplash.jpg" alt="">
			  			</div>
                      </div>
			  		</div>
			  	</div>
			  </div>
			  
			  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
			  	<h3>Downloads</h3>
			  	<hr>
			  	<div class="bdf-card col-lg-12">
			  		<h6>Brouchers</h6>
			  		<iframe src="{{url('/')}}/img/EH Brochure 2020 - 2 - A4s3.pdf#toolbar=1" ></iframe>
			  		<iframe src="{{url('/')}}/img/EH Brochure 2020 - 2 - A4s3.pdf#toolbar=1" ></iframe>
			  		<iframe src="{{url('/')}}/img/EH Brochure 2020 - 2 - A4s3.pdf#toolbar=1" ></iframe>
			  	</div>
			  </div>
			</div>
		</div>
	</div>
	</div>
</div>



@endsection