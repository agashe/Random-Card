<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Card;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $value = 0;
        $suits = ['C', 'D', 'H', 'S'];
        for ($i = 1;$i <= 13;$i++) {
            if ($i == 11) $value = 'J';
            elseif ($i == 12) $value = 'Q';
            elseif ($i == 13) $value = 'K';
            else $value = $i;

            for ($j = 0;$j < 4;$j++) {
                Card::create([
                    'suit' => $suits[$j],
                    'value' => $value,
                    'image' => "images/" . $value . $suits[$j] . ".png"
                ]);
            }
        }
    }
}
