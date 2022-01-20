@extends('../../layoutadmin')
@section('main-content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <!-- Card header -->
          <div class="card-header pb-0">
            <div class="d-lg-flex">
              <div>
                <h5 class="mb-0">Tất cả sân</h5>
                <p class="text-sm mb-0">
                  Đây là tất cả thông tin sân bóng có trên hệ thống
                </p>
              </div>
              <div class="ms-auto my-auto mt-lg-0 mt-4">
                <div class="ms-auto my-auto">
                  <a href="{{ URL::to('/add-yard') }}" class="btn bg-gradient-primary btn-sm mb-0" target="_blank">+&nbsp; Thêm sân mới</a>
                  <button class="btn btn-outline-primary btn-sm export mb-0 mt-sm-0 mt-1" data-type="csv" type="button" name="button">Export</button>
                </div>
              </div>
            </div>
          </div>
          <div class="card-body px-0 pb-0">
            <div class="table-responsive">
              <table class="table table-flush" id="product-list">
                  <tr>
                    <th>Tên Sân</th>
                    <th>Loại sân</th>
                    <th>Giá</th>
                    <th>Giờ mở cửa</th>
                    <th>Giờ đóng cửa</th>
                    <th>Trạng thái</th>
                    <th>Hành động</th>
                  </tr>
                <tbody>
                  <tr>
                    <td>
                      <div class="d-flex">
                        <img class="w-10 ms-3" src="https://www.sporta.vn/assets/default_venue_0-be9661c93168f3e7e041490927476f582d3f441c4a8f1e57bce38c077b8a3e3c.jpg" alt="san">
                        <h6 class="ms-3 my-auto">Sân bóng futsal Nguyễn Du
                        </h6>
                      </div>
                    </td>
                    <td class="text-sm">Sân 7</td>
                    <td class="text-sm">150.000 VNĐ/h</td>
                    <td class="text-sm">08:00</td>
                    <td class="text-sm">20:00</td>
                    <td>
                      <span class="badge badge-danger badge-sm">Còn mở cửa</span>
                    </td>
                    <td class="text-sm">
                      <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Preview product">
                        <i class="material-icons text-secondary position-relative text-lg">visibility</i>
                      </a>
                      <a href="javascript:;" class="mx-3" data-bs-toggle="tooltip" data-bs-original-title="Edit product">
                        <i class="material-icons text-secondary position-relative text-lg">drive_file_rename_outline</i>
                      </a>
                      <a href="javascript:;" data-bs-toggle="tooltip" data-bs-original-title="Delete product">
                        <i class="material-icons text-secondary position-relative text-lg">delete</i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
