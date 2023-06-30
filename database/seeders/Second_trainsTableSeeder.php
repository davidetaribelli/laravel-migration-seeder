<?php

namespace Database\Seeders;

use App\Models\secondTrain;
use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class Second_trainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run_che_non_viene_eseguita()
    {
        $trains = [
            [
                "azienda"=> "Trenitalia",
                "stazione_di_partenza"=> "Milano Centrale",
                "stazione_di_arrivo"=> "Stazione Firenze Santa Maria Novella",
                "data_partenza"=> "2023-06-30",
                "orario_di_partenza"=> "14:30:00",
                "orario_di_arrivo"=> "17:30:00",
                "cod_treno"=> "123456LKJH",
                "n_carrozze"=> "11",
                "in_orario"=> "0",
                "cancellato"=> "0"
            ],
            [
                "azienda"=> "Trenitalia",
                "stazione_di_partenza"=> "Milano Centrale",
                "stazione_di_arrivo"=> "Roma termini",
                "data_partenza"=> "2023-06-30",
                "orario_di_partenza"=> "14:30:00",
                "orario_di_arrivo"=> "17:30:00",
                "cod_treno"=> "123456LKJH",
                "n_carrozze"=> "11",
                "in_orario"=> "1",
                "cancellato"=> "0"
            ],
            [
                "azienda"=> "Trenitalia",
                "stazione_di_partenza"=> "Milano Centrale",
                "stazione_di_arrivo"=> "Napoli Stazione Centrale",
                "data_partenza"=> "2023-06-30",
                "orario_di_partenza"=> "14:30:00",
                "orario_di_arrivo"=> "17:30:00",
                "cod_treno"=> "123456LKJH",
                "n_carrozze"=> "11",
                "in_orario"=> "1",
                "cancellato"=> "1"
            ],
            [
                "azienda"=> "Trenord",
                "stazione_di_partenza"=> "Milano Centrale",
                "stazione_di_arrivo"=> "Rimini",
                "data_partenza"=> "2023-06-30",
                "orario_di_partenza"=> "14:30:00",
                "orario_di_arrivo"=> "17:30:00",
                "cod_treno"=> "123456LKJH",
                "n_carrozze"=> "11",
                "in_orario"=> "0",
                "cancellato"=> "0"
            ],
            [
                "azienda"=> "Italo",
                "stazione_di_partenza"=> "Milano Centrale",
                "stazione_di_arrivo"=> "Venezia Stazione Santa Lucia",
                "data_partenza"=> "2023-06-30",
                "orario_di_partenza"=> "14:30:00",
                "orario_di_arrivo"=> "17:30:00",
                "cod_treno"=> "123456LKJH",
                "n_carrozze"=> "11",
                "in_orario"=> "1",
                "cancellato"=> "0"
            ],
            [
                "azienda"=> "Trenitalia",
                "stazione_di_partenza"=> "Milano Centrale",
                "stazione_di_arrivo"=> "Torino Stazione Porta Nuova",
                "data_partenza"=> "2023-06-30",
                "orario_di_partenza"=> "14:30:00",
                "orario_di_arrivo"=> "17:30:00",
                "cod_treno"=> "123456LKJH",
                "n_carrozze"=> "11",
                "in_orario"=> "0",
                "cancellato"=> "1"
            ]
            
            
        ];
        

        foreach($trains as $train){
            $newTrain = new secondTrain();
            $newTrain->azienda = $train['azienda'];
            $newTrain->stazione_di_partenza = $train['stazione_di_partenza'];
            $newTrain->stazione_di_arrivo = $train['stazione_di_arrivo'];
            $newTrain->data_partenza = $train['data_partenza'];
            $newTrain->orario_di_partenza = $train['orario_di_partenza'];
            $newTrain->orario_di_arrivo = $train['orario_di_arrivo'];
            $newTrain->cod_treno = $train['cod_treno'];
            $newTrain->n_carrozze = $train['n_carrozze'];
            $newTrain->in_orario = $train['in_orario'];
            $newTrain->cancellato = $train['cancellato'];
            $newTrain->save();
        }
    }

    public function run(Faker $faker){
        for($i=0; $i<6; $i++){
            $newTrain = new secondTrain();
            $newTrain->azienda = $faker->word();
            $newTrain->stazione_di_partenza = $faker->sentence(4);
            $newTrain->stazione_di_arrivo = $faker->sentence(4);
            $newTrain->data_partenza = $faker->date();
            $newTrain->orario_di_partenza = $faker->time();
            $newTrain->orario_di_arrivo = $faker->time();
            $newTrain->cod_treno = $faker->md5();
            $newTrain->n_carrozze =  $faker->randomFloat(0, 10, 12);
            $newTrain->in_orario = $faker->boolean();
            $newTrain->cancellato = $faker->boolean();
            $newTrain->save();
        }
    }
}
