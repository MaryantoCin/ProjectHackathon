<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Team;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'EEO',
            'email' => 'eeo@bncc.net',
            'password' => Hash::make('admineeo123')
        ]);

        Team::create([
        'leaderName' => 'EEO',
        'leaderAddress' => 'EEO',
        'leaderBirth' => 'EEO',
        'leaderEmail' => 'EEO',
        'leaderNumber' => 'EEO',
        'leaderLine' => 'EEO',
        'leaderGithub' => 'EEO',
        'leaderCV' => 'EEO',
        'leaderProject' => 'EEO',
        'member1Name' => 'EEO',
        'member1Address' => 'EEO',
        'member1Birth' => 'EEO',
        'member1Email' => 'EEO',
        'member1Number' => 'EEO',
        'member1Line' => 'EEO',
        'member1Github' => 'EEO',
        'member1CV' => 'EEO',
        'member1Project' => 'EEO',
        'member2Name' => 'EEO',
        'member2Address' => 'EEO',
        'member2Birth' => 'EEO',
        'member2Email' => 'EEO',
        'member2Number' => 'EEO',
        'member2Line' => 'EEO',
        'member2Github' => 'EEO',
        'member2CV' => 'EEO',
        'member2Project' => 'EEO',
        'payment_image' => 'EEO'
        ]);

    }
}
