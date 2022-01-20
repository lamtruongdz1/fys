@extends('../../layoutadmin')
@section('main-content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-8 mx-auto">
        <div class="card mb-4">
          <div class="card-header p-3 pb-0">
            <div class="d-flex justify-content-between align-items-center">
              <div class="w-50">
                <h6>Chi tiết đặt sân </h6>
                <p class="text-sm mb-0">
                  Mã đặt sân : <b>241342</b> từ ngfày <b>23.02.2021</b>
                </p>
                <p class="text-sm">
                  Code: <b>KF332</b>
                </p>
              </div>
              <a href="javascript:;" class="btn bg-gradient-dark ms-auto mb-0">Hóa đơn</a>
            </div>
          </div>
          <div class="card-body p-3 pt-0">
            <hr class="horizontal dark mt-0 mb-4">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="d-flex">
                  <div>
                    <img src="https://www.sporta.vn/assets/default_venue_1-7b24d4b210f6a19919f75503d8b6b5d2c2d75206c1a637e2431d9e87ebed2524.jpg" class="avatar avatar-xxl me-3" alt="product image">
                  </div>
                  <div>
                    <h6 class="text-lg mb-0 mt-2">Tên sân</h6>
                    <p class="text-sm mb-3">Đặt 2 ngày trước</p>
                    <span class="badge badge-sm bg-gradient-success">Đã thuê thành công</span>
                  </div>
                </div>
              </div>
            </div>
            <hr class="horizontal dark mt-4 mb-4">
            <div class="row">
              <div class="col-lg-5 col-md-6 col-12">
                <h6 class="mb-3">Chi tiết thanh toán</h6>
                <div class="card card-body border card-plain border-radius-lg d-flex align-items-center flex-row">
                  <img class="w-10 me-3 mb-0" src="{{ asset('backend/img/logos/mastercard.png') }}" alt="logo">
                  <h6 class="mb-0">****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;****&nbsp;&nbsp;&nbsp;7852</h6>
                </div>
                <h6 class="mb-3 mt-4">Thông tin hóa đơn</h6>
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                    <div class="d-flex flex-column">
                      <h6 class="mb-3 text-sm">Phan Lam Trường</h6>
                      <span class="mb-2 text-xs">Email: <span class="text-dark ms-2 font-weight-bold"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0a6566637c6f784a687f7878637e6524696567">[email&#160;protected]</a></span></span>
                      <span class="text-xs">Số điện thoại: <span class="text-dark ms-2 font-weight-bold">0562402540</span></span>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="col-lg-3 col-12 ms-auto">
                <h6 class="mb-3">Tổng tiền</h6>
                <div class="d-flex justify-content-between">
                  <span class="mb-2 text-sm">
                    Giá thuê:
                  </span>
                  <span class="text-dark font-weight-bold ms-2">150.000</span>
                </div>
                <div class="d-flex justify-content-between">
                  <span class="mb-2 text-sm">
                    Giảm giá:
                  </span>
                  <span class="text-dark ms-2 font-weight-bold">15.000</span>
                </div>
                <div class="d-flex justify-content-between mt-4">
                  <span class="mb-2 text-lg">
                    Tổng:
                  </span>
                  <span class="text-dark text-lg ms-2 font-weight-bold">135.000</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
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
        <h6 class="mb-0">Sidenav Mini</h6>
        <div class="form-check form-switch ps-0 ms-auto my-auto">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarMinimize" onclick="navbarMinimize(this)">
        </div>
      </div>
      <hr class="horizontal dark my-3">
      <div class="mt-2 d-flex">
@endsection
