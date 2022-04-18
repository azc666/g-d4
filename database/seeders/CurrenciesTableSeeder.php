<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $currencies = [
            ['iso' => 'usd'],
            ['iso' => 'eur'],
            ['iso' => 'gbp'],
            ['iso' => 'jpy'],
        ];

        foreach ($currencies as $key => $value) {
            Currency::create($value);
        }
    }
}