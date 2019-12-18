@extends('master')
@section('title', 'About')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <div class="card-header text-center ">
                <h3>AUPLAS - Automatic Plant Sprinkler</h3>
              </div>

                <div class="card-body text-center">
                    <h3>THE BEST REVOLUTIONER TOOLS</h3>
                    <p>
                      Ini merupakan alat penyiram tanaman otomatis berbasis arduino, dimana ia akan mendeteksi
                      kelembaban dari tanah tanaman tersebut, jika kering ia siram jika masih lembab tidak menyiram.
                    </p>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                      et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                      culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    @guest
                      <a type="button" href="{{ route('register') }}" class="btn btn-info">Register</a>
                      <a>  Or  </a>
                      <a type="button" href="{{ route('login') }}" class="btn btn-info">Login</a>
                    @else
                      <a type="button" href="{{ url('/contact') }}" class="btn btn-info">Info Pemesanan</a>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
