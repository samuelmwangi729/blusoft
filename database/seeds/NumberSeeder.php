<?php

use Illuminate\Database\Seeder;
use App\Number;
class NumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $number=[];
        for($i=0;$i<99999;$i++){

            array_push($number,"+2547".rand(00000000,99999999));
        }
        for($i=0;$i<count($number);$i++){
            Number::create([
              'number'=>$number[$i],
              'status'=>'1'
            ]);
        }
    }
}
