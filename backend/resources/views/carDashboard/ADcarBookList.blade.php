<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Pending Booking</title>
		<link rel="stylesheet" href="{{asset('css/car-style.css')}}">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
	    <link rel="stylesheet" href="{{asset('css/car-card.css')}}">
	    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,400,500,600" rel="stylesheet" type="text/css">
	</head>
	<body>

		<!--wrapper start-->
		<div class="wrapper">
			@include ('carDashboard.sidebar')

			<!--main container start-->
			<div class="main-container">
				<!--main-section start-->

				<h1 style="color: #2e4154;"> <center> <b> Pending Booking </b> </center> </h1>
				<br>

   				<table id="table" border="1">
					<tr>
						<th> Id </th>
						<th> User Id</th>
						<th> Car Id </th>
						<th> Departure Location </th>
						<th> Arrival Location </th>
						<th> Departure Date </th>
						<th>  Arrival Date </th>
						<th> Action </th>
					</tr>
					
				<!--@foreach($ADcarBookList as $carbook)-->
					<tr>
						<td> {{$carbook->id}}  </td>
						<td>  {{$carbook->user_id}}	</td>
						<td> {{$carbook->car_id}}  </td>
						<td>  {{$carbook->fromloc}}	</td>
						<td>  {{$carbook->toloc}}	</td>
						<td>  {{$carbook->fromdate}}	 </td>
						<td>  {{$carbook->todate}}	 </td>
						<td><a href="{{route('car.bookingapprove', [$carbook->id])}}"><i class="fa fa-check-circle" aria-hidden="true"></i></a> 
                        <a href="{{route('car.bookingdecline', [$carbook->id])}}"><i class="fa fa-ban" aria-hidden="true"></i></a></td>
				<!--@endforeach-->

				</table>	

			<!--main-section end-->
			<!--main container end-->
		</div>
		<!--wrapper end-->
	</body>
</html>
