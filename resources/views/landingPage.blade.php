<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="{{asset('assets/css/mdb.min.css')}}">
  <!-- Custom styles -->
  <style>
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

<body class="landing-page">

  <!-- Main Navigation -->
  <header>

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
      <div class="container">
        <a class="navbar-brand" href="#"><strong>Listahan System</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
          aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#test">Rules</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Section -->
    <section class="view intro-2">
      <div class="mask rgba-gradient">
        <div class="container h-100 d-flex justify-content-center align-items-center">
          <div class="d-flex align-items-center content-height">
            <div class="row flex-center pt-5 mt-3">
              <div class="col-md-6 text-center text-md-left mb-5">
                <div class="white-text">
                  <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Sign up right now!
                  </h1>
                  <hr class="hr-light wow fadeInLeft" data-wow-delay="0.3s">
                  <h6 class="wow fadeInLeft" data-wow-delay="0.3s">Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Rem repellendus quasi fuga
                    nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
                    dolor molestiae, quisquam iste, maiores. Nulla.</h6>
                  <br>
                  <a class="btn btn-outline-white btn-rounded wow fadeInLeft" data-wow-delay="0.3s">Learn more</a>
                </div>
              </div>

              <div class="col-md-6 col-xl-5 offset-xl-1">
                <!-- Form -->
                <div class="card wow fadeInRight" data-wow-delay="0.3s">
                  <div class="card-body">
                    <!-- Header -->
                    <div class="text-center">
                      <h3 class="white-text"><i class="fas fa-user white-text"></i> Register:</h3>
                      <hr class="hr-light">
                    </div>

                    <!-- Body -->
                    <div class="md-form">
                      <i class="fas fa-user prefix white-text"></i>
                      <input type="text" id="form3" class="form-control">
                      <label for="form3" class="white-text">Your name</label>
                    </div>
                    <div class="md-form">
                      <i class="fas fa-envelope prefix white-text"></i>
                      <input type="text" id="form2" class="form-control">
                      <label for="form2" class="white-text">Your email</label>
                    </div>

                    <div class="md-form">
                      <i class="fas fa-lock prefix white-text"></i>
                      <input type="password" id="form4" class="form-control">
                      <label for="form4" class="white-text">Your password</label>
                    </div>

                    <div class="text-center mt-4">
                      <button class="btn btn-light-blue btn-rounded">Sign up</button>
                      <hr class="hr-light mb-3 mt-4">

                      <div class="inline-ul text-center d-flex justify-content-center">
                        <a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text"></i></a>
                        <a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text"> </i></a>
                        <a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text"> </i></a>
                      </div>
                    </div>

                  </div>
                </div>
                <!-- /.Form -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </header>
  <!-- Main Navigation -->

  <!-- Main layout -->
  <main>

    <div class="container">

      <!-- Section: Features v.4 -->
      <section class="mt-5 wow fadeIn" data-wow-delay="0.3s">

        <!-- Section heading -->
        <h1 class="text-center my-5 h1">Why is it so great?</h1>
        <!-- Section description -->
        <p class="text-center mb-5 w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum
          porro a pariatur accusamus veniam.</p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-4">

            <!-- Grid row -->
            <div class="row mb-2">
              <div class="col-2">
                <i class="fas fa-2x fa-flag-checkered indigo-text"></i>
              </div>
              <div class="col-10">
                <h5 class="font-weight-bold">International</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda.</p>
              </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-2">
              <div class="col-2">
                <i class="fas fa-2x fa-flask blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="font-weight-bold">Experimental</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda.</p>
              </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-2">
              <div class="col-2">
                <i class="fas fa-2x fa-glass-martini cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="font-weight-bold">Relaxing</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda.</p>
              </div>
            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-2 text-center text-md-left flex-center">
            <img src="https://mdbootstrap.com/img/Mockups/Transparent/Small/iphone-portfolio1.png" alt="" class="z-depth-0">
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4">

            <!-- Grid row -->
            <div class="row mb-2">
              <div class="col-2">
                <i class="fas fa-2x fa-heart deep-purple-text"></i>
              </div>
              <div class="col-10">
                <h5 class="font-weight-bold">Beloved</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda.</p>
              </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-2">
              <div class="col-2">
                <i class="fas fa-2x fa-bolt purple-text"></i>
              </div>
              <div class="col-10">
                <h5 class="font-weight-bold">Rapid</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda.</p>
              </div>
            </div>
            <!-- Grid row -->

            <!-- Grid row -->
            <div class="row mb-2">
              <div class="col-2">
                <i class="fas fa-2x fa-magic pink-text"></i>
              </div>
              <div class="col-10">
                <h5 class="font-weight-bold">Magical</h5>
                <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                  nam, aperiam minima assumenda.</p>
              </div>
            </div>
            <!-- Grid row -->

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Features v.4 -->

      <hr class="mb-5">

      <!-- Section: Testimonials v.3 -->
      <section class="section team-section text-center wow fadeIn" data-wow-delay="0.3s">

        <!-- Section heading -->
        <h1 class="text-center my-5 h1" id="test">Testimonials</h1>
        <!-- Section description -->
        <p class="text-center mb-5 w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum
          porro a pariatur accusamus veniam.</p>

        <!-- Grid row -->
        <div class="row text-center">

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-4">

            <div class="testimonial">
              <!-- Avatar -->
              <div class="avatar mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(1).jpg" class="rounded-circle z-depth-1 img-fluid">
              </div>

              <!-- Content -->
              <h4 class="font-weight-bold mt-4 mb-3">Anna Deynah</h4>
              <h6 class="mb-3 font-weight-bold grey-text">Web Designer</h6>
              <p><i class="fas fa-quote-left"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod eos id
                officiis hic tenetur quae quaerat ad velit ab hic tenetur.</p>

              <!-- Review -->
              <div class="orange-text">
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star-half-alt"> </i>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 mb-md-0 mb-4">
            <div class="testimonial">
              <!-- Avatar -->
              <div class="avatar mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(32).jpg" class="rounded-circle z-depth-1 img-fluid">
              </div>

              <!-- Content -->
              <h4 class="font-weight-bold mt-4 mb-3">John Doe</h4>
              <h6 class="mb-3 font-weight-bold grey-text">Web Developer</h6>
              <p><i class="fas fa-quote-left"></i> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis
                suscipit laboriosam, nisi ut aliquid ex ea commodi.</p>

              <!-- Review -->
              <div class="orange-text">
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4">
            <div class="testimonial">
              <!-- Avatar -->
              <div class="avatar mx-auto">
                <img src="https://mdbootstrap.com/img/Photos/Avatars/img%20(10).jpg" class="rounded-circle z-depth-1 img-fluid">
              </div>
              <!-- Content -->
              <h4 class="font-weight-bold mt-4 mb-3">Maria Kate</h4>
              <h6 class="mb-3 font-weight-bold grey-text">Photographer</h6>
              <p><i class="fas fa-quote-left"></i> At vero eos et accusamus et iusto odio dignissimos ducimus qui
                blanditiis praesentium voluptatum deleniti atque corrupti.</p>

              <!-- Review -->
              <div class="orange-text">
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="fas fa-star"> </i>
                <i class="far fa-star"> </i>
              </div>

            </div>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Testimonials v.3 -->

      <hr class="my-5">

      <!-- Section: Pricing v.3 -->
      <section class="wow fadeIn" data-wow-delay="0.3s">

        <!-- Section heading -->
        <h1 class="text-center mb-5 h1">Our pricing plans</h1>
        <!-- Section description -->
        <p class="text-center mb-5 w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum
          porro a pariatur accusamus veniam.</p>

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-lg-0 mb-4">
            <!-- Card -->
            <div class="card hoverable">

              <!-- Content -->
              <div class="text-center">
                <div class="card-body">
                  <h5>Basic plan</h5>
                  <div class="d-flex justify-content-center">
                    <div class="card-circle d-flex justify-content-center align-items-center">
                      <i class="fas fa-home light-blue-text"></i>
                    </div>
                  </div>

                  <!-- Price -->
                  <h2 class="font-weight-bold my-3">59$</h2>
                  <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa pariatur id
                    nobis
                    accusamus deleniti cumque hic laborum.</p>
                  <a class="btn btn-light-blue btn-rounded">Buy now</a>
                </div>
              </div>

            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12 mb-md-0 mb-4">
            <!-- Card -->
            <div class="card purple-gradient hoverable">

              <!-- Content -->
              <div class="text-center white-text">
                <div class="card-body">
                  <h5>Premium plan</h5>
                  <div class="d-flex justify-content-center">
                    <div class="card-circle d-flex justify-content-center align-items-center">
                      <i class="fas fa-users white-text"></i>
                    </div>
                  </div>

                  <!-- Price -->
                  <h2 class="font-weight-bold my-3">79$</h2>
                  <p>Esse corporis saepe laudantium velit adipisci cumque iste ratione facere non
                    distinctio cupiditate sequi atque.</p>
                  <a class="btn btn-outline-white btn-rounded">Buy now</a>
                </div>
              </div>

            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-12">
            <!-- Card -->
            <div class="card hoverable">

              <!-- Content -->
              <div class="text-center">
                <div class="card-body">
                  <h5>Advanced plan</h5>
                  <div class="d-flex justify-content-center">
                    <div class="card-circle d-flex justify-content-center align-items-center">
                      <i class="fas fa-chart-bar light-blue-text"></i>
                    </div>
                  </div>

                  <!-- Price -->
                  <h2 class="font-weight-bold my-3">99$</h2>
                  <p class="grey-text">At ab ea a molestiae corrupti numquam quo beatae minima ratione magni
                    accusantium
                    repellat eveniet quia vitae.</p>
                  <a class="btn btn-light-blue btn-rounded">Buy now</a>
                </div>
              </div>

            </div>
            <!-- Card -->
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </section>
      <!-- Section: Pricing v.3 -->

      <hr class="my-5">

      <!-- Section: Contact v.2 -->
      <section class="mb-5 wow fadeIn" data-wow-delay="0.3s">

        <!-- Section heading -->
        <h2 class="text-center my-5 h1" id="about">Contact us</h2>
        <!-- Section description -->
        <p class="text-center mb-5 w-responsive mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
          Fugit, error amet numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum quisquam eum
          porro a pariatur accusamus veniam. Quia, minima?</p>

        <div class="row">

          <!-- Grid column -->
          <div class="col-md-8 col-xl-9">
            <form>

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="contact-name" class="form-control">
                    <label for="contact-name" class="">Your name</label>
                  </div>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-6">
                  <div class="md-form mb-0">
                    <input type="text" id="contact-email" class="form-control">
                    <label for="contact-email" class="">Your email</label>
                  </div>
                </div>
                <!-- Grid column -->

              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">
                <div class="col-md-12">
                  <div class="md-form mb-0">
                    <input type="text" id="contact-Subject" class="form-control">
                    <label for="contact-Subject" class="">Subject</label>
                  </div>
                </div>
              </div>
              <!-- Grid row -->

              <!-- Grid row -->
              <div class="row">

                <!-- Grid column -->
                <div class="col-md-12">

                  <div class="md-form mb-0">
                    <textarea type="text" id="contact-message" class="md-textarea form-control" rows="3"></textarea>
                    <label for="contact-message">Your message</label>
                  </div>

                </div>
              </div>
              <!-- Grid row -->

            </form>

            <div class="text-center text-md-left my-4">
              <a class="btn btn-light-blue btn-rounded">Send</a>
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-xl-3">
            <ul class="contact-icons list-unstyled text-center">
              <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>San Francisco, CA 94126, USA</p>
              </li>

              <li><i class="fas fa-phone fa-2x"></i>
                <p>+ 01 234 567 89</p>
              </li>

              <li><i class="fas fa-envelope fa-2x"></i>
                <p>contact@mdbootstrap.com</p>
              </li>
            </ul>
          </div>
          <!-- Grid column -->

        </div>

      </section>
      <!-- Section: Contact v.2 -->

    </div>

  </main>
  <!-- Main layout -->

  <!-- Footer -->
  <footer class="page-footer pt-4 text-center text-md-left">

    <!-- Footer Links -->
    <div class="container">
      <div class="row">

        <!-- First column -->
        <div class="col-md-3">
          <h5 class="text-uppercase font-weight-bold">Footer Content </h5>
          <p>Here you can use rows and columns here to organize your footer content.</p>
        </div>
        <!-- /.First column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Second column -->
        <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase font-weight-bold">Links</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Link 1</a></li>
            <li><a href="#!">Link 2</a></li>
            <li><a href="#!">Link 3</a></li>
            <li><a href="#!">Link 4</a></li>
          </ul>
        </div>
        <!-- /.Second column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Third column -->
        <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase font-weight-bold">Links</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Link 1</a></li>
            <li><a href="#!">Link 2</a></li>
            <li><a href="#!">Link 3</a></li>
            <li><a href="#!">Link 4</a></li>
          </ul>
        </div>
        <!-- /.Third column -->

        <hr class="w-100 clearfix d-md-none">

        <!-- Fourth column -->
        <div class="col-md-2 ml-auto">
          <h5 class="text-uppercase font-weight-bold">Links</h5>
          <ul class="list-unstyled">
            <li><a href="#!">Link 1</a></li>
            <li><a href="#!">Link 2</a></li>
            <li><a href="#!">Link 3</a></li>
            <li><a href="#!">Link 4</a></li>
          </ul>
        </div>
        <!-- /.Fourth column -->

      </div>
    </div>

    <hr>

    <div class="container">
      <!-- Grid row -->
      <div class="row mb-3">

        <!-- First column -->
        <div class="col-md-12">

          <ul class="list-unstyled d-flex justify-content-center mb-0 py-4 list-inline">
            <li class="list-inline-item"><a class="p-2 m-2 fa-lg fb-ic"><i class="fab fa-facebook-f white-text fa-lg">
                </i></a></li>
            <li class="list-inline-item"><a class="p-2 m-2 fa-lg tw-ic"><i class="fab fa-twitter white-text fa-lg"> </i></a></li>
            <li class="list-inline-item"><a class="p-2 m-2 fa-lg gplus-ic"><i class="fab fa-google-plus-g white-text fa-lg">
                </i></a></li>
            <li class="list-inline-item"><a class="p-2 m-2 fa-lg li-ic"><i class="fab fa-linkedin-in white-text fa-lg">
                </i></a></li>
            <li class="list-inline-item"><a class="p-2 m-2 fa-lg ins-ic"><i class="fab fa-instagram white-text fa-lg">
                </i></a></li>
            <li class="list-inline-item"><a class="p-2 m-2 fa-lg pin-ic"><i class="fab fa-pinterest white-text fa-lg">
                </i></a></li>
          </ul>

        </div>
        <!-- /First column -->
      </div>
      <!-- /Grid row -->
    </div>
    <!-- /.Footer Links -->

    <!-- Copyright -->
    <div class="footer-copyright py-3 text-center">
      <div class="container-fluid">
        &copy; 2019 Copyright: <a href="https://mdbootstrap.com/education/bootstrap/"> MDBootstrap.com </a>

      </div>
    </div>
    <!-- Copyright -->

  </footer>
  <!-- Footer -->

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