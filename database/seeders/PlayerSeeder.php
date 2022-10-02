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
            'position' => 'goalie',
            'clubName' => 'Inter Milan',
            'imagePath' => 'images/footballers/andre_onana.png',
            'numVotes' => 0,
            'playerAge' => 26
        ]);

        Player::create([
            'playerName' => 'Fabrice Ondoa',
            'position' => 'goalie',
            'clubName' => 'FK Auda',
            'imagePath' => 'images/footballers/fabrice_ondoa.png',
            'numVotes' => 0,
            'playerAge' => 26
        ]);

        Player::create([
            'playerName' => 'Simon Omossola',
            'position' => 'goalie',
            'clubName' => 'AS Vita',
            'imagePath' => 'images/footballers/simon_omossola.png',
            'numVotes' => 0,
            'playerAge' => 24
        ]);



        Player::create([
            'playerName' => 'Simon Ngapa...',
            'position' => 'goalie',
            'clubName' => 'OM',
            'imagePath' => 'images/footballers/simon_ngapa.png',
            'numVotes' => 0,
            'playerAge' => 19
        ]);

        Player::create([
            'playerName' => 'Efala Komguep',
            'position' => 'goalie',
            'clubName' => 'Akwa United',
            'imagePath' => 'images/footballers/efala.png',
            'numVotes' => 0,
            'playerAge' => 30
        ]);

        Player::create([
            'playerName' => 'Djaoyang James Bienvenu',
            'position' => 'goalie',
            'clubName' => 'Canon',
            'imagePath' => 'images/footballers/djaoyang.png',
            'numVotes' => 0,
            'playerAge' => 29
        ]);

        Player::create([
            'playerName' => 'Anye Derick',
            'position' => 'goalie',
            'clubName' => 'Cape Town',
            'imagePath' => 'images/footballers/anye_derick.png',
            'numVotes' => 0,
            'playerAge' => 27
        ]);

        Player::create([
            'playerName' => 'Joel Matip',
            'position' => 'defense',
            'clubName' => 'Liverpool',
            'imagePath' => 'images/footballers/matip.png',
            'numVotes' => 0,
            'playerAge' => 31
        ]);

        Player::create([
            'playerName' => 'Ngadeu-Ngadjui Michael',
            'position' => 'defense',
            'clubName' => 'Gent',
            'imagePath' => 'images/footballers/ngadeu.png',
            'numVotes' => 0,
            'playerAge' => 31
        ]);

        Player::create([
            'playerName' => 'Castelletto Jean',
            'position' => 'defense',
            'clubName' => 'Nantes',
            'imagePath' => 'images/footballers/castelletto.png',
            'numVotes' => 0,
            'playerAge' => 27
        ]);

        Player::create([
            'playerName' => 'Fai Collins',
            'position' => 'defense',
            'clubName' => 'Al-Tai',
            'imagePath' => 'images/footballers/fai.png',
            'numVotes' => 0,
            'playerAge' => 30
        ]);


        Player::create([
            'playerName' => 'Nouhou Tolo',
            'position' => 'defense',
            'clubName' => 'Seattle',
            'imagePath' => 'images/footballers/nouhou.png',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Nicolas Nkoulou',
            'position' => 'defense',
            'clubName' => 'Aris',
            'imagePath' => 'images/footballers/nkoulou.png',
            'numVotes' => 0,
            'playerAge' => 32
        ]);

       

       

        Player::create([
            'playerName' => 'Christopher Wooh',
            'position' => 'defense',
            'clubName' => 'Rennes',
            'imagePath' => 'images/footballers/wooh.png',
            'numVotes' => 0,
            'playerAge' => 21
        ]);

        Player::create([
            'playerName' => 'Jerome Onguene',
            'position' => 'defense',
            'clubName' => 'Frankfurt',
            'imagePath' => 'images/footballers/onguene.png',
            'numVotes' => 0,
            'playerAge' => 24
        ]);

        Player::create([
            'playerName' => 'Oumar Gonzalez',
            'position' => 'defense',
            'clubName' => 'Ajaccio',
            'imagePath' => 'images/footballers/oumar.png',
            'numVotes' => 0,
            'playerAge' => 24
        ]);


        Player::create([
            'playerName' => 'Enzo Ebosse',
            'position' => 'defense',
            'clubName' => 'Udinese',
            'imagePath' => 'images/footballers/ebosse.png',
            'numVotes' => 0,
            'playerAge' => 23
        ]);

        Player::create([
            'playerName' => 'Oyongo Bitolo',
            'position' => 'defense',
            'clubName' => 'Sans Club',
            'imagePath' => 'images/footballers/oyongo.png',
            'numVotes' => 0,
            'playerAge' => 31
        ]);

        Player::create([
            'playerName' => 'Enzo Tchato',
            'position' => 'defense',
            'clubName' => 'Montpellier',
            'imagePath' => 'images/footballers/enzo.png',
            'numVotes' => 0,
            'playerAge' => 19
        ]);

      
        Player::create([
            'playerName' => 'Mbaizo Olivier',
            'position' => 'defense',
            'clubName' => 'Philadelphia',
            'imagePath' => 'images/footballers/mbaizo.png',
            'numVotes' => 0,
            'playerAge' => 25
        ]);

        Player::create([
            'playerName' => 'Darlin Yongwa',
            'position' => 'defense',
            'clubName' => 'Lorient',
            'imagePath' => 'images/footballers/darlin.png',
            'numVotes' => 0,
            'playerAge' => 22
        ]);

        Player::create([
            'playerName' => 'Harold Moukoudi',
            'position' => 'defense',
            'clubName' => 'AEK Athens',
            'imagePath' => 'images/footballers/moukoudi.png',
            'numVotes' => 0,
            'playerAge' => 24
        ]);

        Player::create([
            'playerName' => 'Sacha Boey',
            'position' => 'defense',
            'clubName' => 'Galatasaray',
            'imagePath' => 'images/footballers/sacha.png',
            'numVotes' => 0,
            'playerAge' => 22
        ]);

        Player::create([
            'playerName' => 'Zambo Anguissa',
            'position' => 'middle',
            'clubName' => 'Napoli',
            'imagePath' => 'images/footballers/zambo.png',
            'numVotes' => 0,
            'playerAge' => 26
        ]);

        Player::create([
            'playerName' => 'Oum Gouet',
            'position' => 'middle',
            'clubName' => 'Mechelen',
            'imagePath' => 'images/footballers/oum_gouet.png',
            'numVotes' => 0,
            'playerAge' => 24
        ]);

        Player::create([
            'playerName' => 'Hongla Martin',
            'position' => 'middle',
            'clubName' => 'Hellas Verona',
            'imagePath' => 'images/footballers/hongla.png',
            'numVotes' => 0,
            'playerAge' => 24
        ]);


        Player::create([
            'playerName' => 'Kunde Malong',
            'position' => 'middle',
            'clubName' => 'Olympiakos',
            'imagePath' => 'images/footballers/kunde.png',
            'numVotes' => 0,
            'playerAge' => 27
        ]);


        Player::create([
            'playerName' => 'Jean Onana',
            'position' => 'middle',
            'clubName' => 'Lens',
            'imagePath' => 'images/footballers/jean_onana.png',
            'numVotes' => 0,
            'playerAge' => 22
        ]);

     

     

        Player::create([
            'playerName' => 'Georges Mandjeck',
            'position' => 'middle',
            'clubName' => 'Nea Salamis',
            'imagePath' => 'images/footballers/mandjeck.png',
            'numVotes' => 0,
            'playerAge' => 33
        ]);


        Player::create([
            'playerName' => 'Olivier Ntcham',
            'position' => 'middle',
            'clubName' => 'Swansea',
            'imagePath' => 'images/footballers/ntcham.png',
            'numVotes' => 0,
            'playerAge' => 26
        ]);


      

        Player::create([
            'playerName' => 'Ambina Fidel',
            'position' => 'middle',
            'clubName' => 'Cape Town',
            'imagePath' => 'images/footballers/ambina.png',
            'numVotes' => 0,
            'playerAge' => 20
        ]);


        Player::create([
            'playerName' => 'Ondoua Gael',
            'position' => 'middle',
            'clubName' => 'Hannover',
            'imagePath' => 'images/footballers/ondoua_gael.png',
            'numVotes' => 0,
            'playerAge' => 26
        ]);


        Player::create([
            'playerName' => 'James Leo Siliki',
            'position' => 'middle',
            'clubName' => 'Estoril',
            'imagePath' => 'images/footballers/siliki.png',
            'numVotes' => 0,
            'playerAge' => 26
        ]);


        Player::create([
            'playerName' => 'Yvan Neyou',
            'position' => 'middle',
            'clubName' => 'St. Etienne',
            'imagePath' => 'images/footballers/neyou.png',
            'numVotes' => 0,
            'playerAge' => 25
        ]);


        Player::create([
            'playerName' => 'Vincent Aboubakar',
            'position' => 'attack',
            'clubName' => 'AI-Nasr',
            'imagePath' => 'images/footballers/abou.png',
            'numVotes' => 0,
            'playerAge' => 30
        ]);

        Player::create([
            'playerName' => 'Maxime Choupo-Moting',
            'position' => 'attack',
            'clubName' => 'Bayern Munich',
            'imagePath' => 'images/footballers/choupo.png',
            'numVotes' => 0,
            'playerAge' => 33
        ]);



        Player::create([
            'playerName' => 'Karl Toko-Ekambi',
            'position' => 'attack',
            'clubName' => 'OL',
            'imagePath' => 'images/footballers/ekambi.png',
            'numVotes' => 0,
            'playerAge' => 30
        ]);


        Player::create([
            'playerName' => 'Mbeumo Bryan',
            'position' => 'attack',
            'clubName' => 'Brentford',
            'imagePath' => 'images/footballers/mbeumo.png',
            'numVotes' => 0,
            'playerAge' => 23
        ]);



        Player::create([
            'playerName' => 'Moumi Ngamaleu',
            'position' => 'attack',
            'clubName' => 'Dynamo Moscou',
            'imagePath' => 'images/footballers/ngamaleu.png',
            'numVotes' => 0,
            'playerAge' => 28
        ]);




        Player::create([
            'playerName' => 'Clinton Njie',
            'position' => 'attack',
            'clubName' => 'Sivasspor',
            'imagePath' => 'images/footballers/clinton.png',
            'numVotes' => 0,
            'playerAge' => 29
        ]);

        Player::create([
            'playerName' => 'Georges Nkoudou',
            'position' => 'attack',
            'clubName' => 'Besiktas',
            'imagePath' => 'images/footballers/nkoudou.png',
            'numVotes' => 0,
            'playerAge' => 27
        ]);


        Player::create([
            'playerName' => 'Nsame Jean-Pierre',
            'position' => 'attack',
            'clubName' => 'YB',
            'imagePath' => 'images/footballers/nsame.png',
            'numVotes' => 0,
            'playerAge' => 29
        ]);


        Player::create([
            'playerName' => 'Etouga Mbella',
            'position' => 'attack',
            'clubName' => 'AI-Masry',
            'imagePath' => 'images/footballers/etouga.png',
            'numVotes' => 0,
            'playerAge' => 21
        ]);


        Player::create([
            'playerName' => 'Léandre Tawamba',
            'position' => 'attack',
            'clubName' => 'AI-Taawoun',
            'imagePath' => 'images/footballers/tawamba.png',
            'numVotes' => 0,
            'playerAge' => 32
        ]);


        Player::create([
            'playerName' => 'Ignatius Ganago',
            'position' => 'attack',
            'clubName' => 'Nantes',
            'imagePath' => 'images/footballers/ganago.png',
            'numVotes' => 0,
            'playerAge' => 23
        ]);


        Player::create([
            'playerName' => 'Christian Bassogog',
            'position' => 'attack',
            'clubName' => 'Shanghai Shenua',
            'imagePath' => 'images/footballers/bassogog.png',
            'numVotes' => 0,
            'playerAge' => 26
        ]);



        Player::create([
            'playerName' => 'Stephane Bahoken',
            'position' => 'attack',
            'clubName' => 'SCO Angers',
            'imagePath' => 'images/footballers/bahoken.png',
            'numVotes' => 0,
            'playerAge' => 30
        ]);




        Player::create([
            'playerName' => 'Daniel Namasso',
            'position' => 'attack',
            'clubName' => 'FC Porto',
            'imagePath' => 'images/footballers/namasso.png',
            'numVotes' => 0,
            'playerAge' => 22
        ]);




        Player::create([
            'playerName' => 'Wassou Patient',
            'position' => 'attack',
            'clubName' => 'Coton',
            'imagePath' => 'images/footballers/wassou.png',
            'numVotes' => 0,
            'playerAge' => 18
        ]);


        Player::create([
            'playerName' => 'Lamkel Ze',
            'position' => 'attack',
            'clubName' => 'Kortrijk',
            'imagePath' => 'images/footballers/lamkel.png',
            'numVotes' => 0,
            'playerAge' => 26
        ]);


        Player::create([
            'playerName' => 'Joel Tageu',
            'position' => 'attack',
            'clubName' => 'Maritimo',
            'imagePath' => 'images/footballers/tageu.png',
            'numVotes' => 0,
            'playerAge' => 28
        ]);


        Player::create([
            'playerName' => 'Souaibou Marou',
            'position' => 'attack',
            'clubName' => 'Coton',
            'imagePath' => 'images/footballers/marou.png',
            'numVotes' => 0,
            'playerAge' => 21
        ]);
    }
}
