@extends('frontend.base.base')
@section('content')
	<section class="page-header">
	<div class="container">
	 <a href="javascript:window.print()" class="print">PRINT PAGE <img src="images/icon-print.png" alt="Image"></a>
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Corpration</a></li>
			<li class="breadcrumb-item active" aria-current="page">Clients</li>
		  </ol>
		  <h2>CLIENTS</h2>
		  <p>As the person who owns the legal rights to intellectual property, an author.</p>
	</div>
	<!-- end container -->
</section>
<!-- end page-header -->
<section class="clients">
	<div class="container">
      <ul>
        <li><figure><img src="{{asset('assets/images/logo01.png')}}" alt="Image"><figcaption>Inc corp</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo02.png')}}" alt="Image"><figcaption>Business</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo03.png')}}" alt="Image"><figcaption>TNWY</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo04.png')}}" alt="Image"><figcaption>Forbes</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo05.png')}}" alt="Image"><figcaption>Dribbble</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo06.png')}}" alt="Image"><figcaption>In Vision</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo07.png')}}" alt="Image"><figcaption>Air Bnb</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo08.png')}}" alt="Image"><figcaption>Google</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo03.png')}}" alt="Image"><figcaption>TNWY</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo04.png')}}" alt="Image"><figcaption>Forbes</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo05.png')}}" alt="Image"><figcaption>Dribbble</figcaption></figure></li>
        <li><figure><img src="{{asset('assets/images/logo06.png')}}" alt="Image"><figcaption>In Vision</figcaption></figure></li>
      </ul>
	</div>
	<!-- end container -->
</section>
<!-- end clients -->
@endsection