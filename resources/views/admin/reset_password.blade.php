<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/img/apple-icon.png') }} ">
  <link rel="icon" type="image/png" href="{{ asset('backend/img/favicon.png') }} ">
  <title>
    Dashboard || Find Yard Sport
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('backend/css/nucleo-icons.css') }} " rel="stylesheet" />
  <link href="{{ asset('backend/css/nucleo-svg.css') }} " rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('backend/css/material-dashboard.css?v=3.0.0') }} " rel="stylesheet" />
</head>

<body class="bg-gray-200">
    <nav class="navbar navbar-expand-lg position-absolute top-0 z-index-3 w-100 shadow-none my-3 navbar-transparent mt-4">
        <div class="container">
          <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 text-white" href="{{ URL::to('/') }}">
            Find Yard Sport
          </a>
        </div>
    </nav>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-warning shadow-warning border-radius-lg py-3 pe-1 text-center py-4">
                      <h3 class="font-weight-bolder text-white">Đặt lại mật khẩu    </h3>
                    </div>
              </div>
              <div class="card-body py-4">
                  <form role="form">
                      <div class="input-group input-group-static mb-4">
                          <label>Email</label>
                          <input type="email" class="form-control" placeholder="john@email.com">
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn bg-gradient-warning w-100 mt-4 mb-0">Reset</button>
                        </div>
                    </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer class="footer position-absolute bottom-2 py-2 w-100">
        <div class="container">
              <div class="copyright text-center text-sm text-white text-lg-start">
                <div class="text-center p-3">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart" aria-hidden="true"></i> by
                <a href="https://findyardsport.systems/" class="font-weight-bold text-white" target="_blank">Creative Find Yard Sport</a>
                </div>
              </div>
            </div>

      </footer>
    </div>
  </main>
  <!--   Core JS Files   -->
  <script src="{{ asset('backend/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('backend/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('backend/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('backend/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>
