@extends('pages/front-end/template/template2')
@section('title', 'LOKALAJA - EVENT')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   
    <!-- Bootstrap -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/css/custom.css" rel="stylesheet">
    
    <!-- fonts -->
    <link href='http://fonts.googleapis.com/css?family=Nixie+One' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,900" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    </style>	
  </head>
@section('content')
    
    <div class="" style="width:100%;background: url('/img/1920x1080/01.jpg');">
		<div class="row">
            <div class="col-sm-12 col-md-5 right-wrapper">

            	<div class="event-ticket-wrapper">
                    
                    <div class="event-tab">       
                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active" id="buyTicket">
                    	<div class="row">
                        <br>
                        	<div class="col-md-12" style="background-color: white">
                            	<div class="ticketBox" data-ticket-price="{{$event->price}}">
                                     <div class="ticket-description">
                                     <h3>
                                     No Pembayaran: <strong>{{$booking->no}}</strong>
									                    </h3>
                                      </div>
                                      <div class="ticket-description">
                                      <h3>Total Pembayaran</h3><h5>
                                      IDR: {{number_format($booking->total)}}<br>
                                      Status Pembayaran: {{ Lang::choice('messages.bookingstatus', $booking->status) }}</h5>
                                      </div>
                                      <div class="ticket-description">
                                      <h3>Booking Details<hr>
                                      Total price : IDR {{number_format($booking->bookDetail->subtotal)}}<hr>
                                      Payment Code : {{$booking->unique_number}}<hr>
                                      Total Payment : IDR {{number_format($booking->total)}}<hr>
                                      Qty: {{$booking->bookDetail->qty}}</h3>
                                      </div>
                                      <div class="ticket-description">
                                      	<h3>
                                      	Participant<Br><ol>
										@foreach($booking->bookParticipants as $participant)
										<li style="text-transform: capitalize;">{{$participant->participant_name}}</li>
										@endforeach
										</ol>
                                      </h3>
                                      </div>
                                     
                                     
                                </div>
                                <div class="ticket-description">
                                 <h4> 
                          @if($booking->bookConfirmation->confirm != 1)
              <a onclick="event.preventDefault();document.getElementById('confirmation-form').submit();" class="btn btn-submit">Paid</a>
              <form action="{{ route('payment.confirm', ['id' => $booking]) }}" method="POST" id="confirmation-form">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
              </form>
              @endif</h4>
            </div>
                            </div>
                        
                        </div>
                    </div>
                    </div>

                {{-- <div class="row">
                    <div class="col-xs-6">
                        <h4> 
                        	@if($booking->bookConfirmation->confirm != 1)
							<a onclick="event.preventDefault();document.getElementById('confirmation-form').submit();" class="btn btn-submit">Paid</a>
							<form action="{{ route('payment.confirm', ['id' => $booking]) }}" method="POST" id="confirmation-form">
							  <input type="hidden" name="_token" value="{{csrf_token()}}">
							</form>
							@endif</h4>
                    </div>
                   
                </div> --}}
               </div>
               </div>
          
        </div>
    </div>

    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
   {{--  <script src="/js/allscript.js"></script> --}}
                                                                       
  </body>
  @endsection
</html>
