<?php

namespace Database\Seeders;

use App\Models\Yard;
use Illuminate\Database\Seeder;

class YardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Yard::factory()->create([
            'name' => 'Sân bóng Đại học Nông Lâm',
            'price' => rand(100, 150),
            'img' => 'https://thethaophui.vn/Media/Places/070220055758/san-bong-dh-nong-lam.jpg',
            'slug'=>'san-bong-dai-hoc-nong-lam',
            'address' => '',
            'description' => 'Sân bóng nằm trong',
            'id_districts' => 1
        ]);
        Yard::factory()->create([
            'name' => 'Sân bóng Mười Thọ            ',
            'price' => rand(100, 150),
            'img' => 'https://thethaophui.vn/Media/Places/070220060150/Gallery/san-bong-muoi-tho-1.jpg',
            'slug'=>'san-bong-muoi-tho',
            'address' => '',
            'description' => 'Sân bóng nằm trong',
            'id_districts' => 1
        ]);
        Yard::factory()->create([
            'name' => 'Sân bóng mini Bình Chiểu            ',
            'price' => rand(100, 150),
            'img' => 'https://thegioithethao.vn/upload_images/images/2021/04/08/san-bong-da-mini-binh-trieu1.jpg',
            'slug'=>'san-bong-mini-binh-chieu',
            'address' => '',
            'description' => 'Sân bóng nằm trong',
            'id_districts' => 1
        ]);
        Yard::factory()->create([
            'name' => 'Sân bóng đá Nhật Vượng            ',
            'price' => rand(100, 150),
            'img' => 'https://thegioithethao.vn/upload_images/images/2021/04/08/san-bong-da-nhat-vuong1.jpg',
            'slug'=>'san-bong-da-nhat-vuong',
            'address' => '20 Số 4, Chung cư, Thủ Đức, Thành phố Hồ Chí Minh',
            'description' => 'Sân bóng nằm trong',
            'id_districts' => 1
        ]);
        Yard::factory()->create([
            'name' => 'Sân bóng Bình Lợi            ',
            'slug'=>'san-bong-binh-loi',
            'price' => rand(100, 150),
            'img' => 'https://www.tapdoanconhantao.com/wp-content/uploads/2019/09/1-1.jpg',
            'address' => '',
            'description' => 'Sân bóng nằm trong',
            'id_districts' => 1
        ]);
        Yard::factory()->create([
            'name' => 'Sân bóng CLB Bóng Đá Quang Tuyến 3            ',
            'slug'=>'san-bong-clb-bong-da-quang-tuyen-3',
            'price' => rand(100, 150),
            'img' => 'https://dulieubongda.net/wp-content/uploads/2021/03/sb-quang-tuyen-3-1.jpg',
            'address' => '73 Phan Huy Ích, Phường 12, Gò Vấp, Thành phố Hồ Chí Minh, Việt Nam',
            'description' => 'Sân bóng CLB Bóng Đá Quang Tuyến 3 được đầu tư xây dựng gồm 1 sân đơn 5 người đá, với kích thước sân 20x40m.

            Được đầu tư khai thác một thời gian dài nên mặt sân bóng Quang Tuyến 3 có dấu hiệu xuống cấp, mặt cỏ xước và gãy ngọn nhiều. Hệ thống đèn chiếu còn tốt. Sân sẽ tuyệt vời hơn khi được nâng cấp và cải thiện phần mặt cỏ. Tuy nhiên với giá thuê sân rẻ và không gian thoáng mát nên sân vẫn là địa điểm yêu thích của nhiều phủi thủ.',
            'id_districts' => 12
        ]);
        Yard::factory()->create([
            'name' => 'Sân bóng đá Cây Trâm            ',
            'slug'=>'san-bong-da-cay-tram',
            'price' => rand(100, 150),
            'img' => 'https://thegioithethao.vn/upload_images/images/2021/04/08/san-bong-da-cay-tram.jpg',
            'address' => '',
            'description' => 'Sân bóng nằm trong',
            'id_districts' => 12
        ]);
        Yard::factory()->create([
            'name' => 'Sân bóng đá An Hội            ',
            'slug'=>'san-bong-an-hoi',
            'price' => rand(100, 150),
            'img' => 'https://thegioithethao.vn/upload_images/images/2021/04/08/san-bong-da-an-hoi.jpg',
            'address' => '256 Phan Huy Ích, P. 12, Gò Vấp, Thành phố Hồ Chí Minh',
            'description' => 'Sân bóng đá An Hội được đầu tư khai thác gồm 3 cụm sân cỏ nhân tạo 5 người chơi. Lòng sân có kích thước tiêu chuẩn 20x40m, tạo trải nghiệm thoải mái khi chơi cho các cầu thủ.Sân được đầu đầu tư với thống đèn chiếu sáng hiện đại, mặt cỏ tương đối mềm, không trơn.

            Mặc dù đã được khai thác đưa vào sử dụng khá lâu nhưng chất lượng sân vẫn rất tuyệt vời. Đặc biệt là tại sân dịch vụ cho thuê đồ thi đấu rất tiện ích, nhanh chóng khi mà các cầu thủ quên mang đồ tham gia đi theo.',
            'id_districts' => 12
        ]);
    }
}
