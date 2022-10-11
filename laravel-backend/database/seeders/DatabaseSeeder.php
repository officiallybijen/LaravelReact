<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use \App\Models\product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        product::factory()->create([
            'name'=>'Raptors Jersy 2022/23',
            'price'=>5000,
            'image'=>'https://media.bleacherreport.com/image/upload/w_800,h_533,c_fill/v1635774603/j2l6jcq4aq6cqbzqrtyy.jpg'

        ]);

        product::factory()->create([
            'name'=>'Brooklyn Jersy 2022/23',
            'price'=>12220,
            'featured'=>1,
            'image'=>'https://i.insider.com/61814a881037b10018155943?width=1000&format=jpeg&auto=webp'


        ]);

        product::factory()->create([
            'name'=>'Hornets Jersy 2022/23',
            'price'=>14520,
            'image'=>'https://cdn.nba.com/manage/2021/12/lamelo-ball-hornets-jersey-cropped.jpg'


        ]);
 
        product::factory()->create([
            'name'=>'Lakers Jersy 2022/23',
            'price'=>12230,
            'image'=>'https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/019acd9b-fd80-4ddd-902d-4b96e28a0671/lebron-james-lakers-nba-swingman-jersey-GTRSXs.png'
        ]);

        product::factory()->create([
            'name'=>'Trailblazers Jersy 2022/23',
            'price'=>15530,
            'image'=>'https://s3.amazonaws.com/nikeinc/assets/105518/PortlandTrailblazers_FINAL_square_1600.jpg?1635546589'
        ]);

        product::factory()->create([
            'name'=>'KD 15 "Light Lemon Twist"',
            'price'=>29000,
            'featured'=>1,
            'image'=>' https://sneakernews.com/wp-content/uploads/2022/04/Nike-KD-15-DM1056-700-4.jpg'
        ]);

    }
}
