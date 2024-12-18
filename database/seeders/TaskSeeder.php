<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tasks = [
            [
                'title' => 'Đi chợ mua rau',
                'description' => 'Mua rau muống, rau cải, cà chua, hành lá',
                'long_description' => 'Nhớ mua rau sạch, rau hữu cơ ở cửa hàng uy tín. Chú ý chọn rau tươi, không bị dập nát.',
                'completed' => false,
            ],
            [
                'title' => 'Hoàn thành báo cáo',
                'description' => 'Hoàn thành báo cáo cuối tháng',
                'long_description' => 'Báo cáo cần bao gồm các số liệu về doanh thu, chi phí, lợi nhuận. Phân tích các yếu tố ảnh hưởng đến kết quả kinh doanh.',
                'completed' => true,
            ],
            [
                'title' => 'Học tiếng Anh',
                'description' => 'Học 30 từ vựng mới',
                'long_description' => null,
                'completed' => false,
            ],
            [
                'title' => 'Dọn dẹp nhà cửa',
                'description' => 'Quét dọn phòng khách, lau chùi bếp và nhà vệ sinh',
                'long_description' => 'Dùng nước lau sàn có hương chanh để làm sạch phòng khách. Chú ý vệ sinh các góc khuất và không để lại bụi bẩn.',
                'completed' => false,
            ],
            [
                'title' => 'Chuẩn bị bữa tối',
                'description' => 'Nấu canh chua, cá kho và rau luộc',
                'long_description' => 'Mua nguyên liệu tươi tại siêu thị. Ướp cá trước 30 phút để thấm gia vị. Chuẩn bị sẵn nước mắm chấm và rau sống.',
                'completed' => true,
            ],
            [
                'title' => 'Đọc sách',
                'description' => 'Đọc chương 3 và 4 của sách "Đắc Nhân Tâm"',
                'long_description' => 'Tập trung vào nội dung về cách giao tiếp hiệu quả và xây dựng mối quan hệ tốt. Ghi chú lại các ý chính.',
                'completed' => false,
            ],
            [
                'title' => 'Tập thể dục buổi sáng',
                'description' => 'Chạy bộ và tập yoga',
                'long_description' => 'Chạy bộ 3km quanh công viên và thực hiện bài tập yoga cơ bản trong 20 phút. Đừng quên khởi động trước khi chạy.',
                'completed' => true,
            ],
        ];


        foreach ($tasks as $task) {
            Task::create($task);
        }
    }

}
