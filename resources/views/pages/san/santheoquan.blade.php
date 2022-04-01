<x-client-layout title="Danh sách tất cả sân">
 <!-- yard section start -->
 <section class="booking-options">
  <div class="booking-form-options">
   <div class="booking-search-form">
       <div class="input-name form-group">
         <form action="/san/search" method="GET">
         <input
           type="text"
           name="key"
           placeholder="tên quận hoặc tên sân bóng"
           class="form-control"
         />
       </div>
       <div class="input-date form-group">
         <input
           type="date"
           name=""
           id=""
           placeholder="11/01/2022"
           class="form-control"
         />
       </div>
       <div class="input-time form-group">
         <input
           type="time"
           name=""
           id=""
           placeholder="10:30"
           class="form-control"
         />
       </div>
       <div class="input-btn">
         <input type="submit" class="btn" value="tìm kiếm" />
       </div>
   </div>
   </form>
   <div class="booking-filter-form">
     <ul class="filter-list">
       <li class="filter-item filter-half">
         <button onclick="showDropdown()" type="button" class="dropdown-filter">
           <h2>Quận / Huyện</h2>
           <span>Tp. Hồ Chí Minh</span>
           <i class='bx bxs-down-arrow'></i>
         </button>
         <div class="dropdown-content" id="dropMenu" >
           <div class="dropdown-content-left">
             <div class="location-content">
               <input type="checkbox" id="Quận 1">
               <label for="Quận 1">Quận 1</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 2">
               <label for="Quận 2">Quận 2</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 3">
               <label for="Quận 3">Quận 3</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 4">
               <label for="Quận 4">Quận 4</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 5">
               <label for="Quận 5">Quận 5</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 6">
               <label for="Quận 6">Quận 6</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 7">
               <label for="Quận 7">Quận 7</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 8">
               <label for="Quận 8">Quận 8</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 9">
               <label for="Quận 9">Quận 9</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 10">
               <label for="Quận 10">Quận 10</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 11">
               <label for="Quận 11">Quận 11</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận 12">
               <label for="Quận 12">Quận 12</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận tân bình">
               <label for="Quận tân bình">Quận tân bình</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận bình tân">
               <label for="Quận bình tân">Quận bình tân</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận bình thạnh">
               <label for="Quận bình thạnh">Quận 1</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận gò vấp">
               <label for="Quận gò vấp">Quận gò vấp</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận tân phú">
               <label for="Quận tân phú">Quận tân phú</label>
             </div>
             <div class="location-content">
               <input type="checkbox" id="Quận phú nhuận">
               <label for="Quận phú nhuận">Quận phú nhuận</label>
             </div>
           </div>
         </div>
       </li>
       <li class="filter-item">
         <button onclick="showDropDownType()" type="button" class="dropdown-filter">
           <h2>Loại sân</h2>
           <span>sân 5</span>
           <i class='bx bxs-down-arrow'></i>
         </button>
         <div class="dropdown-type">
           <ul class="dropdown-type-list"  id="dropDownType">
             <li class="dropdown-type-item">sân 5</li>
             <li class="dropdown-type-item">sân 7</li>
             <li class="dropdown-type-item">sân 11</li>
           </ul>
         </div>
       </li>
       <li class="filter-item">
         <button onclick="showDropDownTime()" type="button" class="dropdown-filter">
           <h2>Thời gian</h2>
           <span>1 tiếng</span>
           <i class='bx bxs-down-arrow'></i>
         </button>
         <div class="dropdown-time">
           <ul class="dropdown-time-list"  id="dropDownTime">
             <li class="dropdown-time-item">1 tiếng</li>
             <li class="dropdown-time-item">1.5 tiếng</li>
             <li class="dropdown-time-item">2 tiếng</li>
           </ul>
         </div>
       </li>
     </ul>
   </div>
  </div>
</section>
 <section class="yard" id="yard">
    <div class="heading">
      <h1 class="heading-title">sân tại <span>bỏ name dô dùm tui nha</span></h1>
    </div>
  </div>
  <div class="yard-list">
    @foreach ($yards as $show)
      
    <div class="yard-item">
      <div class="yard-image">
        <a href="san/{{$show->id}}">
          <img src="{{Storage::url($show->img)}}" alt="" class="yard-img">
        </a>
      </div>
      <div class="yard-text">
        <div class="yard-type">
          <span>Sân 5 - sân 7</span>
        </div>
        <div class="yard-price">
          <p>{{$show->price}}.000 VND/giờ</p>
        </div>
      </div>
      <div class="yard-content">
        <h2 class="yard-title">{{$show->name}}</h2>
        <p class="yard-location">{{$show->address}}</p>
      </div>
    </div>
    @endforeach
    {{-- <div class="yard-item">
      <div class="yard-image">
        <img src="{{asset ('frontend/images/sportplus.png')}}" alt="" class="yard-img">
      </div>
      <div class="yard-text">
        <div class="yard-type">
          <span>Sân 5 - sân 7</span>
        </div>
        <div class="yard-price">
          <p>250.000 VND/giờ</p>
        </div>
      </div>
      <div class="yard-content">
        <h2 class="yard-title">Sân Chảo lửa</h2>
        <p class="yard-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
      </div>
    </div>
    <div class="yard-item">
      <div class="yard-image">
        <img src="{{asset ('frontend/images/celadon.png')}}" alt="" class="yard-img">
      </div>
      <div class="yard-text">
        <div class="yard-type">
          <span>Sân 5 - sân 7</span>
        </div>
        <div class="yard-price">
          <p>250.000 VND/giờ</p>
        </div>
      </div>
      <div class="yard-content">
        <h2 class="yard-title">Sân Chảo lửa</h2>
        <p class="yard-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
      </div>
    </div>
    <div class="yard-item">
      <div class="yard-image">
        <img src="{{asset ('frontend/images/d36hht.png')}}" alt="" class="yard-img">
      </div>
      <div class="yard-text">
        <div class="yard-type">
          <span>Sân 5 - sân 7</span>
        </div>
        <div class="yard-price">
          <p>250.000 VND/giờ</p>
        </div>
      </div>
      <div class="yard-content">
        <h2 class="yard-title">Sân Chảo lửa</h2>
        <p class="yard-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
      </div>
    </div>
    <div class="yard-item">
      <div class="yard-image">
        <img src="{{asset ('frontend/images/footballarena.jpg')}}" alt="" class="yard-img">
      </div>
      <div class="yard-text">
        <div class="yard-type">
          <span>Sân 5 - sân 7</span>
        </div>
        <div class="yard-price">
          <p>250.000 VND/giờ</p>
        </div>
      </div>
      <div class="yard-content">
        <h2 class="yard-title">Sân Chảo lửa</h2>
        <p class="yard-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
      </div>
    </div>
    <div class="yard-item">
      <div class="yard-image">
        <img src="{{asset ('frontend/images/santhoihoa.jpg')}}" alt="" class="yard-img">
      </div>
      <div class="yard-text">
        <div class="yard-type">
          <span>Sân 5 - sân 7</span>
        </div>
        <div class="yard-price">
          <p>250.000 VND/giờ</p>
        </div>
      </div>
      <div class="yard-content">
        <h2 class="yard-title">Sân Chảo lửa</h2>
        <p class="yard-location">30 Phan Thúc Duyện, P. 4, Quận Tân Bình, Hồ Chí Minh</p>
      </div>
    </div> --}}
  </div>
</section>
</x-client-layout>
