<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create(['id'=>1,'name'=>'Nieuws','description'=>'Zie hier het nieuwste nieuws!','deo'=>0,'isImportant'=>1,'isText'=>1]);
        App\Category::create(['id'=>2,'name'=>'Stunts','description'=>'Kijk, gekke stunts','deo'=>0,'isImportant'=>1,'isText'=>0]);
        App\Category::create(['id'=>3,'name'=>'Liederen','description'=>'Gekke liedjes, leuk!','deo'=>0,'isImportant'=>0,'isText'=>1]);
        App\Category::create(['id'=>4,'name'=>'Nieuwe Fausten','description'=>'Oef fausten, vet kut','deo'=>1,'isImportant'=>0,'isText'=>1]);
    }
}
