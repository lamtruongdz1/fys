<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('backend/img/apple-icon.png') }} ">
  <link rel="icon" type="image/png" href="{{ asset('backend/img/favicon.png') }} ">
  <title>
    @isset($title){{ $title }}@endisset - Dashboard
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

<body class="g-sidenav-show  bg-gray-200">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
        <div class="sidenav-header">
          <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
          <a class="navbar-brand m-0" href="{{URL::to('/dashboard')}}" target="_blank">
            <img src="{{ asset('/backend/img//logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">Dashboard</span>
          </a>
        </div>
        <hr class="horizontal light mt-0 mb-2">
        <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
          <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
              <a data-bs-toggle="collapse" href="#ProfileNav" class="nav-link text-white" aria-controls="ProfileNav" role="button" aria-expanded="false">
                <img src="{{ asset('/backend/img/team-4.jpg')}}" class="avatar">
                <span class="nav-link-text ms-2 ps-1"> Phan Lam Trường</span>
              </a>
              <div class="collapse" id="ProfileNav" style="">
                <ul class="nav ">
                  <li class="nav-item">
                    <a class="nav-link text-white" href="{{URL::to('/dashboard/profile')}}">
                      <span class="sidenav-mini-icon"> TCN </span>
                      <span class="sidenav-normal  ms-3  ps-1"> Trang Cá Nhân </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="{{URL::to('/dashboard/profile/edit')}}">
                      <span class="sidenav-mini-icon"> CSTT </span>
                      <span class="sidenav-normal  ms-3  ps-1"> Chỉnh sửa thông tin </span>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white " href="{{URL::to('/logout')}}">
                      <span class="sidenav-mini-icon"> ĐX </span>
                      <span class="sidenav-normal  ms-3  ps-1"> Đăng Xuất </span>
                    </a>
                  </li>
                </ul>
              </div>
            </li>
            <hr class="horizontal light mt-0">
            <li class="nav-item mt-3">
              <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder text-white">PAGES</h6>
            </li>
            <li class="nav-item">
              <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link text-white " aria-controls="pagesExamples" role="button" aria-expanded="false">
                <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">image</i>
                <span class="nav-link-text ms-2 ps-1">Pages</span>
              </a>
              <div class="collapse " id="pagesExamples">
                <ul class="nav ">

                  <li class="nav-item ">
                    <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#usersExample">
                      <span class="sidenav-mini-icon"> U </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Users </span>
                    </a>
                    <div class="collapse " id="usersExample">
                      <ul class="nav nav-sm flex-column">

                        <li class="nav-item">
                          <a class="nav-link text-white " href="../../pages/pages/users/new-user.html">
                            <span class="sidenav-mini-icon"> N </span>
                            <span class="sidenav-normal  ms-2  ps-1"> New User </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a data-bs-toggle="collapse" href="#ecommerceExamples" class="nav-link text-white " aria-controls="ecommerceExamples" role="button" aria-expanded="false">
                <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">shopping_basket</i>
                <span class="nav-link-text ms-2 ps-1">Ecommerce</span>
              </a>
              <div class="collapse " id="ecommerceExamples">
                <ul class="nav ">
                  <li class="nav-item ">
                    <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#productsExample">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Sản phẩm </span>
                    </a>
                    <div class="collapse " id="productsExample">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a class="nav-link text-white " href="{{ URL::to('/add-yard') }}">
                            <span class="sidenav-mini-icon"> N </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Thêm sản phẩm </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white " href="{{ URL::to('/edit-yard') }}">
                            <span class="sidenav-mini-icon"> E </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Sửa thông tin sân </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white " href="{{ URL::to('/yard-info') }}">
                            <span class="sidenav-mini-icon"> P </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Thông tin sân </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white " href="{{ URL::to('/list-yard') }}">
                            <span class="sidenav-mini-icon"> P </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Tất cả sân </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-white " data-bs-toggle="collapse" aria-expanded="false" href="#ordersExample">
                      <span class="sidenav-mini-icon"> O </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Bookings </span>
                    </a>
                    <div class="collapse " id="ordersExample">
                      <ul class="nav nav-sm flex-column">
                        <li class="nav-item">
                          <a class="nav-link text-white " href="{{  URL::to('/booking-list') }}">
                            <span class="sidenav-mini-icon"> O </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Bookings List </span>
                          </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link text-white " href="{{  URL::to('/booking-details') }}">
                            <span class="sidenav-mini-icon"> O </span>
                            <span class="sidenav-normal  ms-2  ps-1"> Bookings Details </span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a data-bs-toggle="collapse" href="#authExamples" class="nav-link text-white " aria-controls="authExamples" role="button" aria-expanded="false">
                <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">content_paste</i>
                <span class="nav-link-text ms-2 ps-1">Authentication</span>
              </a>
              <div class="collapse " id="authExamples">
                <ul class="nav ">
                  <li class="nav-item ">
                    <a class="nav-link text-white "  href="{{ URL::to('/admin') }}">
                      <span class="sidenav-mini-icon"> S </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Sign In </span>
                    </a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link text-white "  href="{{ URL::to('/reset') }}">
                      <span class="sidenav-mini-icon"> R </span>
                      <span class="sidenav-normal  ms-2  ps-1"> Reset Password </span>
                    </a>
                  </li>

              </div>
            </li>
          </ul>
        </div>
      </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg position-sticky mt-4 top-1 px-0 mx-4 shadow-none border-radius-xl z-index-sticky" id="navbarBlur" data-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm">
              <a class="opacity-3 text-dark" href="javascript:;">
                <svg width="12px" height="12px" class="mb-1" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                  <title>shop </title>
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g transform="translate(-1716.000000, -439.000000)" fill="#252f40" fill-rule="nonzero">
                      <g transform="translate(1716.000000, 291.000000)">
                        <g transform="translate(0.000000, 148.000000)">
                          <path d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z"></path>
                          <path d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z"></path>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>
            </li>
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Analytics</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">Analytics</h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Search here</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item">
              <a href="../../pages/authentication/signin/illustration.html" class="nav-link text-body p-0 position-relative" target="_blank">
                <i class="material-icons me-sm-1">
              account_circle
            </i>
              </a>
            </li>

            <li class="nav-item px-4">
              <a href="javascript:;" class="nav-link text-body p-0">
                <i class="material-icons fixed-plugin-button-nav cursor-pointer">
              settings
            </i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    {{ $slot }}
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{ asset('backend/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('backend/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('backend/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('backend/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script src="{{ asset('backend/js/plugins/chartjs.min.js')}}"></script>

  <script>

    var ctx = document.getElementById("chart-bars").getContext("2d");

    new Chart(ctx, {
      type: "bar",
      data: {
        labels: ["M", "T", "W", "T", "F", "S", "S"],
        datasets: [{
          label: "Sales",
          tension: 0.4,
          borderWidth: 0,
          borderRadius: 4,
          borderSkipped: false,
          backgroundColor: "rgba(255, 255, 255, .8)",
          data: [50, 20, 10, 22, 50, 10, 40],
          maxBarThickness: 6
        }, ],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              suggestedMin: 0,
              suggestedMax: 500,
              beginAtZero: true,
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
              color: "#fff"
            },
          },
          x: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });


    var ctx2 = document.getElementById("chart-line").getContext("2d");

    new Chart(ctx2, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 320, 500, 350, 200, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });

    var ctx3 = document.getElementById("chart-line-tasks").getContext("2d");

    new Chart(ctx3, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0,
          borderWidth: 0,
          pointRadius: 5,
          pointBackgroundColor: "rgba(255, 255, 255, .8)",
          pointBorderColor: "transparent",
          borderColor: "rgba(255, 255, 255, .8)",
          borderWidth: 4,
          backgroundColor: "transparent",
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5],
              color: 'rgba(255, 255, 255, .2)'
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#f8f9fa',
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#f8f9fa',
              padding: 10,
              font: {
                size: 14,
                weight: 300,
                family: "Roboto",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
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
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="{{ asset('backend/js/material-dashboard.min.js?v=3.0.0') }}"></script>
</body>

</html>
