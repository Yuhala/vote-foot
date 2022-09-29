<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Player;

class PlayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Player::create([
            'playerName' => 'André Onana',
            'position'=>'goalie',
            'clubName' => 'Inter Milan',
            'imagePath' => 'images/footballers/andre_onana.png',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Simon Omossola',
            'position'=>'goalie',
            'clubName' => 'AS Vita',
            'imagePath' => 'images/footballers/simon_omossola.jpeg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Fabrice Ondoua',
            'position'=>'goalie',
            'clubName' => 'FK Auda',
            'imagePath' => 'images/footballers/fabrice_ondoua.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Simon Ngapandouetnbu',
            'position'=>'goalie',
            'clubName' => 'OM',
            'imagePath' => 'images/footballers/simon_ngapa.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Efala Komguep',
            'position'=>'goalie',
            'clubName' => 'Akwa United',
            'imagePath' => 'images/footballers/efala.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Djaoyang James Bienvenu',
            'position'=>'goalie',
            'clubName' => 'Canon',
            'imagePath' => 'images/footballers/djaoyang.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Anye Derick',
            'position'=>'goalie',
            'clubName' => 'Cape Town',
            'imagePath' => 'images/footballers/anye_derick.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Joel Matip',
            'position'=>'defense',
            'clubName' => 'Liverpool',
            'imagePath' => 'images/footballers/matip.png',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Nicolas Nkoulou',
            'position'=>'defense',
            'clubName' => 'Aris',
            'imagePath' => 'images/footballers/nkoulou.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Ngadeu-Ngadjui Michael',
            'position'=>'defense',
            'clubName' => 'Gent',
            'imagePath' => 'images/footballers/ngadeu.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Casteletto Jean',
            'position'=>'defense',
            'clubName' => 'Nantes',
            'imagePath' => 'images/footballers/casteletto.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Christopher Wooh',
            'position'=>'defense',
            'clubName' => 'Rennes',
            'imagePath' => 'images/footballers/wooh.png',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Jerome Onguene',
            'position'=>'defense',
            'clubName' => 'Frankfurt',
            'imagePath' => 'images/footballers/',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Oumar Gonzalez',
            'position'=>'defense',
            'clubName' => 'Ajaccio',
            'imagePath' => 'images/footballers/oumar.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Nouhou Tolo',
            'position'=>'defense',
            'clubName' => 'Seattle',
            'imagePath' => 'images/footballers/nouhou.png',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Enzo Ebosse',
            'position'=>'defense',
            'clubName' => 'Udinese',
            'imagePath' => 'images/footballers/ebosse.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Oyongo Bitolo',
            'position'=>'defense',
            'clubName' => 'Sans Club',
            'imagePath' => 'images/footballers/oyongo.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Enzo Tchato',
            'position'=>'defense',
            'clubName' => 'Montpellier',
            'imagePath' => 'images/footballers/enzo.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Fai Collins',
            'position'=>'defense',
            'clubName' => 'Al-Tai',
            'imagePath' => 'images/footballers/fai.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Mbaizo Olivier',
            'position'=>'defense',
            'clubName' => 'Philadelphia',
            'imagePath' => 'images/footballers/mbaizo.png',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Darlin Yongwa',
            'position'=>'defense',
            'clubName' => 'Lorient',
            'imagePath' => 'images/footballers/darlin.png',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Harold Moukoudi',
            'position'=>'defense',
            'clubName' => 'AEK Athens',
            'imagePath' => 'images/footballers/moukoudi.jpg',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        

        
    }
}
