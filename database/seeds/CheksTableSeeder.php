<?php

use Illuminate\Database\Seeder;

class CheksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $cheks= [
        ['id'=>1 ,  'question'=>'Conocías el medio en donde se publicó la noticia?'],
        ['id'=>2 ,  'question'=>'Tiene fecha de publicación?'],
        ['id'=>3 ,  'question'=>'Tiene autor?'],
        ['id'=>4 ,  'question'=>'Conocías al autor?'],
        ['id'=>5 ,  'question'=>'Se menciona alguna fuente de información?'],
        ['id'=>6 ,  'question'=>'Hay citas o testimonios?'],
        ['id'=>7 ,  'question'=>'Las fuentes de información o de los testimonios, te parecen ciertos?'],
        ['id'=>8 ,  'question'=>'Las fotos corresponden con la noticia?'],
        ['id'=>9 ,  'question'=>'Viste la noticia publicada en otro medio?'],
        ['id'=>10 , 'question'=>'Los comentarios de los lectores dicen que podría ser una fake news?']
      ];

        DB::table('cheks')->insert($cheks);


    }
}
