@extends('pages/front-end/template/template2')
@section('title', 'LOKALAJA - EVENT')
<style>
input[type=number],input[type=text]
{
  width:60%;
}
</style>
    @section('content')
    <!--========== PROMO BLOCK ==========-->
        <div class="g-fullheight--md js__parallax-window" style="background: url(/img/1920x1080/02.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-ver-center--md g-padding-y-150--xs g-padding-y-0--md">
                <div class="g-margin-b-60--xs">
                    <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">lokalaja present</h1>
                    <p class="g-font-size-18--xs g-font-size-26--md g-color--white-opacity g-margin-b-0--xs">little more insight on your experience.</p>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->
         <!--========== PAGE CONTENT ==========-->
        <!-- About -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
                <div class="g-bg-color--sky-light">
           <!-- News -->
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img src="{{asset($event->image)}}" alt="Image">
                    </article>
                    <!-- End News -->
                </div>
        </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 g-hor-centered-row__col">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">{{$event->name}}</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-margin-b-25--xs">About Event</h2>
                    <p class="g-font-size-18--sm">{{$event->description}}</p>
                </div>
            </div>

            <div class="row g-hor-centered-row--md g-row-col--5">
                <div class="col-sm-3 col-xs-6 col-sm-push-6 g-hor-centered-row__col">
                    <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".2s">
                        <img class="img-responsive" src="/img/400x550/02.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 col-sm-push-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                    <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="/img/400x500/06.jpg" alt="Image">
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-5 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-right--md">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">about your local</p>
                    <p class="g-font-size-18--sm">{{$event->eventInformation->about}}</p>
                </div>
            </div>
        </div>
        <!-- End About -->
        <!--========== PAGE CONTENT ==========-->
        <!-- FA Questions Text -->
        <div id="js__scroll-to-section" class="g-container--md g-padding-y-80--xs">
            <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs">More about your experience</h2>
            <div class="row g-margin-b-50--xs">
                <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--sm">
                   <h4 style="margin-left: 2.5%">Experience Details</h4>
                  <div class="hline"></div>
                  <p style="margin-left: 2.5%"><b>Date &amp; time:</b>{{date('l, jS F Y', strtotime($event->eventInformation->date))}} &amp; {{date('h:i A', strtotime($event->eventInformation->time))}}</p>
                   <p style="margin-left: 2.5%"><b>Our itinerary:</b> <Br><ol>
                                          @foreach($event->notes as $note)
                                          <li style="margin-left: 2.5%">{{$note->note}}</li>
                                          @endforeach
                                      </ol></p>
                    <p style="margin-left: 2.5%"><b>We provide:</b> <Br><ol>
                                          @foreach($event->facilities as $facility)
                                          <li style="margin-left: 2.5%">{{$facility->facility}}</li>
                                          @endforeach
                                  </ol></p>
                </div>
                <div class="col-sm-6">
                   <p style="margin-left: 2.5%"><b>Group Size:</b> {{$event->eventInformation->group_size}}</p>
        <p style="margin-left: 2.5%"><b>Price:</b> IDR {{number_format($event->price)}}</p>
        <p style="margin-left: 2.5%"><b>status event:</b>@if(($event->eventInformation->group_size - $totalBook) <= 0)
                          Sold out!
                          @else
                          {{($event->eventInformation->group_size - $totalBook)}} left
                          @endif 
        </p>
        <p style="margin-left: 2.5%"><b>More info?</b> <a href="http://line.me/ti/p/%40oee1717y"><img src="/img/line.png" style="width:50px;height:50px;"></a></p>
        <p style="margin-left: 2.5%">@if(($event->eventInformation->group_size - $totalBook) <= 0)
            Sold out
                              @else
                              @if(Auth::check())
                              <a style="margin-left: 2.5%" class="btn btn-success" data-toggle="modal" data-target="#ticket-details">PROCEED</a>
                              @else
                              <a style="margin-left: 2.5%" class="btn btn-success" href="{{ route('guest.book', ['id' => $event->id]) }}">Book Now</a>
                              @endif
                              @endif    </p>
                               @if($errors->any())
              <h4>{{$errors->first()}}</h4>
              @endif
                </div>
            </div>
        </div>
        <div class="modal right fade" id="ticket-details" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <img src="/images/icons/cancel.png">
              </button>
              <h4 class="modal-title">Your Tickets</h4>
            </div>
            <div class="modal-body">
                  <div class="contactForm"> 
                      <h3>Share your contact Details</h3>
                      <form method="POST" action="{{ route('event.book', ['id' => $event]) }}" >
                        {{csrf_field()}}
                        <div class="form-group">
                          <input type="number" name="qty" id="qty" min="0" max="{{($event->eventInformation->group_size - $totalBook)}}" oninput="calc()" placeholder="how many ticket?">
                          <span class="ticket-count"></span>
                        </div>
                        <div class="form-group">
                          <input type="text" name="participant_name" placeholder="Enter your Name">
                        </div>
                  <button class="btn btn-success" type="submit">book</button>
                      </form>
                  </div>
              <div class="cart-information">
                    <div class="ticket-type"></div>
                    <ul>
                          <li>Price: Rp.<span id="ticket_price">{{$event->price}}</span></li>
                          <hr>
                          <li>Total: Rp.<span id="total">0</span></li>
                </ul>
                  </div>
              
              
            </div>
          </div>
        </div>
