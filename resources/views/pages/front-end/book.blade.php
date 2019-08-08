@extends('pages/front-end/template/template2')
@section('css')
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/tagsinput/css/bootstrap-tagsinput.css') }}">
@endsection
@section('content')
<style>
body{
	background-image: url("{{URL::to('/img/1920x1080/01.jpg')}}");
      background-position: center center;
      background-repeat:  no-repeat;
      background-attachment: fixed;
      background-size:  cover;
}
textarea{
	resize:none;
}
input[type="number"]{
      width:200px;
    }
</style>
<div class="container">
		<Br>
		<Br>
		<Br>
		<Br>
		<Br>
		<div class="row well" id="content">
			<form action="{{ route('event.book', ['id' => $event]) }}" method="POST">
				{{csrf_field()}}
	        <div class="col-md-2">
	       @if (Session::has('message'))
			   <div class="alert alert-info">{{ Session::get('message') }}</div>
			@endif
				<div id="info1">
					<div class="form-group">
						<label>Total</label>
						<p><b>Rp <span id="total" style="color:black;">0</span></b></p>
						<label>Full Name</label>
						<input type="text" name="name" class="form-control" required="">
					</div>
					<label>Phone Number</label>
						<input type="text" name="phone_no" class="form-control" required="">
						<label>Participant Name</label>
						<div class="participant">
							<select multiple name="participant_name[]" data-role="tagsinput" class="form-control" required="">
						</div>
				</div>
			</div>

				<div class="col-md-4">
					<div id="group1">
						<div class="form-group">
							<label>Quantity</label>
							<input id="qty" type="number" class="form-control" name="qty" required="" min="1" max="{{($event->eventInformation->group_size - $totalBook)}}" placeholder="input how many tickets" />
						</div>
					</div>
					<div id="group_1">
						<div class="form-group">
							<label>Email</label>
							<input type="email" name="email" class="form-control" required="">
						</div>
						<div class="form-group">
							<label>Address</label>
							<textarea name="address" class="form-control" required=""></textarea>
						</div>
					</div>
				</div>
				<div class="col-md-4">
				<div id="bookBtn">
					</div>
					<div id="Btns">
						<button class="btn btn-success btn-block btn-lg" type="submit">Submit</button>
					</div>
				</div>
				
			</form>															
		</div>

		<div class="row well">
				<div class="col-md-4" id="suite1">
					<div>
						<h3>{{$event->name}}</h3>
						<p>Price : IDR <span id="ticket_price" style="color:black">{{$event->price}}</span></p>
						<p>Inclusion: </p>
						<p>{{$event->description}}</p>
					</div>
				</div>
				<div class="col-md-4" id="suite2">
					<h3>Verified</h3>
					<img src="{{ asset($event->image) }}" alt="image here" width="350px" height="400px">
				</div>
		</div>
	        

	        
	 </div>
@endsection
@section('scripts')
<script src="{{ asset('vendor/tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">

qty = $('#qty');

function calc(){
	var total = input * $('#ticket_price').text();
	$('#total').text(total.toLocaleString());
}

function calcMax(){
	var total = max * $('#ticket_price').text();
	$('#total').text(total.toLocaleString());
}
qty.on('keyup input', function(){
	max = $(this).attr('max');
	input = parseFloat($(this).val());
	console.log(input)
	if (isNaN(input)){
		$('#total').text('0');
	}else{
		if(input <= max){
			calc();
		}else{
			calcMax();
			$(this).val(max);
		}
	}
});

qty.keypress(function(e){ 
   if (this.value.length == 0 && e.which == 48 ){
      e.preventDefault();
   }
});

qty.keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
         // Allow: Ctrl/cmd+A
        (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
         // Allow: Ctrl/cmd+C
        (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
         // Allow: Ctrl/cmd+X
        (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
         // Allow: Ctrl/cmd+R
        (e.keyCode == 82 && (e.ctrlKey === true || e.metaKey === true)) ||
         // Allow: home, end, left, right       // Allow F5
        (e.keyCode >= 35 && e.keyCode <= 39) || e.keyCode == 116) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});
</script>
@endsection

