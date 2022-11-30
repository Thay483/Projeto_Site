<?php
 
namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Materia;
 
class MateriasSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materias')->insert([
            'nome' => 'amanha',
            'desc_minima' => 'dia amanha',
            'lim_min' => '1',
            'lim_max' => '10',
            'desc_completa' => 'dia apos de hoje',
           // 'status' => 'disponivel',
        ]);
    }
}















// namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// use Illuminate\Database\Seeder;

// class MateriasSeeder extends Seeder
// {
//     /**
//      * Run the database seeds.
//      *
//      * @return void
//      */
//     public function run()
//     {
//         //
//     }
// }
