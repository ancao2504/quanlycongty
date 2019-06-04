<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('member')->insert([
            array('del_flag'=>false, 'username'=> 'sample_1', 'password'=>encrypt('123456'), 'fullname'=>'Nguyễn Hà Minh Huy', 'is_male'=>true, 'birthday'=>'1997-06-21', 'email'=>'minhhuy97.ptit@gmail.com', 'phone'=>'0794755005', 'picture'=>'avatar_1.jpg', 'access_level'=>21, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_2', 'password'=>encrypt('123456'), 'fullname'=>'Dương Đình Hạnh', 'is_male'=>true, 'birthday'=>'1997-02-03', 'email'=>'dinhhanh@gmail.com', 'phone'=>'0978442451', 'picture'=>'avatar_2.jpg', 'access_level'=>22, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_3', 'password'=>encrypt('123456'), 'fullname'=>'Vũ Đức Tài', 'is_male'=>true, 'birthday'=>'1997-03-15', 'email'=>'ductai@gmail.com', 'phone'=>'0985738599', 'picture'=>'avatar_3.jpg', 'access_level'=>22, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_4', 'password'=>encrypt('123456'), 'fullname'=>'Trần Hữu Thế', 'is_male'=>true, 'birthday'=>'1997-09-11', 'email'=>'huuthe@gmail.com', 'phone'=>'0794458890', 'picture'=>'avatar_4.jpg', 'access_level'=>22, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_5', 'password'=>encrypt('123456'), 'fullname'=>'Nguyễn Tấn Luông', 'is_male'=>true, 'birthday'=>'1997-07-22', 'email'=>'tanluong@gmail.com', 'phone'=>'0333334566', 'picture'=>'avatar_5.jpg', 'access_level'=>22, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_6', 'password'=>encrypt('123456'), 'fullname'=>'Đặng Hoàng Khang', 'is_male'=>true, 'birthday'=>'1997-02-11', 'email'=>'hoangkhang@gmail.com', 'phone'=>'0924455448', 'picture'=>'avatar_6.jpg', 'access_level'=>22, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_7', 'password'=>encrypt('123456'), 'fullname'=>'Nguyễn Phương Nam', 'is_male'=>true, 'birthday'=>'1997-04-22', 'email'=>'phuongnam@gmail.com', 'phone'=>'0973755897', 'picture'=>'avatar_7.jpg', 'access_level'=>22, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_8', 'password'=>encrypt('123456'), 'fullname'=>'Lưu Hoàng Trung', 'is_male'=>true, 'birthday'=>'1997-08-11', 'email'=>'hoangtrung@gmail.com', 'phone'=>'0794433856', 'picture'=>'avatar_8.jpg', 'access_level'=>22, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_9', 'password'=>encrypt('123456'), 'fullname'=>'Phạm Thị Thùy Trang', 'is_male'=>false, 'birthday'=>'1997-08-19', 'email'=>'thuytrang@gmail.com', 'phone'=>'0994555343', 'picture'=>'avatar_9.jpg', 'access_level'=>22, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_10', 'password'=>encrypt('123456'), 'fullname'=>'Trần Nhật Tường', 'is_male'=>true, 'birthday'=>'1997-08-17', 'email'=>'nhattuong@gmail.com', 'phone'=>'0794663455', 'picture'=>'avatar_10.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_11', 'password'=>encrypt('123456'), 'fullname'=>'Văn Trần Trúc Phương', 'is_male'=>false, 'birthday'=>'1997-09-19', 'email'=>'trucphuong@gmail.com', 'phone'=>'0794544755', 'picture'=>'avatar_11.jpg', 'access_level'=>23, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_12', 'password'=>encrypt('123456'), 'fullname'=>'Nguyễn Thị Thanh Thảo', 'is_male'=>false, 'birthday'=>'1997-02-21', 'email'=>'thanhthao@gmail.com', 'phone'=>'0794788005', 'picture'=>'avatar_12.jpg', 'access_level'=>23, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_13', 'password'=>encrypt('123456'), 'fullname'=>'Trần Thanh Lộc', 'is_male'=>true, 'birthday'=>'1997-08-01', 'email'=>'thanhloc@gmail.com', 'phone'=>'0793456005', 'picture'=>'avatar_13.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_14', 'password'=>encrypt('123456'), 'fullname'=>'Đinh Hoài Hiệp', 'is_male'=>true, 'birthday'=>'1997-07-12', 'email'=>'hoaihiep@gmail.com', 'phone'=>'0798873475', 'picture'=>'avatar_14.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_15', 'password'=>encrypt('123456'), 'fullname'=>'Nguyễn Hữu Thắng', 'is_male'=>true, 'birthday'=>'1997-04-19', 'email'=>'huuthang@gmail.com', 'phone'=>'0793453475', 'picture'=>'avatar_15.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_16', 'password'=>encrypt('123456'), 'fullname'=>'Phạm Trường Thiên Ân', 'is_male'=>true, 'birthday'=>'1997-03-14', 'email'=>'thienan@gmail.com', 'phone'=>'0798855475', 'picture'=>'avatar_16.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_17', 'password'=>encrypt('123456'), 'fullname'=>'Trần Thanh Hiệp', 'is_male'=>true, 'birthday'=>'1997-02-27', 'email'=>'thanhhiep@gmail.com', 'phone'=>'0798873345', 'picture'=>'avatar_17.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_18', 'password'=>encrypt('123456'), 'fullname'=>'Vũ Đức Nguyện', 'is_male'=>true, 'birthday'=>'1997-07-25', 'email'=>'ducnguyen@gmail.com', 'phone'=>'0798873412', 'picture'=>'avatar_18.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_19', 'password'=>encrypt('123456'), 'fullname'=>'Vương Hữu Nhơn', 'is_male'=>true, 'birthday'=>'1997-07-27', 'email'=>'huunhon@gmail.com', 'phone'=>'0798823475', 'picture'=>'avatar_19.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_20', 'password'=>encrypt('123456'), 'fullname'=>'Nguyễn Tấn Tài', 'is_male'=>true, 'birthday'=>'1997-07-29', 'email'=>'tantai@gmail.com', 'phone'=>'0798877875', 'picture'=>'avatar_20.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_21', 'password'=>encrypt('123456'), 'fullname'=>'Phan Thanh Liêm', 'is_male'=>true, 'birthday'=>'1997-07-29', 'email'=>'thanhliem@gmail.com', 'phone'=>'0798877875', 'picture'=>'avatar_21.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_22', 'password'=>encrypt('123456'), 'fullname'=>'Lâm Tiến Trung', 'is_male'=>true, 'birthday'=>'1997-08-18', 'email'=>'tientrung@gmail.com', 'phone'=>'0798898775', 'picture'=>'avatar_22.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_23', 'password'=>encrypt('123456'), 'fullname'=>'Đỗ Vạn Thành', 'is_male'=>true, 'birthday'=>'1997-04-16', 'email'=>'vanthanh@gmail.com', 'phone'=>'0798877875', 'picture'=>'avatar_23.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_24', 'password'=>encrypt('123456'), 'fullname'=>'Nguyễn Lê Thế Sinh', 'is_male'=>true, 'birthday'=>'1997-09-29', 'email'=>'thesinh@gmail.com', 'phone'=>'0798877875', 'picture'=>'avatar_24.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_25', 'password'=>encrypt('123456'), 'fullname'=>'Võ Thành Đạt', 'is_male'=>true, 'birthday'=>'1997-04-22', 'email'=>'thanhdat@gmail.com', 'phone'=>'0795677875', 'picture'=>'avatar_25.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_26', 'password'=>encrypt('123456'), 'fullname'=>'Phạm Ngọc Ẩn', 'is_male'=>true, 'birthday'=>'1997-02-19', 'email'=>'ngocanh@gmail.com', 'phone'=>'0798834575', 'picture'=>'avatar_26.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_27', 'password'=>encrypt('123456'), 'fullname'=>'Thi Đại Lộc', 'is_male'=>true, 'birthday'=>'1997-07-23', 'email'=>'dailoc@gmail.com', 'phone'=>'0798834575', 'picture'=>'avatar_27.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_28', 'password'=>encrypt('123456'), 'fullname'=>'Lê Duy Đạt', 'is_male'=>true, 'birthday'=>'1997-07-26', 'email'=>'duydat@gmail.com', 'phone'=>'0798877775', 'picture'=>'avatar_28.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_29', 'password'=>encrypt('123456'), 'fullname'=>'Nguyễn Ái Phương', 'is_male'=>false, 'birthday'=>'1997-02-09', 'email'=>'aiphuong@gmail.com', 'phone'=>'0798877275', 'picture'=>'avatar_29.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh')),
            array('del_flag'=>false, 'username'=> 'sample_30', 'password'=>encrypt('123456'), 'fullname'=>'Cao Thị Kim Ngân', 'is_male'=>false, 'birthday'=>'1997-07-29', 'email'=>'kimngan@gmail.com', 'phone'=>'0798877075', 'picture'=>'avatar_30.jpg', 'access_level'=>24, 'created_by'=>1, 'modified_by'=>null, 'created_at'=>Carbon::now('Asia/Ho_Chi_Minh'), 'updated_at'=>Carbon::now('Asia/Ho_Chi_Minh'))
        ]);
    }
}
