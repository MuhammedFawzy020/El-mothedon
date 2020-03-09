@extends('layouts.app')
@section('content')
<div class="col-lg-12 cover" style="background-color: white">
	<div class="container">
		<div class="img-cover col-lg-12">
			<img src="{{url('/')}}/img/b6fbe37d-8b57-4824-a87b-975f3ce28497.jpg" alt="">
		</div>
	</div>
</div>

<div class="col-lg-12 content" style="background-color: white;padding-bottom: 20px;">
	<div class="container">
		<h3 style="text-align: center;border-bottom: 1px solid #303952;padding-bottom: 10px;">Contact Us</h3>
		<div class="row">
			<div class="col-lg-6 contact-form">
				<h3>Contact US ! </h3>
				<small>Say Hello! Or whatever you want!</small><br>
				<br>
				<i class="fas fa-envelope" style="font-size: 50px;color:#303952 "></i>
                <hr>
				<form>
					<div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">First Name</label>
					      <input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Last Name</label>
					      <input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
					    </div>
					  </div>
					  <div class="form-row">
					    <div class="form-group col-md-6">
					      <label for="inputEmail4">Email</label>
					      <input type="email" class="form-control" id="inputEmail4" placeholder="Enter your Email">
					    </div>
					    <div class="form-group col-md-6">
					      <label for="inputPassword4">Subject</label>
					      <input type="text" class="form-control" id="inputPassword4" placeholder="Enter subject">
					    </div>
					  </div>
					    <div class="form-row">
					    <div class="form-group col-md-12">
					      <label for="inputEmail4">Message</label>
					      <textarea class="col-lg-12" rows="5"></textarea>
					    </div>
					    <button class="btn btn-primary col-lg-4" style="margin: auto;background-color: #303952;"> Submit</button>
				</form>
			</div>
		</div>
		<div class="contact-info col-lg-6">
				<div class="col-lg-12">
					<h4>GET IN TOUCH</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur eget leo at velit imperdiet varius. In eu ipsum vitae velit congue iaculis vitae at risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
				<hr>
				<div class="col-lg-12">
					<h4>The Office </h4>
					<ul>
						<li><i class="fas fa-map-marker-alt" style="font-size:20px;
                         color: #59678c;"></i> <span >Address :</span>  22 Maryotya Faisel </li>
						<li><i class="fas fa-phone-square-alt"style="font-size:20px;
                         color: #59678c;"></i><span> Phone :</span> +02222222222222 </li>
						<li><i class="fas fa-envelope" style="font-size:20px;
                         color: #59678c;"></i><span>Email :</span> Smaart-geeks.com</li>
					</ul>
				</div>
				<hr>
				<div class="col-lg-12 hour">
					<h4>BUSINESS HOURS</h4>
					<ul>
						<li><i class="far fa-clock" style="font-size:18px;
                         color: #59678c;"></i><p>Monday - Friday 9am to 5pm</p></li>
						<li><i class="far fa-clock" style="font-size:18px;
                         color: #59678c;"></i><p>Monday - Friday 9am to 5pm</p></li>
						<li><i class="far fa-clock" style="font-size:18px;
                         color: #59678c;"></i><p>Monday - Friday 9am to 5pm</p></li>

					</ul>
				</div>
			</div>
	</div>
</div>
<div class="col-lg-12" style="padding-right: 0px;padding-left: 0px;height: 500px;">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3455.3833203109266!2d31.141444515076866!3d29.997147927760405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1458459c48ddf57b%3A0xa11d34d02f0ff6e2!2sSmart%20Geeks%20I%20Marketing%20Agency!5e0!3m2!1sen!2seg!4v1583412583424!5m2!1sen!2seg" frameborder="0" style="border:0;width: 100%;height: 100%" allowfullscreen=""></iframe>
</div>


@endsection