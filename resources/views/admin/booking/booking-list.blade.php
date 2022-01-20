@extends('../../layoutadmin')
@section('main-content')
<div class="container-fluid py-4">
    <div class="d-sm-flex justify-content-between">
      <div>
        <a href="javascript:;" class="btn btn-icon bg-gradient-primary">
          Tạo đơn đặt sân mới
        </a>
      </div>
      <div class="d-flex">
        <div class="dropdown d-inline">
          <a href="javascript:;" class="btn btn-outline-dark dropdown-toggle " data-bs-toggle="dropdown" id="navbarDropdownMenuLink2">
            Lọc
          </a>
          <ul class="dropdown-menu dropdown-menu-lg-start px-2 py-3" aria-labelledby="navbarDropdownMenuLink2" data-popper-placement="left-start">
            <li><a class="dropdown-item border-radius-md" href="javascript:;">Trạng Thái: Đã thanh toán</a></li>
            <li><a class="dropdown-item border-radius-md" href="javascript:;">Trạng Thái: Đã hoàn tiền</a></li>
            <li><a class="dropdown-item border-radius-md" href="javascript:;">Trạng Thái: Đã hủy</a></li>
            <li>
              <hr class="horizontal dark my-2">
            </li>
            <li><a class="dropdown-item border-radius-md text-danger" href="javascript:;">Loại bỏ lọc</a></li>
          </ul>
        </div>
        <button class="btn btn-icon btn-outline-dark ms-2 export" data-type="csv" type="button">
          <i class="material-icons text-xs position-relative">archive</i>
          Xuất CSV
        </button>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Bảng Đặt Sân</h5>
            <p class="text-sm mb-0">
              Xem tất cả thông tin các lần đặt sân.
            </p>
          </div>
          <div class="table-responsive">
            <table class="table table-flush" id="datatable-search">
              <thead class="thead-light">
                <tr>
                  <th>ID</th>
                  <th>Thời gian</th>
                  <th>Trạng Thái</th>
                  <th>Khách hàng</th>
                  <th>Yard</th>
                  <th>Thành Tiền</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex align-items-center">
                      <p class="text-xs font-weight-normal ms-2 mb-0">#10421</p>
                    </div>
                  </td>
                  <td class="font-weight-normal">
                    <span class="my-2 text-xs">1 Nov, 10:20 AM</span>
                  </td>
                  <td class="text-xs font-weight-normal">
                    <div class="d-flex align-items-center">
                      <button class="btn btn-icon-only btn-rounded btn-outline-success mb-0 me-2 btn-sm d-flex align-items-center justify-content-center"><i class="material-icons text-sm" aria-hidden="true">done</i></button>
                      <span>Đã thanh toán</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-normal">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('backend//img/team-2.jpg') }}" class="avatar avatar-xs me-2" alt="user image">
                      <span>Orlando Imieto</span>
                    </div>
                  </td>
                  <td class="text-xs font-weight-normal">
                    <span class="my-2 text-xs">Sân bóng Nguyễn Du</span>
                  </td>
                  <td class="text-xs font-weight-normal">
                    <span class="my-2 text-xs">270.000 VNĐ</span>
                  </td>
                </tr>

@endsection
