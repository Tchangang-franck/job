@extends('layout')
@section('title','login')
@section('content')
<section class="intro">
  <div class="bg-image h-100">
    <div class="mask d-flex align-items-center h-100" style="background-color: ">
      <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
          <div class="col-12 col-lg-9 col-xl-8">
            <div class="card" style="border-radius: 1rem;">
              <div class="row g-0">
                <div class="col-md-4 d-none d-md-block">
                  <img
                    src="https://mdbootstrap.com/img/Photos/Others/sidenav2.jpg"
                    alt="login form"
                    class="img-fluid" style="border-top-left-radius: 1rem; border-bottom-left-radius: 1rem;"
                  />
                </div>
                <div class="col-md-8 d-flex align-items-center">
                  <div class="card-body py-5 px-4 p-md-5">

                  <form action="{{route('login.post')}}" method="POST" class="ms-auto me-auto" style="width: 500px">
               @csrf
                      <h4 class="fw-bold mb-4" style="color: #92aad0;">Log in to your account</h4>
                      <p class="mb-4" style="color: #45526e;">To log in, please fill in these text fiels with your e-mail address and password.</p>

                      <div class="form-outline mb-4">
                        <input type="text" id="email" name="email" class="form-control" />
                        <label class="form-label"  for="email">Email address</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="password" id="password"  name="password" class="form-control" />
                        <label class="form-label" for="password">Password</label>
                      </div>

                      <div class="d-flex justify-content-end pt-1 mb-4">
                        <button class="btn btn-primary btn-rounded" type="submit" style="background-color: #92aad0;">Login</button>
                      </div>
                      <hr>
                      <a class="link float-end" href="#!">Register Here.</a>
                    </form>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection