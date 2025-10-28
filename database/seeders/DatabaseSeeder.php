<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $categories = [
            ['id'=>'1','name' => 'أحذية', 'description' => 'إلكترويات وأجهزة منزلية متنوعة','imagepath' => 'assets/img/4.jpg'],
            ['id'=>'2','name' => 'كتب', 'description' => 'مجموعة متنوعة من الكتب في مختلف المجالات','imagepath' => 'assets/img/2.jpg'],
            ['id'=>'3','name' => 'ملابس', 'description' => 'ملابس جاهزة للرجال والنساء والأطفال','imagepath' => 'assets/img/3.jpg'],
            ['id'=>'4','name' => 'إلكترونيات', 'description' => 'ملابس جاهزة للرجال والنساء والأطفال','imagepath' => 'assets/img/4.jpg'],
            ['id'=>'5','name' => 'طعام', 'description' => 'ملابس جاهزة للرجال والنساء والأطفال','imagepath' => 'assets/img/1.jpg'],
            ['id'=>'6','name' => ' ملابس جاهزة', 'description' => 'ملابس جاهزة للرجال والنساء والأطفال','imagepath' => 'assets/img/5.jpg'],
            ['id'=>'7','name' => 'مأكولات بحرية', 'description' => 'ملابس جاهزة للرجال والنساء والأطفال','imagepath' => 'assets/img/6.jpg'],
            ['id'=>'8','name' => 'ساعات', 'description' => 'ملابس جاهزة للرجال والنساء والأطفال','imagepath' => 'assets/img/7.jpg'],
            ['id'=>'9','name' => 'مأكولات', 'description' => 'ملابس جاهزة للرجال والنساء والأطفال','imagepath' => 'assets/img/8.jpg'],
            ['id'=>'10','name' => 'شنط', 'description' => 'ملابس جاهزة للرجال والنساء والأطفال','imagepath' => 'assets/img/9.jpg'],
            ['id'=>'11','name' => 'طعام', 'description' => 'ملابس جاهزة للرجال والنساء والأطفال','imagepath' => 'assets/img/10.jpg'],
        ];

        for ($i = 1; $i <= 20; $i++) {
            Product::create([
                'name' => 'منتج ' . $i,
                'description' => 'وصف المنتج ' . $i,
                'price' => rand(10, 500),
                'quantity' => rand(1, 50),
                'imagepath' => 'assets/img/' . rand(1, 16) . '.jpg',
                'category_id' => rand(1, 11),
            ]);
        }






        DB::table('categories')->insertOrIgnore($categories);

        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
