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
            'nome' => 'Administração',
            'desc_minima' => 'Carga horária: 3020 - Duração: 4 anos',
            'lim_min' => '2',
            'lim_max' => '10',
            'desc_completa' => 'Disciplina que orienta os ingressantes a dominar a técnica gerencial e a compreender a responsabilidade da empresa na promoção do desenvolvimento econômico e social, respeitando o meio ambiente, as leis, as pessoas e as instituições.',
           // 'status' => 'disponivel',
        ]);
    
        DB::table('materias')->insert([
            'nome' => 'Fotografia',
            'desc_minima' => 'Carga horária: 1672 - Duração: 2 anos',
            'lim_min' => '2',
            'lim_max' => '10',
            'desc_completa' => 'Disciplina que orienta os ingressantes a dominar fundamentos técnicos relacionados à imagem fotográfica, analógica e digital.',
           // 'status' => 'disponivel',
        ]);
    
    
        DB::table('materias')->insert([
            'nome' => 'Farmácia',
            'desc_minima' => 'Carga horária: 4019 - Duração: 4 anos',
            'lim_min' => '2',
            'lim_max' => '10',
            'desc_completa' => 'Disciplina que orienta os ingressantes a dominar ações relacionadas ao fármaco e ao medicamento, com competência para desenvolver atividades de pesquisa, produção, distribuição, armazenamento do medicamento, entre outras.',
           // 'status' => 'disponivel',
        ]);
    
        DB::table('materias')->insert([
            'nome' => 'Biomedicina',
            'desc_minima' => 'Carga horária: 3232 - Duração: 4 anos',
            'lim_min' => '2',
            'lim_max' => '10',
            'desc_completa' => 'Disciplina que orienta os ingressantes a dominar análise clínicas, exames e pesquisa de doenças, oferencendo formação voltada à prática profissional.',
           // 'status' => 'disponivel',
        ]);
    
        DB::table('materias')->insert([
            'nome' => 'Serviço Social',
            'desc_minima' => 'Carga horária: 3000 - Duração: 4 anos',
            'lim_min' => '2',
            'lim_max' => '10',
            'desc_completa' => 'Disciplina que orienta os ingressantes a dominar conhecimentos teóricos-críticos diante da rrealidade, de modo a explicitar seus fundamentos históricos e teórico-metodológicos.',
           // 'status' => 'disponivel',
        ]);
    }
}
