@extends('frontend.base.base')
@section('content')	
	<section class="page-header">
	<div class="container">
	 <a href="javascript:window.print()" class="print">PRINT PAGE <img src="{{asset('assets/images/icon-print.png')}}" alt="Image"></a>
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Corpration</a></li>
			<li class="breadcrumb-item active" aria-current="page">Showcases</li>
		  </ol>
		  <h2>SHOWCASES</h2>
		  <p>As the person who owns the legal rights to intellectual property, an author.</p>
	</div>
	<!-- end container -->
</section>
<!-- end page-header -->
<section class="showcases">
  <div class="container">
    <div class="row">
      <div class="col-12 wow fadeIn">
        <div class="section-title"> <span>01</span>
          <h2>showcases</h2>
          <h6>The smaller male cones release pollen, <br>which fertilizes the female </h6>
        </div>
        <!-- end section-title --> 
        <ol class="showcase-filter">
	<li><a href="javascript:void(0);" data-filter="*" class="current">ALL</a></li>
	<li><a href="javascript:void(0);" data-filter=".one">BUSINESS</a></li>
	<li><a href="javascript:void(0);" data-filter=".two">DEVELOPMENT</a></li>
	<li><a href="javascript:void(0);" data-filter=".three">STRATEGY</a></li>
	<li><a href="javascript:void(0);" data-filter=".four">TRAINING</a></li>
</ol>
      </div>
      <!-- end col-12 -->
      <div class="col-12">
        <ul class="masonry">
          <li class="wow fadeIn one">
            <figure><a href="{{asset('assets/images/image10.jpg')}}" data-fancybox><img src="{{asset('assets/images/image10.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>REDWOOD INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
          <li class="wow fadeIn two">
            <figure><a href="{{asset('assets/images/image12.jpg')}}" data-fancybox><img src="{{asset('assets/images/image12.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>MOUNTAIN INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
          <li class="double wow fadeIn three">
            <figure><a href="{{asset('assets/images/image13.jpg')}}" data-fancybox><img src="{{asset('assets/images/image13.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>POLLEN INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
          <li class="double wow fadeIn four">
            <figure><a href="{{asset('assets/images/image11.jpg')}}" data-fancybox><img src="{{asset('assets/images/image11.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>SEEDS INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
          <li class="double wow fadeIn one">
            <figure><a href="{{asset('assets/images/image15.jpg')}}" data-fancybox><img src="{{asset('assets/images/image15.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>SEEDS INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
           <li class="double wow fadeIn two">
            <figure><a href="{{asset('assets/images/image14.jpg')}}" data-fancybox><img src="{{asset('assets/images/image14.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>POLLEN INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
          <li class="wow fadeIn three">
            <figure><a href="{{asset('assets/images/image16.jpg')}}" data-fancybox><img src="{{asset('assets/images/image16.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>REDWOOD INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
          <li class="wow fadeIn four">
            <figure><a href="{{asset('assets/images/image17.jpg')}}" data-fancybox><img src="{{asset('assets/images/image17.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>MOUNTAIN INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
           <li class="wow fadeIn phone">
            <figure><a href="{{asset('assets/images/image18.jpg')}}" data-fancybox><img src="{{asset('assets/images/image18.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>MOUNTAIN INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
          <li class="double wow fadeIn two">
            <figure><a href="{{asset('assets/images/image19.jpg')}}" data-fancybox><img src="{{asset('assets/images/image19.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>SEEDS INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
          <li class="wow fadeIn three">
            <figure><a href="{{asset('assets/images/image20.jpg')}}" data-fancybox><img src="{{asset('assets/images/image20.jpg')}}" alt="Image"></a>
              <figcaption>
                <h6>MOUNTAIN INC</h6>
                <small>Business Development</small></figcaption>
            </figure>
          </li>
        </ul>
        </div>
      <!-- end col-12 --> 
    </div>
    <!-- end row --> 
  </div>
  <!-- end container --> 
</section>
<!-- end showcases -->
@endsection