@extends('frontend.base.base')
@section('content')
	<section class="page-header">
	<div class="container">
	 <a href="javascript:window.print()" class="print">PRINT PAGE <img src="{{asset('assets/images/icon-print.png')}}" alt="Image"></a>
		 <ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="#">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Corpration</a></li>
			<li class="breadcrumb-item active" aria-current="page">News</li>
		  </ol>
		  <h2>NEWS</h2>
		  <p>As the person who owns the legal rights to intellectual property, an author.</p>
	</div>
	<!-- end container -->
</section>
<!-- end page-header -->
  <section class="blog">
    <div class="container">
      <div class="row justify-content-center">
       <div class="col-md-5 col-12">
          <aside class="sidebar pull-left">
            <div class="widget categories wow fadeIn">
              <h4 class="widget-title">Categories</h4>
              <ul>
                <li class="active"><a href="#">BUSINESS</a></li>
                <li><a href="#">INVESTMENT</a></li>
                <li><a href="#">ACCOUNTING</a></li>
                <li><a href="#">SERVICES</a></li>
                <li><a href="#">TAXES & TERMS</a></li>
              </ul>
              <!-- end side-menu --> 
            </div>
            <!-- end widget -->
            <div class="widget tags wow fadeIn">
              <h4 class="widget-title">Popular Tags</h4>
              <ul>
                <li><a href="#">Money</a></li>
                <li><a href="#">Investments</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Stocks</a></li>
                <li><a href="#">Idea</a></li>
                <li><a href="#">Employee</a></li>
                <li><a href="#">Solutions</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Taxes</a></li>
                <li><a href="#">Profite</a></li>
                <li><a href="#">Industry</a></li>
              </ul>
            </div>
            <!-- end widget -->
            <div class="widget gallery wow fadeIn">
              <h4 class="widget-title">Gallery</h4>
              <ul>
                <li><a href="{{asset('assets/images/image04.jpg')}}" data-fancybox="gallery"><img src="{{asset('assets/images/image04.jpg')}}" alt="Image"></a></li>
                <li><a href="{{asset('assets/images/image05.jpg')}}" data-fancybox="gallery"><img src="{{asset('assets/images/image05.jpg')}}" alt="Image"></a></li>
                <li><a href="{{asset('assets/images/image06.jpg')}}" data-fancybox="gallery"><img src="{{asset('assets/images/image06.jpg')}}" alt="Image"></a></li>
                <li><a href="{{asset('assets/images/image07.jpg')}}" data-fancybox="gallery"><img src="{{asset('assets/images/image07.jpg')}}" alt="Image"></a></li>
                <li><a href="{{asset('assets/images/image08.jpg')}}" data-fancybox="gallery"><img src="{{asset('assets/images/image08.jpg')}}" alt="Image"></a></li>
                <li><a href="{{asset('assets/images/image09.jpg')}} " data-fancybox="gallery"><img src="{{asset('assets/images/image09.jpg')}}" alt="Image"></a></li>
              </ul>
              <!-- end gallery --> 
            </div>
            <!-- end widget -->
            <div class="widget download-box wow fadeIn">
              <i class="fa fa-file-image-o"></i> <a href="#">DOWNLOAD</a> <small>DIGITAL BROCHURE</small> 
            </div>
            <!-- end widget --> 
          </aside>
          <!-- end side-bar --> 
        </div>
        <!-- end col-5 --> 
        <div class="col-md-7 col-12">
         <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="{{asset('assets/images/news01.jpg')}}" alt="Image"></figure>
         	<div class="post-content">
         		<span>Business, Tips, Account</span>
          <h4>How to develope item for themeforest</h4>
          <small>February 21,2018</small>
          <p>Legally recognized as the only person who is authorized to copy their work, or grant permission to others who want to copy it for various purposes. In any case, the legal side of copyrights can be complex,</p>
          <a href="/news_detail"><img src="{{asset('assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
         	</div>
         	<!-- end post-content -->
         </div>
         <!-- end post -->
          <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="{{asset('assets/images/news02.jpg')}}" alt="Image"></figure>
         	<div class="post-content">
         		<span>Business, Tips, Account</span>
          <h4>How to develope item for themeforest</h4>
          <small>February 21,2018</small>
          <p>Legally recognized as the only person who is authorized to copy their work, or grant permission to others who want to copy it for various purposes. In any case, the legal side of copyrights can be complex,</p>
          <a href="/news_detail"><img src="{{asset('assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
         	</div>
         	<!-- end post-content -->
         </div>
         <!-- end post -->
          <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="{{asset('assets/images/news03.jpg')}}" alt="Image"></figure>
         	<div class="post-content">
         		<span>Business, Tips, Account</span>
          <h4>How to develope item for themeforest</h4>
          <small>February 21,2018</small>
          <p>Legally recognized as the only person who is authorized to copy their work, or grant permission to others who want to copy it for various purposes. In any case, the legal side of copyrights can be complex,</p>
          <a href="/news_detail"><img src="{{asset('assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
         	</div>
         	<!-- end post-content -->
         </div>
         <!-- end post -->
          <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="{{asset('assets/images/news04.jpg')}}" alt="Image"></figure>
         	<div class="post-content">
         		<span>Business, Tips, Account</span>
          <h4>How to develope item for themeforest</h4>
          <small>February 21,2018</small>
          <p>Legally recognized as the only person who is authorized to copy their work, or grant permission to others who want to copy it for various purposes. In any case, the legal side of copyrights can be complex,</p>
          <a href="news-single.html"><img src="{{asset('assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
         	</div>
         	<!-- end post-content -->
         </div>
         <!-- end post -->
          <div class="post wow fadeIn">
         	<figure class="post-image"> <img src="{{asset('assets/images/news05.jpg')}}" alt="Image"></figure>
         	<div class="post-content">
         		<span>Business, Tips, Account</span>
          <h4>How to develope item for themeforest</h4>
          <small>February 21,2018</small>
          <p>Legally recognized as the only person who is authorized to copy their work, or grant permission to others who want to copy it for various purposes. In any case, the legal side of copyrights can be complex,</p>
          <a href="news-single.html"><img src="{{asset('assets/images/icon-right-arrow.svg')}}" alt="Image"></a>
         	</div>
         	<!-- end post-content -->
         </div>
         <!-- end post -->
          <ul class="pagination wow fadeIn">
    <li class="page-item">
      <a class="page-link" href="#" tabindex="-1">PREV</a>
    </li>
    <li class="page-item">
      <a class="page-link" href="#">NEXT</a>
    </li>
  </ul>
        </div>
        <!-- end col-7 -->
      </div>
      <!-- end row --> 
    </div>
    <!-- end container --> 
  </section>
  <!-- end blog --> 
@endsection