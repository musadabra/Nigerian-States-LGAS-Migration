<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // Source for Nigerian states: https://en.wikipedia.org/wiki/List_of_Nigerian_states
            $states = [
                    [ 'name' => 'Abia' ],
                    [ 'name' => 'Adamawa' ],
                    [ 'name' => 'Akwa Ibom' ],
                    [ 'name' => 'Anambra' ],
                    [ 'name' => 'Bauchi' ],
                    [ 'name' => 'Bayelsa' ],
                    [ 'name' => 'Benue' ],
                    [ 'name' => 'Borno' ],
                    [ 'name' => 'Cross River' ],
                    [ 'name' => 'Delta' ],
                    [ 'name' => 'Ebonyi' ],
                    [ 'name' => 'Edo' ],
                    [ 'name' => 'Ekiti' ],
                    [ 'name' => 'Enugu' ],
                    [ 'name' => 'Gombe' ],
                    [ 'name' => 'Imo' ],
                    [ 'name' => 'Jigawa' ],
                    [ 'name' => 'Kaduna' ],
                    [ 'name' => 'Kano' ],
                    [ 'name' => 'Katsina' ],
                    [ 'name' => 'Kebbi' ],
                    [ 'name' => 'Kogi' ],
                    [ 'name' => 'Kwara' ],
                    [ 'name' => 'Lagos' ],
                    [ 'name' => 'Nasarawa' ],
                    [ 'name' => 'Niger' ],
                    [ 'name' => 'Ogun' ],
                    [ 'name' => 'Ondo' ],
                    [ 'name' => 'Osun' ],
                    [ 'name' => 'Oyo' ],
                    [ 'name' => 'Plateau' ],
                    [ 'name' => 'Rivers' ],
                    [ 'name' => 'Sokoto' ],
                    [ 'name' => 'Taraba' ],
                    [ 'name' => 'Yobe' ],
                    [ 'name' => 'Zamfara' ],
                    [ 'name' => 'Federal Capital Territory' ], // Abuja
                ];

        // Insert state data into the database
                foreach ($states as $state) {
                    State::create($state);
                }
    }
}
