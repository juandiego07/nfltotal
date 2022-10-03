<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => 'San Francisco 49ers',
            'website' => 'https://www.49ers.com/',
            'img' => '49ers.svg',
            'conference' => 'NFC',
            'division' => 'West',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Chicago Bears',
            'website' => 'https://www.chicagobears.com/',
            'img' => 'bears.svg',
            'conference' => 'NFC',
            'division' => 'North',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Cincinnati Bengals',
            'website' => 'https://www.bengals.com/',
            'img' => 'bengals.svg',
            'conference' => 'AFC',
            'division' => 'North',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Buffalo Bills ',
            'website' => 'https://www.buffalobills.com/',
            'img' => 'bills.svg',
            'conference' => 'AFC',
            'division' => 'East',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Denver Broncos',
            'website' => 'https://www.denverbroncos.com/',
            'img' => 'broncos.svg',
            'conference' => 'AFC',
            'division' => 'West',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Cleveland Browns',
            'website' => 'https://www.clevelandbrowns.com/',
            'img' => 'browns.svg',
            'conference' => 'AFC',
            'division' => 'North',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Tampa Bay Buccaneers',
            'website' => 'https://www.buccaneers.com/',
            'img' => 'bucs.svg',
            'conference' => 'NFC',
            'division' => 'South',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Arizona Cardinals',
            'website' => 'https://www.azcardinals.com/',
            'img' => '49ers.svg',
            'conference' => 'NFC',
            'division' => 'West',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Los Angeles Chargers',
            'website' => 'https://www.chargers.com/',
            'img' => 'chargers.svg',
            'conference' => 'AFC',
            'division' => 'West',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Kansas City Chiefs',
            'website' => 'https://www.chiefs.com/',
            'img' => 'chiefs.svg',
            'conference' => 'AFC',
            'division' => 'West',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Indianapolis Colts',
            'website' => 'https://www.colts.com/',
            'img' => 'colts.svg',
            'conference' => 'AFC',
            'division' => 'South',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Washington Commanders',
            'website' => 'https://www.commanders.com/',
            'img' => 'commanders.svg',
            'conference' => 'NFC',
            'division' => 'East',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Dallas Cowboys',
            'website' => 'https://www.dallascowboys.com/',
            'img' => 'cowboys.svg',
            'conference' => 'NFC',
            'division' => 'East',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Miami Dolphins',
            'website' => 'https://www.miamidolphins.com/',
            'img' => 'dolphins.svg',
            'conference' => 'AFC',
            'division' => 'East',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Philadelphia Eagles',
            'website' => 'https://www.philadelphiaeagles.com/',
            'img' => 'eagles.svg',
            'conference' => 'NFC',
            'division' => 'East',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Atlanta Falcons',
            'website' => 'https://www.atlantafalcons.com/',
            'img' => 'falcons.svg',
            'conference' => 'NFC',
            'division' => 'South',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'New York Giants',
            'website' => 'https://www.giants.com/',
            'img' => 'giants.svg',
            'conference' => 'NFC',
            'division' => 'East',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Jacksonville Jaguars',
            'website' => 'https://www.jaguars.com/',
            'img' => 'jaguars.svg',
            'conference' => 'AFC',
            'division' => 'South',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'New York Jets',
            'website' => 'https://www.newyorkjets.com/',
            'img' => 'jets.svg',
            'conference' => 'AFC',
            'division' => 'East',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Detroit Lions',
            'website' => 'https://www.detroitlions.com/',
            'img' => 'lions.svg',
            'conference' => 'NFC',
            'division' => 'North',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Green Bay Packers',
            'website' => 'https://www.packers.com/',
            'img' => 'packers.svg',
            'conference' => 'NFC',
            'division' => 'North',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Carolina Panthers',
            'website' => 'https://www.panthers.com/',
            'img' => 'panthers.svg',
            'conference' => 'NFC',
            'division' => 'South',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'New England Patriots',
            'website' => 'https://www.patriots.com/',
            'img' => 'patriots.svg',
            'conference' => 'AFC',
            'division' => 'East',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Las Vegas Raiders',
            'website' => 'https://www.raiders.com/',
            'img' => 'raiders.svg',
            'conference' => 'AFC',
            'division' => 'West',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Los Angeles Rams',
            'website' => 'https://www.therams.com/',
            'img' => 'rams.svg',
            'conference' => 'NFC',
            'division' => 'West',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Baltimore Ravens',
            'website' => 'https://www.baltimoreravens.com/',
            'img' => 'ravens.svg',
            'conference' => 'AFC',
            'division' => 'North',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'New Orleans Saints',
            'website' => 'https://www.neworleanssaints.com/',
            'img' => 'saints.svg',
            'conference' => 'NFC',
            'division' => 'South',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Seattle Seahawks',
            'website' => 'https://www.seahawks.com/',
            'img' => 'seahawks.svg',
            'conference' => 'NFC',
            'division' => 'West',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Pittsburgh Steelers',
            'website' => 'https://www.steelers.com/',
            'img' => 'steelers.svg',
            'conference' => 'AFC',
            'division' => 'North',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Houston Texans',
            'website' => 'https://www.houstontexans.com/',
            'img' => 'texans.svg',
            'conference' => 'AFC',
            'division' => 'South',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Tennessee Titans',
            'website' => 'https://www.tennesseetitans.com/',
            'img' => 'titans.svg',
            'conference' => 'AFC',
            'division' => 'South',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);

        Team::create([
            'name' => 'Minnesota Vikings',
            'website' => 'https://www.vikings.com/',
            'img' => 'vikings.svg',
            'conference' => 'NFC',
            'division' => 'North',
            'games' => 0,
            'win' => 0,
            'lost' => 0,
            'draw' => 0,
        ]);
    }
}
