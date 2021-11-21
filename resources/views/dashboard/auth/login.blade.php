@extends('layouts.login')
@section('titel','Login')

@section('content')
<div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 m-0">
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img src="{{asset('assets/dashboard/images/logo/logo-dark.png')}}" alt="branding logo">
                  </div>
                  {{-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
                    <span>Easily Using</span>
                  </p> --}}
                </div>
                <div class="card-content">
    {{-- ========================== social media login =============================== --}}
                  {{-- <div class="text-center">
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook">
                      <span class="la la-facebook"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter">
                      <span class="la la-twitter"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin">
                      <span class="la la-linkedin font-medium-4"></span>
                    </a>
                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github">
                      <span class="la la-github font-medium-4"></span>
                    </a>
                  </div> --}}
    {{-- ============================================================================= --}}
                  {{-- <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-2">
                    <span>OR Using Account Details</span>
                  </p> --}}
                  <div class="card-body pt-0">
                    <form class="form-horizontal" action="{{ route('admin.login') }}" method="POST" novalidate>
                        @csrf
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control input-lg" name="email"  placeholder="Your Email">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-control-position">
                          <i class="la la-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control input-lg" name="password" id="user-password" placeholder="Enter Password">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
                    </form>
                  </div>
                  <div class="card-body pb-0">
                    <p class="text-center"><a href="" class="card-link">Recover password</a></p>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </div>
@endsection

