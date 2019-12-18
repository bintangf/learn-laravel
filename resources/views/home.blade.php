@extends('master')
@section('title', 'Home')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="text-center card-header">
                  <h3>AUPLAS - Automatic Plant Sprinkler</h3>
                </div>

                <div class="text-center card-body">
                  <h3>Silakan lakukan pemesanan!</h3>
                  <h4>dibawah ini</h4>
                  <a>Pesanan anda kami buat berdasarkan kebutuhan anda, untuk lebih lanjutnya anda dapat menghubungi kami lewat contact.</a>
                  <br>
                  <br>
                  <div id="carouselFadeExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="https://www.bestelectronicprojects.com/wp-content/uploads/2019/08/zx.png" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="https://www.ardumotive.com/uploads/1/2/7/2/12726513/811657443_orig.jpg" alt="Second slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselFadeExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselFadeExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                    <br>
                    @guest
                      <a type="button" href="{{ route('register') }}" class="btn btn-info">Register</a>
                      <a>  Or  </a>
                      <a type="button" href="{{ route('login') }}" class="btn btn-info">Login</a>
                    @else
                      <a type="button" href="{{ url('/contact') }}" class="btn btn-info">Info Pemesanan</a>
                    @endguest
                    <br><br>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
