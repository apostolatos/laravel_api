<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ClientPaymentTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    function run()
    {
        $data = [
			[
                'name' => 'Taylor',
                'surname' => 'Otwell',
                'payments' => [
                    [
                        'amount' => 500,
                        'created_at' => Carbon::create('2020', '01', '01')
                    ],
                    [
                        'amount' => 1000,
                        'created_at' => Carbon::create('2020', '01', '02')
                    ]
                ]
            ],
            [
                'name' => 'Mohamed',
                'surname' => 'Mohamed',
                'payments' => [
                    [
                        'amount' => 1500,
                        'created_at' => Carbon::create('2020', '02', '01')
                    ],
                    [
                        'amount' => 2000,
                        'created_at' => Carbon::create('2020', '02', '02')
                    ]
                ]
            ],
            [
                'name' => 'Jeffrey',
                'surname' => 'Way',
                'payments' => [
                    [
                        'amount' => 2500,
                        'created_at' => Carbon::create('2020', '03', '01')
                    ],
                    [
                        'amount' => 3000,
                        'created_at' => Carbon::create('2020', '03', '02')
                    ],
                ]
            ],
            [
                'name' => 'Phill',
                'surname' => 'Sparks',
                'payments' => []
            ]
        ];

        // create clients
		foreach ($data as $item) {
            $client = \App\Models\Client::create([
                'name' => $item['name'],
                'surname' => $item['surname']
            ]);
            
            $client->payments()->createMany($item['payments']);
        }
    }
}