</div>
        @if(count($events) > 0)
         <div class="container g-padding-y-80--xs g-padding-y-75--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Our latest experience</p>
            </div>
            <div class="row">
                    <div class="sliderproduct">
                    @foreach($events as $eventt)
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">                    
                    <article>
                        <a href="{{ route('event.detail', ['id' => $eventt->id]) }}"><img class="img-responsive" src="/{{$eventt->image}}" alt="Image" ></a>
                    </article>                  
                    </div>
                @endforeach
                </div>
                            
            </div>
        </div>
                            @endif 

        <!-- End FA Questions Text -->
     <script type="text/javascript">$(document).ready(function(){
          $('.sliderproduct').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 1500,
            variableHeight: true,
                            });
                                            });
        </script>
    <script type="text/javascript">
      function calc() 
    {
      var price = document.getElementById("ticket_price").innerHTML;
      var noTickets = document.getElementById("qty").value;
      var total = parseFloat(price) * noTickets
      if (!isNaN(total))
        document.getElementById("total").innerHTML = total
    }
    </script>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/js/bootstrap.min.js"></script>
   {{--  <script src="/js/allscript.js"></script> --}}
   <script type="text/javascript">
//Ticket count and price minus and plus
    $('.btn-number').click(function(e){
    e.preventDefault();
    /* ticket count */
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
      
  	/* ticket price */
  	var ticketPrice = $(this).parents('.ticketBox').attr('data-ticket-price');
  	/* ticket type */
  	var ticketType = $(this).parents('.ticketBox').find('.ticket-name').html();
  	var total;
    var currentVal = parseInt(input.val());
    var qty = parseInt($('#quantity').val())

    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
				
				console.log(input.val());
				total = ticketPrice * input.val();
				console.log(ticketPrice);
				activeTicket(this, input.val(), ticketPrice, total, ticketType);
            } 
            // if(parseInt(input.val()) == input.attr('min')) {
            //     $(this).attr('disabled', true);
            // }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
				
				console.log(input.val());
				total = ticketPrice * input.val();
				console.log(ticketPrice);
				activeTicket(this, input.val(), ticketPrice, total, ticketType);
        var quantity = currentVal;
        ('qty').val() =  quantity;
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
    });
    $('.input-number').focusin(function(){
       $(this).data('oldValue', $(this).val());
    });
    $('.input-number').change(function() {

        minValue =  parseInt($(this).attr('min'));
        maxValue =  parseInt($(this).attr('max'));
        valueCurrent = parseInt($(this).val());
        name = $(this).attr('name');
        if(valueCurrent >= minValue) {
            $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the minimum value was reached');
            $(this).val($(this).data('oldValue'));
        }
        if(valueCurrent <= maxValue) {
            $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
        } else {
            alert('Sorry, the maximum value was reached');
            $(this).val($(this).data('oldValue'));
        }
    });

    function activeTicket(target, inputValue, ticketPrice, total, ticketType) {
    	if(inputValue > 0) {
    		$('#buyTicket .ticketBox').addClass('inActiveTicket');
    		$(target).parents('.ticketBox').removeClass('inActiveTicket').addClass('activeTicket');
    		$('.cart .btn').removeClass('disabled');
    		$('.ticket-type').html(ticketType);
    		$('.ticket-count').html(inputValue);
    		$('.ticket-amount').html(ticketPrice);
    		$('.total-amount').html(total);
    	} else {
    		$('#buyTicket .ticketBox').removeClass('inActiveTicket');
    		$(target).parents('.ticketBox').removeClass('activeTicket inActiveTicket');
    		$('.cart .btn').addClass('disabled');
    		$('.ticket-type').html('');
    		$('.ticket-count').html(inputValue);
    		$('.ticket-amount').html(ticketPrice);
    		$('.total-amount').html(total);
    	}
    }
   </script>
  @endsection

