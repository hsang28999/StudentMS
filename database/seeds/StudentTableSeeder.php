<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        function loaibotiengviet ($str){

            $unicode = array(

                'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',

                'd'=>'đ',

                'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',

                'i'=>'í|ì|ỉ|ĩ|ị',

                'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',

                'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',

                'y'=>'ý|ỳ|ỷ|ỹ|ỵ',

                'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',

                'D'=>'Đ',

                'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',

                'I'=>'Í|Ì|Ỉ|Ĩ|Ị',

                'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',

                'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',

                'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ',

            );

            foreach($unicode as $nonUnicode=>$uni){

                $str = preg_replace("/($uni)/i", $nonUnicode, $str);

            }

            return $str;

        }
        $firstName = ['Nguyễn','Chu','Vương','Nhiếp','Trần','Hoàng','Lê','Lý','Mai','Phạm'];
        $surName = ['Nhật','Bảo','Mỹ','Minh','Bá','','Thanh'];
        $lastName = ['Sang','Vượng','Hoàng','Hùng','Điệp','Anh','Chi','Hương','Tươi'];
        for($i=0;$i<120;$i++){
            $name1 = $firstName[mt_rand(0,count($firstName)-1)];
            $name2 = $surName[mt_rand(0,count($surName )- 1)];
            $name3 = $lastName[mt_rand(0,count($lastName )- 1)];
            DB::table('students')->insert([
                [

                    'studentCode' => 'A00'.($i+1),
//                    'email' => loaibotiengviet('Nguyễn').gmail.com
                    'email' => loaibotiengviet($name1).loaibotiengviet($name2).loaibotiengviet($name3).mt_rand(1000,9000).'@gmail.com',
                    'address' => str_random(10),
                    'gender' => mt_rand(0,1),
                    'dateOfBirth' => '19'.mt_rand(90,99).'-'.mt_rand(1,12).'-'.mt_rand(1,28),
                    'phoneNumber' => '0'.mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9).mt_rand(0,9),
                    'studentName' => $name1.' '.$name2.' '.$name3,
                    'classes_classId' => mt_rand(1,15),
                    'created_at' =>  \Illuminate\Support\Carbon::now('Asia/Ho_Chi_Minh'),
                    'updated_at' =>  \Illuminate\Support\Carbon::now('Asia/Ho_Chi_Minh'),
                ]


            ]);
        }

    }

}
