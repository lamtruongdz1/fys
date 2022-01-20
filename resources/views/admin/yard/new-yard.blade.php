@extends('layoutadmin')
@section('main-content')
<div class="container-fluid py-4">
    <div class="row min-vh-80">
      <div class="col-lg-8 col-md-10 col-12 m-auto">
        <h3 class="mt-3 mb-0 text-center">Thêm sân mới</h3>
        <p class="lead font-weight-normal opacity-8 mb-7 text-center">Điền tất cả thông tin về sân.</p>
        <div class="card">
          <div class="card-header p-0 position-relative mt-n5 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <div class="multisteps-form__progress">
                <button class="multisteps-form__progress-btn js-active" type="button" title="Product Info">
                  <span>1. Thông tin sân</span>
                </button>
                <button class="multisteps-form__progress-btn" type="button" title="Media">2. Ảnh</button>
                <button class="multisteps-form__progress-btn" type="button" title="Socials">3. Thông tin chủ sân</button>
                <button class="multisteps-form__progress-btn" type="button" title="Pricing">4. Giá cả</button>
              </div>
            </div>
          </div>
          <div class="card-body">
            <form class="multisteps-form__form">
              <!--single form panel-->
              <div class="multisteps-form__panel pt-3 border-radius-xl bg-white js-active" data-animation="FadeIn">
                <h5 class="font-weight-bolder">Thông tin sân</h5>
                <div class="multisteps-form__content">
                  <div class="row mt-3">
                    <div class="col-12 col-sm-6">
                      <div class="input-group input-group-dynamic">
                        <label for="exampleFormControlInput1" class="form-label">Tên</label>
                        <input class="multisteps-form__input form-control" type="text" />
                      </div>
                    </div>
                    <div class="col-12 col-sm-6 mt-3 mt-sm-0">
                      <div class="input-group input-group-dynamic">
                        <label for="exampleFormControlInput1" class="form-label">Sức chứa tối đa    </label>
                        <input class="multisteps-form__input form-control" type="number" min="1" max="20"/>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-6">
                      <label class="mt-4">Mô tả</label>
                      <p class="form-text text-muted text-xs ms-1 d-inline">
                        (optional)
                      </p>
                      <div id="edit-deschiption" class="h-50">
                        <p>Some initial <strong>bold</strong> text</p>
                      </div>
                    </div>
                    <div class="col-sm-6 mt-sm-3 mt-5">
                      <label class="form-control ms-0">Loại sân</label>
                      <select class="form-control" name="choices-category" id="choices-category">
                        <option value="Choice 1" selected="">Sân 5</option>
                        <option value="Choice 2">Sân 7</option>
                        <option value="Choice 3">Sân 11</option>
                      </select>
                      <label class="form-control ms-0">Thời gian hoạt động</label>
                      Mở cửa: <input type="time" name="batdau" id="batdau" class="form-control">
                      Đóng cửa:<input type="time" name="ketthuc" id="ketthuc" class="form-control">
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Tiếp tục</button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                <h5 class="font-weight-bolder">Ảnh</h5>
                <div class="multisteps-form__content">
                  <div class="row mt-3">
                    <div class="col-12">
                      <label class="form-control mb-0">Ảnh sân bóng</label>
                      <div action="/file-upload" class="form-control border dropzone" id="productImg"></div>
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Trở lại</button>
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Tiếp tục<nav></nav></button>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel pt-3 border-radius-xl bg-white" data-animation="FadeIn">
                <h5 class="font-weight-bolder">Thông Tin</h5>
                <div class="multisteps-form__content">
                  <div class="row mt-3">
                    <div class="col-12">
                      <div class="input-group input-group-dynamic">
                        <label class="form-label">Tên Thương Tiệu: </label>
                        <input class="multisteps-form__input form-control" type="text" />
                      </div>
                    </div>
                    <div class="col-12 mt-3">
                      <div class="input-group input-group-dynamic">
                        <label class="form-label">Facebook Chủ Sân</label>
                        <input class="multisteps-form__input form-control" type="text" />
                      </div>
                    </div>
                    <div class="col-12 mt-3">
                      <div class="input-group input-group-dynamic">
                        <label class="form-label">Facebook Sân Bóng</label>
                        <input class="multisteps-form__input form-control" type="text" />
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="button-row d-flex mt-4">
                        <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Trở lại</button>
                        <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Tiếp tục<nav></nav></button>
                      </div>
                  </div>
                </div>
              </div>
              <!--single form panel-->
              <div class="multisteps-form__panel pt-3 border-radius-xl bg-white h-100" data-animation="FadeIn">
                <h5 class="font-weight-bolder">Pricing</h5>
                <div class="multisteps-form__content mt-3">
                  <div class="row">
                    <div class="col-3">
                      <div class="input-group input-group-dynamic">
                        <label class="form-label">Giá Cả</label>
                        <input type="number" class="form-control w-100" id="exampleInputEmail1" aria-describedby="emailHelp">
                      </div>
                    </div>
                    <div class="col-4">
                        <div class="input-group input-group-dynamic">
                        <label class="form-label">VNĐ</label>
                        <input type="text" class="form-control w-100" id="exampleInputText1" aria-describedby="" disabled>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <label class="mt-4 form-label">Tags</label>
                      <select class="form-control" name="choices-tags" id="choices-tags" multiple>
                        <option value="Choice 1" selected>Đang giảm giá</option>
                        <option value="Choice 2">Sân mới</option>
                        <option value="Choice 3">Nhiều người đặt</option>
                        <option value="Choice 4">Đang thi công</option>
                      </select>
                    </div>
                  </div>
                  <div class="button-row d-flex mt-4">
                    <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button" title="Prev">Trở lại</button>
                    <button class="btn bg-gradient-dark ms-auto mb-0 js-btn-next" type="button" title="Next">Tiếp tục<nav></nav></button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="https://demos.creative-tim.com/material-dashboard-pro/assets/js/plugins/dropzone.min.js"></script>
    <script src="https://demos.creative-tim.com/material-dashboard-pro/assets/js/plugins/multistep-form.js"></script>
    <script src="https://demos.creative-tim.com/material-dashboard-pro/assets/js/plugins/choices.min.js"></script>
    <script src="https://demos.creative-tim.com/material-dashboard-pro/assets/js/plugins/quill.min.js"></script>
    {{-- <script src="https://demos.creative-tim.com/material-dashboard-pro/assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="https://demos.creative-tim.com/material-dashboard-pro/assets/js/plugins/jkanban/jkanban.js"></script> --}}
    <script>
        if (document.getElementById('edit-deschiption')) {
          var quill = new Quill('#edit-deschiption', {
            theme: 'snow' // Specify theme in configuration
          });
        };

        if (document.getElementById('choices-category')) {
          var element = document.getElementById('choices-category');
          const example = new Choices(element, {
            searchEnabled: false
          });
        };

        if (document.getElementById('choices-sizes')) {
          var element = document.getElementById('choices-sizes');
          const example = new Choices(element, {
            searchEnabled: false
          });
        };

        if (document.getElementById('choices-currency')) {
          var element = document.getElementById('choices-currency');
          const example = new Choices(element, {
            searchEnabled: false
          });
        };

        if (document.getElementById('choices-tags')) {
          var tags = document.getElementById('choices-tags');
          const examples = new Choices(tags, {
            removeItemButton: true
          });

          examples.setChoices(
            [{
                value: 'One',
                label: 'Expired',
                disabled: true
              },
              {
                value: 'Two',
                label: 'Out of Stock',
                selected: true
              }
            ],
            'value',
            'label',
            false,
          );
        }
      </script>
@endsection
