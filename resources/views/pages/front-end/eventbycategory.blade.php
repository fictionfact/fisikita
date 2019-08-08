@extends('pages/front-end/template/template2')

@section('content')
<!--========== PROMO BLOCK ==========-->
        <div class="g-fullheight--md js__parallax-window" style="background: url(/img/1920x1080/02.jpg) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-ver-center--md g-padding-y-150--xs g-padding-y-0--md">
                <div class="g-margin-b-60--xs">
                    <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Our fashion experience</h1>
                    <p class="g-font-size-18--xs g-font-size-26--md g-color--white-opacity g-margin-b-0--xs">where you unless your passion on fashion.</p>
                </div>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->
        <!-- News -->
        <div class="g-bg-color--sky-light">
           <!-- News -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="g-text-center--xs g-margin-b-80--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Fashion</p>
            </div>
            <div class="row">
            @if(count($events) > 0)
            @foreach($events as $event)
                <div class="col-sm-4 g-margin-b-30--xs g-margin-b-0--md">
                    <!-- News -->
                    <article>
                        <img class="img-responsive" src="/{{$event->image}}" alt="Image" style="width:970px;height:450px;">
                        <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-text-center--xs g-padding-x-40--xs g-padding-y-40--xs">
                            <h3 class="g-font-size-22--xs g-letter-spacing--1"><a href="{{ route('event.detail', ['id' => $event->id]) }}">{{$event->name}}</a></h3>
                            <p>{{$event->description}}</p>
                        </div>
                    </article>
                    <!-- End News -->
                </div>
            @endforeach
            @endif  
                </div>
                <h2 class="g-font-size-32--xs g-font-size-36--md">{{$events->links()}}</h2>
            </div>
        </div>
        <!-- End News -->

        <!-- Subscribe -->
        <div class="g-bg-color--dark-light">
            <div class="g-container--sm g-text-center--xs g-padding-y-80--xs g-padding-y-125--sm">
                <div class="g-margin-b-60--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Subscribe</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--sm g-letter-spacing--1 g-color--white">Join Over 1000+ People</h2>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <form class="input-group">
                            <input type="email" class="form-control s-form-v1__input g-radius--left-50" name="email" placeholder="Enter your email">
                            <span class="input-group-btn">
                                <button type="submit" class="s-btn s-btn-icon--md s-btn-icon--white-brd s-btn--white-brd g-radius--right-50"><i class="ti-arrow-right"></i></button>
                            </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Subscribe -->
        <!--========== END PAGE CONTENT ==========-->
@endsection