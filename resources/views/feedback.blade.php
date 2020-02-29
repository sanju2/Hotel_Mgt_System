<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	@extends('layouts.head')
	@section('title' , "Feedback Page")


	<!-- Styles -->
	<style>
		html {
			background-image: url("{{asset('img/feedback.jpg')}}");
			background-size: cover;
			height: 100%;
		}

		#feedback-page {
			text-align: center;
		}

		#form-main {
			width: 100%;
			float: left;
			padding-top: 0px;
		}

		#form-div {
			background-color: rgba(72, 72, 72, 0.4);
			padding-left: 35px;
			padding-right: 35px;
			padding-top: 35px;
			padding-bottom: 50px;
			width: 450px;
			float: left;
			left: 50%;
			position: absolute;
			margin-top: 100px;
			margin-left: -260px;
			-moz-border-radius: 7px;
			-webkit-border-radius: 7px;
		}

		.feedback-input {
			color: #3c3c3c;
			font-family: Helvetica, Arial, sans-serif;
			font-weight: 500;
			font-size: 18px;
			border-radius: 0;
			line-height: 22px;
			background-color: #fbfbfb;
			padding: 13px 13px 13px 54px;
			margin-bottom: 10px;
			width: 100%;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			-ms-box-sizing: border-box;
			box-sizing: border-box;
			border: 3px solid rgba(0, 0, 0, 0);
		}

		.feedback-input:focus {
			background: black;
			box-shadow: 0;
			border: 3px solid #3498db;
			color: #3498db;
			outline: none;
			padding: 13px 13px 13px 54px;
		}

		.focused {
			color: #30aed6;
			border: #30aed6 solid 3px;
		}

		/* Icons ---------------------------------- */
		#name {
			background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
			background-size: 30px 30px;
			background-position: 11px 8px;
			background-repeat: no-repeat;
		}

		#name:focus {
			background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
			background-size: 30px 30px;
			background-position: 8px 5px;
			background-position: 11px 8px;
			background-repeat: no-repeat;
		}

		#email {
			background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
			background-size: 30px 30px;
			background-position: 11px 8px;
			background-repeat: no-repeat;
		}

		#email:focus {
			background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
			background-size: 30px 30px;
			background-position: 11px 8px;
			background-repeat: no-repeat;
		}

		#comment {
			background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
			background-size: 30px 30px;
			background-position: 11px 8px;
			background-repeat: no-repeat;
		}

		textarea {
			width: 100%;
			height: 150px;
			line-height: 150%;
			resize: vertical;
		}

		input:hover,
		textarea:hover,
		input:focus,
		textarea:focus {
			background-color: white;
		}

		#button-blue {
			font-family: 'Montserrat', Arial, Helvetica, sans-serif;
			float: left;
			width: 100%;
			border: #fbfbfb solid 4px;
			cursor: pointer;
			background-color: #3498db;
			color: white;
			font-size: 24px;
			padding-top: 22px;
			padding-bottom: 22px;
			-webkit-transition: all 0.3s;
			-moz-transition: all 0.3s;
			transition: all 0.3s;
			margin-top: -4px;
			font-weight: 700;
		}

		#button-blue:hover {
			background-color: rgba(0, 0, 0, 0);
			color: #0493bd;
		}

		.submit:hover {
			color: #3498db;
		}

		.ease {
			width: 0px;
			height: 74px;
			background-color: #fbfbfb;
			-webkit-transition: .3s ease;
			-moz-transition: .3s ease;
			-o-transition: .3s ease;
			-ms-transition: .3s ease;
			transition: .3s ease;
		}

		.submit:hover .ease {
			width: 100%;
			background-color: white;
		}

		@media only screen and (max-width: 580px) {
			#form-div {
				left: 3%;
				margin-right: 3%;
				width: 88%;
				margin-left: 0;
				padding-left: 3%;
				padding-right: 3%;
			}
		}
	</style>


</head>

<body>

	<div class="container my-container">
		<div class="row my-row">
			<!-- Navigation bar -->
			@extends('layouts.navi')
		</div>
		<div class="row justify-content-between align-items-stretch my-row">

			<div id="form-main">
				<div id="form-div">
					<h3 class="text-center text-danger">{{ Session::get('message')}}</h3>
					<form action="feed" method="post" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label for="exampleFormControlInput1">Enter Your Name</label>
							<input type="text" name="name" class="form-control" id="exampleFormControlInput1">
						</div>
						<div class="form-group">{{ $errors->first('name') }}</div>
						<div class="form-group">
							<label for="exampleFormControlInput1">Enter Your Email</label>
							<input type="email" name="email" class="form-control" id="exampleFormControlInput1">
						</div>
						<div class="form-group">{{ $errors->first('email') }}</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Type your Text here</label>
							<textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
						<div class="form-group">{{ $errors->first('text') }}</div>

						<button type="submit" value="Send" name="send" class="btn btn-primary">Send Here</button>
					</form>


				</div>

			</div>

		</div>
	</div>




	<!--js cdn-->
	@extends('layouts.js')

</body>

</html>