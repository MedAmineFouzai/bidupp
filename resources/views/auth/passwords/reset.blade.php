
@extends('layouts.master')

<style>.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 500px;
  margin: auto;
  text-align: center;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}</style>

@section('content')

    <header class="header">
      <div class="header__top">
        <div class="container-fluid">
      
        </div>
      </div>
      <nav class="navigation">
        <div class="container-fluid">
          <div class="navigation__column left">
            <div class="header__logo"><a class="ps-logo" href="index.html"><img src="{{ asset('images/logo.png')}}" alt="" style=" width:70px; height:70px; margin-bottom:20px;"></a></div>
          </div>
          <div class="navigation__column center">
            
            </div>
          <div class="navigation__column right">
            @include('partials.search')

            <div class="ps-cart"><a class="ps-cart__toggle" href="{{ route('cart.index') }}"><span><i>{{Cart::count()}}</i></span><i class="fa fa-trophy" aria-hidden="true"></i></a>
            </div>

        </div>
        <div class="degl" style="position: absolute; margin-left:70%; margin-top:2%; width:400px;">
          @include('partials.auth')
        </div>
      </nav>

      <div class="topnav">
              <a  href="././">Acceuil <img src="{{ asset('images/home.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././tout">Tout Voir <img src="{{ asset('images/all.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././activite">Activités <img src="{{ asset('images/activity.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././beaute">Beauté <img src="{{ asset('images/beaute.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././formation">Formation <img src="{{ asset('images/formation.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././gastronomie">Gastronomie <img src="{{ asset('images/food.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././hotel">Hotels <img src="{{ asset('images/hotel.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././sport">Sport <img src="{{ asset('images/sport.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././shopping">Shopping <img src="{{ asset('images/shopping.png')}}" alt="" style="height:21px;width:21px;"></a>
              <a href="././ville">Ma ville <img src="{{ asset('images/map.png')}}" alt="" style="height:21px;width:21px;"></a>

        

      </div>

      


    </header>
    <div class="header-services">
      <div class="ps-services owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="7000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="false" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
        <p class="ps-service"><i class="ps-icon-delivery"></i><strong>Free delivery</strong>: Get free standard delivery on every order with Sky Store</p>
      </div>
    </div>

    @if (count($errors) > 0)
    <div class="alert alert-danger">
      <ul class="mb-0 mt-0">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
@endif


    <main class="ps-main">
        <main class="ps-main">
            <div class="ps-section--features-product ps-section masonry-root pt-100 pb-100">
              <div class="ps-container">
                <div class="ps-section__header mb-50">
                  <h3 class="ps-section__title" data-mask="Profile">Profile</h3>
                
             
                  <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf
    
                            <input type="hidden" name="token" value="{{ $token }}">
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="ps-btn">
                                        {{ __('Reset Password') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
     
                
                    </div>
                  </div>
                </div>
              </div>
            </div>

   
         
          
      
      </div>
@endsection