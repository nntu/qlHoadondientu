<?php

use Illuminate\Database\Seeder;

class donviTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('donvi')->truncate();
        DB::table('donvi')->insert([
            ['MST' => '1801201221', 'tendonvi' => 'DNTN TU TRUONG'],
            ['MST' => '1801209220', 'tendonvi' => 'CTY TNHH MTV 9999'],
            ['MST' => '1801420463', 'tendonvi' => 'CTY TNHH TMDV TRONG VIET'],
            ['MST' => '0102721191-030', 'tendonvi' => 'CN CTY CP TMDV CONG VANG TAI CT'],
            ['MST' => '0301241545-005', 'tendonvi' => 'CN CTY TNHH MAY THEU GIAY AN PHUOC'],
            ['MST' => '030569705', 'tendonvi' => 'CTY TNHH TMDV DU LICH KS THIEN THAO'],
            ['MST' => '0305908036', 'tendonvi' => 'CTY TNHH MTV KS SEN VIET'],
            ['MST' => '0314294897-005', 'tendonvi' => 'CTY CP AKA HOUSE'],
            ['MST' => '1800155156-003', 'tendonvi' => 'CN CTY TNHH MTV 622 NHA HANG KS NK'],
            ['MST' => '1800325552', 'tendonvi' => 'BAO CAN THO'],
            ['MST' => '1800354271', 'tendonvi' => 'DNTN NHA HANG VINH KY'],
            ['MST' => '1800495522', 'tendonvi' => 'DNTN VEN SONG'],
            ['MST' => '1800546375', 'tendonvi' => 'CTY TNHH VINH HOANG'],
            ['MST' => '1800546671', 'tendonvi' => 'CTY TNHH SX DV KHAC DAU TIEN DUNG'],
            ['MST' => '1800606715', 'tendonvi' => 'CTY TNHH CO KHI VA QUANG CAO HUY NAM'],
            ['MST' => '1800611923', 'tendonvi' => 'CTY TNHH TMDV VIEN THONG NINH KIEU'],
            ['MST' => '1800612620', 'tendonvi' => 'CTY TNHH TMDV DEP DOI'],
            ['MST' => '1800682307', 'tendonvi' => 'CTY CP SX TM TAN DUC THANH'],
            ['MST' => '1800730279', 'tendonvi' => 'CTY TNHH TM &DV QC HAI LUU'],
            ['MST' => '1800789804', 'tendonvi' => 'CTY TNHH TM& DV CAY BUOI'],
            ['MST' => '1800900202', 'tendonvi' => 'CTY TNHH MTV LINH CAT'],
            ['MST' => '1801188612', 'tendonvi' => 'CTY TNHH MTVTM VA SX KIM TIEN THANH'],
            ['MST' => '1801298830', 'tendonvi' => 'CTY TNHH MTV THUAN KIEU 368'],
            ['MST' => '1801331439', 'tendonvi' => 'CTY CP TM DU LICH CAM THI GIANG'],
            ['MST' => '1801463996', 'tendonvi' => 'CTY TNHH TMDV SX DONG HA'],
            ['MST' => '1801464213', 'tendonvi' => 'CTY TNHH SAO MAI QUAN']
        ]);
    }
}
