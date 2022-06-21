<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class exercisesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->insert([
            'titleEN' => 'Squat',
            'titleNL' => 'Squat',
            'instructionEN' => 'Step 1: Stand straight with feet hip-size apart. \n Step 2: Tighten your stomach muscles. \n Step 3: Lower down, like you are sitting in an invisible chair. \n Step 4:	Straighten your legs to go back up. \n Step 5:	Repeat the exercise.',
            'instructionNL' =>'Stap 1: Sta rechtop met de voeten op heupbreedte uit elkaar. \n Stap 2: Span je buikspieren aan. \n Stap 3: Zak naar beneden, alsof je in een onzichtbare stoel zit. \n Stap 4: Strek je benen om weer op te tillen. \n Stap 5: Herhaal de beweging/oefening.',
            'media' =>'https://thumbs.gfycat.com/BlueWetHarvestmouse-max-1mb.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('exercises')->insert([
            'titleEN' => 'Push-ups',
            'titleNL' => 'Opdrukken',
            'instructionEN' => 'Step 1: Get down on all fours, place your hands further than your shoulders. \n Step 2: Straighten your arms and legs. \n Step 3: Drop your body until your chest almost touches the ground. \n Step 4: Pause, then push yourself back up. \n Step 5: Repeat the exercise.',
            'instructionNL' =>'Stap 1: Ga op handen en voeten zitten en plaats je handen iets breder dan je schouders. \n Stap 2: Strek je armen en benen. \n Stap 3: Laat je lichaam zakken totdat je borst bijna de grond raakt. \n Stap 4: Pauzeer en duw jezelf dan weer omhoog. \n Stap 5: Herhaal de beweging/oefening.',
            'media' =>'https://c.tenor.com/gI-8qCUEko8AAAAC/pushup.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('exercises')->insert([
            'titleEN' => 'Dip',
            'titleNL' => 'Dip',
            'instructionEN' => 'Step 1: Grab the straight bars and jump, straighten your arms. \n Step 2: Lower your body by twisting your arms while leaning further. \n Step 3: Dip/go down until your shoulders are below your elbows. \n Step 4: Lift up by straightening your arms. \n Step 5:	Lock your elbows when you are at the top. \n Step 6: Repeat the movement.',
            'instructionNL' =>'Stap 1: Pak de parallelle staven en spring omhoog, strek je armen. \n Stap 2: Laat uw lichaam zakken door uw armen te buigen terwijl u naar voren leunt. \n Stap 3: Duik naar beneden tot je schouders onder je ellebogen zijn. \n Stap 4: Til je lichaam op door je armen te strekken. \n Stap 5: Vergrendel je ellebogen aan de bovenkant. \n Stap 6: Herhaal de beweging/oefening.',
            'media' =>'https://i.gifer.com/Bu8O.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('exercises')->insert([
            'titleEN' => 'Plank',
            'titleNL' => 'Plank',
            'instructionEN' => 'Step 1: Get into a push-up position. \n Step 2: Bow your elbows and rest your weight on your arms and on your toes, keep your body straight. \n Step 3: Hold for as long as you can.',
            'instructionNL' =>'Stap 1: Ga in een push-up positie staan. \n Stap 2: Buig je ellenbogen en rust je gewicht op je armen en je tenen. Houd je lichaam recht. \n Stap 3: Houd dit vast zolang je kunt.',
            'media' =>'https://media3.giphy.com/media/7zuAQ6ebll6maa2rBF/giphy-downsized-large.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('exercises')->insert([
            'titleEN' => 'Donkey kick',
            'titleNL' => 'Paardentrap',
            'instructionEN' => 'Step 1: Get down and set your hands under your shoulders and your knees under your hips. \n Step 2: Kick back with one leg. \n Step 3: Go back in the first position and repeat. \n Step 4: Switch legs and do the same exercise again.',
            'instructionNL' =>'Stap 1: Buk en plaats je handen onder je schouders en je knieën onder je heupen. \n Stap 2: Schop met een been naar achteren. \n Stap 3: Ga terug in de eerste positie en herhaal het schoppen. \n Stap 4: Verander van been en doe dezelfde oefening.',
            'media' =>'https://www.healthier.qld.gov.au/wp-content/uploads/2015/07/15_M_WIP02.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('exercises')->insert([
            'titleEN' => 'Mountain climber',
            'titleNL' => 'Berg klimmen',
            'instructionEN' => 'Step 1: Start with your body straight on the ground and your hands wider than your shoulders. Keep your toes on the floor. \n Step 2: Take one knee up to the center of your body and then quickly rotate between legs. \n Step 3: Continue rotating until your set is complete.',
            'instructionNL' =>'Stap 1: Start met je lichaam recht op de grond en je handen wijder dan de schouders. Houd je tenen op de grond. \n Stap 2: Doe je knie omhoog tot het midden van je lichaam en wissel snel tussen je benen. \n Stap 3: Herhaal het wisselen tot je oefening voorbij is.',
            'media' =>'https://i.pinimg.com/originals/18/27/be/1827be178c019b1dc6f8a8d8b4a7b0b8.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('exercises')->insert([
            'titleEN' => 'Burpee',
            'titleNL' => 'Burpee',
            'instructionEN' => 'Step 1: Stand straight with your feet apart. \n Step 2: Squat and place your hands in front of your feet. \n Step 3: Jump back, your legs are stretched and you are in a plank position. \n Step 4: Do a push up, jump forward, and push yourself back to the starting position. \n Step 5: Repeat until your set is complete.',
            'instructionNL' =>'Stap 1: Sta rechtop met je voeten apart van elkaar. \n Stap 2: Squat en plaats je handen voor je voeten. \n Stap 3: Spring achteruit, je benen recht en je bent nu in de plank positie. \n Stap 4: Doe een push-up, spring naar voren, en duw je eigen omhoog naar de start positie. \n Stap 5: Herhaal dit totdat je oefening compleet is.',
            'media' =>'https://media1.popsugar-assets.com/files/2014/02/27/847/n/1922729/1baf9ec0f5ce4ea9_burpee.3.gif.xxxlarge.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('exercises')->insert([
            'titleEN' => 'Lunge',
            'titleNL' => 'Lunge',
            'instructionEN' => 'Step 1: Start with your feet apart. \n Step 2: Bow your knees to 90 degrees as you lower yourself. Remember to keep your chest right. \n Step 4: Then, push off from your front leg to go back to the starting position.',
            'instructionNL' =>'Stap 1: Begin met je voeten uit elkaar. \n Stap 2: Stap naar voren zodat een been voor je lichaam staat. \n Stap 3: Buig je knieën tot ongeveer 90 graden en zak naar beneden. Houd je borst recht. \n Stap 4: Duw je eigen dan terug met je voorste been naar de start positie.',
            'media' =>'https://c.tenor.com/fWiC9Ze5eUMAAAAC/lunges-exercise.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('exercises')->insert([
            'titleEN' => 'Wall sit',
            'titleNL' => 'Muur zitten',
            'instructionEN' => 'Step 1: Put your back against a wall with your feet apart / about 2 steps from the wall. \n Step 2: Slowly slide your back down the wall until your thighs are equal to the ground. \n Step 3: Keep your back against the wall. \n Step 4: Hold this position for like 20 to 60 seconds. \n Step 5: Go slowly back up the wall. \n Step 6: Rest and repeat the exercise multiple times.',
            'instructionNL' =>'Stap 1: Plaats je rug tegen de muur met je benen apart van elkaar / ongeveer 2 stappen van de muur af. \n Stap 2: Glijd langzaam naar beneden, totdat je dijen gelijk zijn aan de grond. \n Stap 3: Houd je rug tegen de muur. \n Stap 4: Houd deze positie vast voor 20 tot 60 seconden. \n Stap 5: Ga weer langzaam omhoog. \n Stap 6: Rust uit en herhaal de oefening meerdere malen.',
            'media' =>'https://thumbs.gfycat.com/NauticalDiligentHorsemouse-max-1mb.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('exercises')->insert([
            'titleEN' => 'Crunch',
            'titleNL' => 'Crunch',
            'instructionEN' => 'Step 1: Lay down on your back. Set your feet on the ground. Bend your knees and place your arms across your torso. \n Step 2: Lift your upper body, keep your head and neck relaxed. \n Step 3: Return to the starting position. \n Step 4: Repeat the movement.',
            'instructionNL' =>'Stap 1: Ga op je rug liggen. Plaats je voeten op de grond. Buig je knieën en plaats je armen gekruist over je torso. \n Stap 2: Haal je bovenlichaam omhoog en houd je hoofd en nek ontspannen. \n Stap 3: Ga terug naar de start positie. \n Stap 4: Herhaal de bewegingen.',
            'media' =>'https://i0.wp.com/post.healthline.com/wp-content/uploads/2019/09/400x400_Crunches.gif',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
