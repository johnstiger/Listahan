<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Login || Listahan System</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css')}}">
  <!-- Custom styles -->
  <style>
    .login{
        background-image: url("https://www.lifeofpix.com/wp-content/uploads/2018/07/270-niwat5455546521-chim.jpg");
        background-size: cover;
    }
    .view {
        height: 100vh !important;
    }
    .card{
      background: transparent;
      border: 1px solid dimgray;
    }
    .alert{
        color: red;
    }
    html,
    body,
    header,
    .view {
      height: 100%;
    }
    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 1040px;
      }
    }
    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 600px;
      }
    }

  </style>
</head>
<body class="login">
  <!-- Main Navigation -->
  <header>
    <!-- Intro Section -->
    <section class="view intro-2">
      <div class="mask rgba-gradient">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="d-flex align-items-center content-height">
            <div class="row flex-center pt-2 mt-3">
              <div class="col-md-6 text-center text-md-left mb-5">
                <div class="white-text">
                  <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Listahan System
                  </h1>
                  <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                  <h6 class="wow fadeInLeft" data-wow-delay="0.3s">
                      This system is contain of different category which is list for money lending,
                      money management and list for costumers for lending a products.
                  </h6>
                  <br>
                  <a href="{{route('register')}}" class="btn btn-outline-white btn-rounded wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                </div>
              </div>

              <div class="col-md-6 col-xl-5 offset-xl-1">
                <!-- Form -->
                <form action="{{route('login/admin')}}" method="post">
                    @csrf
                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                  <div class="card-body">
                    <!-- Header -->
                    <div class="text-center">
                      <h3 class="text-white"><i class="fas fa-user white-text"></i> Log In</h3>
                      <hr class="hr-light">
                    </div>
                    @if (session('error') )
                        <div class="alert alert-danger message alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            {{ session('error') }}
                        </div>
                    @endif
                    <!-- Body -->
                    <div class="md-form">
                      <i class="fas fa-envelope prefix white-text"></i>
                      <input type="text" id="form2" class="form-control white-text" name="email" value="{{ old('email') }}">
                      @error('email')
                          <span style="color: red">*{{ $message }}</span>
                      @enderror
                      <label for="form2" class="white-text">Your email</label>
                    </div>

                    <div class="md-form">
                      <i class="fas fa-lock prefix white-text"></i>
                      <input type="password" id="form4" class="form-control white-text" name="password">
                      <label for="form4" class="white-text">Your password</label>
                      @error('password')
                          <span style="color: red">*{{ $message }}</span>
                      @enderror
                    </div>

                    <div class="text-center mt-4">
                      <button type="submit" class="btn btn-light-blue btn-rounded">Login</button>
                      <hr class="hr-light mb-3 mt-4">

                      <div class="inline-ul text-center d-flex justify-content-center">
                        <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                        <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text"> </i></a>
                        <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text"> </i></a>
                      </div>
                    </div>
                  </div>
                </div>
                </form>
                <!-- /.Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </header>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script src="{{asset('assets/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{asset('assets/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{asset('assets/js/bootstrap.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{asset('assets/js/mdb.min.js')}}"></script>
  <script>
    new WOW().init();
  </script>
</body>

</html>
