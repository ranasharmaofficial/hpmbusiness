@extends('master')
@section('title')Registration Successful - DBT Work @endsection
@section('description')DBT Work Description @endsection
@section('content')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('')}}">Home</a></li>
          <li>Registration Successful</li>
        </ol>
        <h2>Registration Successful</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Registration Successful Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

         

        <div class="row justify-content-center">
            <h3 class="text-center m-0 p-0 text-danger">Registration Successful</h3>
            <div class="col-sm-6">
                <p>&nbsp;</p>
                    <div class="flash-message">
                        @foreach (['danger', 'warning', 'success', 'info'] as $msg)
                            @if (Session::has('alert-' . $msg))
                                <div class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">
                                    {{ Session::get('alert-' . $msg) }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        @endforeach
                    </div>
                     
					<div class="colum-row row">
						<div class="col-sm-12 form-group">
							<div class="text-center">
								<svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="green" class="bi bi-check2-all" viewBox="0 0 16 16">
								  <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
								  <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
								</svg>
							</div>
							<div class="text-center">
								Thank you for your registration. Login details have been sent to your number. Please Login to your account.
							</div>
						</div>
						<div class="col-sm-12 form-group text-center">
							<a href="{{url('')}}"><button onclick="window.location.href='{{url('')}}'" style="cursor: pointer;background-color:rgb(55, 181, 86);border: 1px solid rgb(55, 181, 86);color:#fff;" class="default-btn rounded" type="button"><i class="fa fa-home"></i>&nbsp;HOME</button></a>
							<a href="{{url('login')}}"><button onclick="window.location.href='{{url('login')}}'" style="cursor: pointer;background-color:teal;color:#fff;border: 1px solid teal;" class="default-btn rounded" type="button"><i class="fa fa-key"></i>&nbsp;LOGIN</button></a>
						</div>
					</div>   
            </div>       
        </div>

      </div>
    </section><!-- End Registration Successful Section -->

  </main><!-- End #main -->
@endsection