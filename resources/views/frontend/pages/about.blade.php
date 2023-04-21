@extends('frontend.layouts.master')
@section('title', 'JEA :: About')

@section('content')

<!-- /banner_bottom_agile_info -->
<div class="banner_bottom_agile_info">
    <div class="container mt-5">
        <!---728x90--->
        <div class="agile_ab_w3ls_info row">
            <div class="col-md-6 ab_pic_w3ls">
                <img src="{{ asset('frontend/images/jeas.jpg') }}" alt=" " class="img-responsive" />
            </div>
            <div class="col-md-6 ab_pic_w3ls_text_info">
                <h5>Joypurhat Engineer's <span> Association</span> </h5>
                <p>Joypurhat Engineers Association - A single, uninterrupted and well-organized platform for all
                    Joypurhat Engineers.</p>
                <p> Where socially and culturally responsible activities are conducted for the purpose of building a
                    better Joypurhat. It is completely apolitical and non-profit. The activities are being carried out
                    in a well-planned and well-organized manner, respecting the views of the competent admin panel and
                    all the members. Self-Join the Joypurhat Engineers Association and add your familiar engineer
                    siblings. We want your help and cooperation.</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<div  class="mt-4 p-4 advisor-bg" >
    <center class="justify-content-center d-flex">
            <h2 class="text-center text-bold text-dark" style="font-family: 'Kanit', sans-serif;" >Advisor</h4>
      
</center>

    <section class="mt-4 container">
    <div class="row m-0 p-0">
    @foreach ( $advisors as $advisor)

  
        <div class="col-md-3 mb-3 advisor_new">
        <div class="card">
  <img class="card-img-top" src="{{asset($advisor->image)}}" alt="Card image cap">
  <div class="card-body ad-new m-0 px-2 p-0">
    <h5 class="card-title text-dark ts m-0 p-0">{{ $advisor->name }}</h5>
    <p class="text-lead text-dark m-0 p-0">{{ $advisor->designation }}</p>
    <p class="text-lead text-dark m-0 p-0">{{ $advisor->job }}</p>
    <p class="text-lead text-dark limit m-0 p-0">at {{$advisor->job_location}}</p>
  </div>
</div>
        </div>
        @endforeach
    </div>


</section>
</div>

@endsection
