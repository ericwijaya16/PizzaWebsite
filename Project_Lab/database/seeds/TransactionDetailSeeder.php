<?php

use Illuminate\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transactiondetails')->insert([
            'pizzas_id' => 3,
        ]);
    }
}
