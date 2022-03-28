<x-client-layout title="Trang chủ">
    <section class="booking-bar">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="banner-image swiper-slide">
                    <img src="{{ asset('frontend/images/banner1.png') }}" alt="" />
                </div>
                <div class="banner-image swiper-slide">
                    <img src="{{ asset('frontend/images/banner2.png') }}" alt="" />
                </div>
                <div class="banner-image swiper-slide">
                    <img src="{{ asset('frontend/images/banner3.png') }}" alt="" />
                </div>
            </div>
        </div>
        <div class="booking-list">
            <div class="booking-item" data-aos="fade-up" data-aos-duration="1000">
                <div class="booking-content">
                    <h1>Football Yard System</h1>
                    <h3>Tìm đối thủ nhanh chóng - <span>Uy tín - Chất lượng</span></h3>
                    <p class="btn">cáp kèo ngay</p>
                </div>
                <div class="booking-bar-form">
                    <div class="input-name form-group">
                        <input type="text" name="" id="" placeholder="tên quận hoặc tên sân bóng"
                            class="form-control" />
                    </div>
                    <div class="input-date form-group">
                        <input type="date" name="" id="" placeholder="11/01/2022" class="form-control" />
                    </div>
                    <div class="input-time form-group">
                        <input type="time" name="" id="" placeholder="10:30" class="form-control" />
                    </div>
                    <div class="input-btn">
                        <a href="yard"><input type="submit" class="btn" value="tìm kiếm" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->
    <!-- yard section start -->
    <section class="category" id="category">
        <div class="category-heading" data-aos="fade-up" data-aos-duration="1000">
            <div class="heading-title">
                <h1 class="heading-title">Tìm sân <span>theo quận</span></h1>
            </div>
            <div class="heading-title-all">
                <a href="yard.html">
                    <h2 class="heading-title-all">xem tất cả</h2>
                </a>
                <i class='bx bx-chevrons-right'></i>
            </div>
        </div>
        <div class="category-list swiper" data-aos="fade-left" data-aos-duration="1000">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="category-item">
                        <img src="{{ asset('frontend/images/san1.jpg') }}" alt="" class="category-img">
                        <div class="category-text">
                            <h2 class="category-title">Quận 1</h2>
                            <p class="count">2 sân</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-item">
                        <img src="{{ asset('frontend/images/san2.jpg') }}" alt="" class="category-img">
                        <div class="category-text">
                            <h2 class="category-title">Quận bình thạnh</h2>
                            <p class="count">5 sân</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-item">
                        <img src="{{ asset('frontend/images/san3.jpg') }}" alt="" class="category-img">
                        <div class="category-text">
                            <h2 class="category-title">Quận tân bình</h2>
                            <p class="count">10 sân</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-item">
                        <img src="{{ asset('frontend/images/san4.jpg') }}" alt="" class="category-img">
                        <div class="category-text">
                            <h2 class="category-title">Quận gò vấp</h2>
                            <p class="count">2 sân</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-item">
                        <img src="{{ asset('frontend/images/san5.jpg') }}" alt="" class="category-img">
                        <div class="category-text">
                            <h2 class="category-title">Quận 5</h2>
                            <p class="count">2 sân</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-item">
                        <img src="{{ asset('frontend/images/san6.jpg') }}" alt="" class="category-img">
                        <div class="category-text">
                            <h2 class="category-title">Quận 3</h2>
                            <p class="count">2 sân</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-item">
                        <img src="{{ asset('frontend/images/san7.jpg') }}" alt="" class="category-img">
                        <div class="category-text">
                            <h2 class="category-title">Quận 2</h2>
                            <p class="count">2 sân</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="category-item">
                        <img src="{{ asset('frontend/images/san8.jpg') }}" alt="" class="category-img">
                        <div class="category-text">
                            <h2 class="category-title">Quận 7</h2>
                            <p class="count">2 sân</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        </div>
    </section>
    <!-- yard section end -->
    <!-- yard hot section start-->
    <section class="yard-hot" id="yard-hot">
        <div class="yard-hot-heading" data-aos="fade-up" data-aos-duration="1000">
            <div class="heading-title">
                <h1 class="heading-title">Sân nhiều <span>người đặt</span></h1>
            </div>
            <div class="heading-title-all">
                <a href="/san">
                    <h2 class="heading-title-all">xem tất cả</h2>
                </a>
                <i class='bx bx-chevrons-right'></i>
            </div>
        </div>
        <div class="yard-hot-list swiper">
            <div class="swiper-wrapper">
                @foreach ($yard as $show)
                <div class="swiper-slide">
                            <a href="{{$show->slug}}">
                        <div class="yard-hot-item">
                            <div class="yard-hot-image">
                            @if (Storage::exists($show->img))
                                <img src="{{ Storage::url($show->img) }}" alt="" class="yard-img">
                            @else
                                <img src="{{ $show->img }}" alt="" class="yard-img">
                            @endif

                                {{-- <img src="{{ Storage::url($show->img) }}" alt="" class="yard-img"> --}}
                            </div>
                            <div class="yard-hot-text">
                                <div class="yard-hot-type">
                                    <span>Sân 5 - sân 7</span>
                                </div>
                                <div class="yard-hot-price">
                                    <p>{{ $show->price }}.000 VND/giờ</p>
                                </div>
                            </div>
                            <div class="yard-hot-content">
                                <h2 class="yard-hot-title">{{ $show->name }}</h2>
                                <p class="yard-hot-location">{{ $show->address }}</p>
                            </div>
                        </div>
                    </a>
                    </div>
                @endforeach
            </div>
            <div class="swiper-pagination"></div>
        </div>
        </div>
    </section>
    <!-- yard hot section end-->
    <div class="banner-small" data-aos="fade-zoom-in" data-aos-duration="500">
        <img src="{{ asset('frontend/images/banner5.jpg') }}" alt="">

    </div>
    <!-- testimonial section start -->
    <section class="testimonial" id="testimonil">
        <div class="heading" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="heading-title">Đánh giá</h1>
        </div>
        <div class="testimonial-list swiper" data-aos="fade-left" data-aos-duration="1000">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <i class='bx bxs-quote-left'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                            numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                            nisi delectus ut quis quam veniam praesentium dolorem.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <img src="{{ asset('frontend/images/ronaldo.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <i class='bx bxs-quote-left'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                            numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                            nisi delectus ut quis quam veniam praesentium dolorem.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <img src="{{ asset('frontend/images/neymar.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <i class='bx bxs-quote-left'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                            numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                            nisi delectus ut quis quam veniam praesentium dolorem.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <img src="{{ asset('frontend/images/messi.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <i class='bx bxs-quote-left'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                            numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                            nisi delectus ut quis quam veniam praesentium dolorem.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <img src="{{ asset('frontend/images/mbappe.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <i class='bx bxs-quote-left'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                            numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                            nisi delectus ut quis quam veniam praesentium dolorem.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <img src="{{ asset('frontend/images/halland.jpeg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <i class='bx bxs-quote-left'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                            numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                            nisi delectus ut quis quam veniam praesentium dolorem.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <img src="{{ asset('frontend/images/ozil.jpg') }}" alt="">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <i class='bx bxs-quote-left'></i>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis voluptatum impedit magni
                            numquam? Soluta voluptas similique dignissimos doloremque recusandae sapiente fugiat hic,
                            nisi delectus ut quis quam veniam praesentium dolorem.</p>
                        <div class="stars">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </div>
                        <img src="{{ asset('frontend/images/verrati.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- testimonial section end -->
    <!-- blog section start -->
    <section class="blog" id="blog">
        <div class="heading" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="heading-title">tin tức<span> mới nhất</span></h1>
        </div>
        <div class="blog-list" data-aos="fade-left" data-aos-duration="1000">
            <div class="blog-item">
                <div class="blog-image">
                    <img src="{{ asset('frontend/images/blog1.jpg') }}" alt="" class="blog-img">
                </div>
                <div class="blog-content">
                    <span>Thứ Bảy 15/01/2022 15:55</span>
                    <h2>Bruno Fernandes: Từ người hùng hóa người thừa ở Old Trafford?</h2>
                    <p>Không còn hình ảnh thăng hoa bùng nổ như hai mùa giải đầu tiên trong màu áo Manchester United,
                        Bruno Fernandes hiện tại năm nay sa sút phong độ rõ rệt</p>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-image">
                    <img src="{{ asset('frontend/images/blog2.jpg') }}" alt="" class="blog-img">
                </div>
                <div class="blog-content">
                    <span>Thứ Bảy 15/01/2022 10:15</span>
                    <h2>Man City vs Chelsea (19h30 ngày 15/1): Tất cả kỳ vọng vào The Blues</h2>
                    <p>Ngoài NHM Chelsea thì những CĐV trung lập đều đứng về phía The Blues ở trận đấu với Man City, qua
                        đó chờ đợi cuộc đua vô địch hấp dẫn hơn trong phần còn lại của mùa giải.</p>
                </div>
            </div>
            <div class="blog-item">
                <div class="blog-image">
                    <img src="{{ asset('frontend/images/blog3.jpg') }}" alt="" class="blog-img">
                </div>
                <div class="blog-content">
                    <span>Thứ Bảy 15/01/2022 15:55</span>
                    <h2>Nếu Rüdiger cứ đá thế này, Chelsea sẽ phải xuống nước</h2>
                    <p>Có một câu chuyện đang xảy ra đều đặn như việc rửa mặt hàng ngày: Chelsea chơi tốt một trận, để
                        rồi sau đó người hâm mộ lại cầu xin CLB trao cho Antonio Rüdiger một bản hợp đồng mới.</p>
                </div>
            </div>
        </div>
        <a href="" class="btn">xem thêm</a>
    </section>
</x-client-layout>
