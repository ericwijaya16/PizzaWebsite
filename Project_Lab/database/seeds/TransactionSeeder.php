<?php

use Illuminate\Database\Seeder;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('transactions')->insert([
            'transactiondetails_id'=> 1,
            'users_id'=> 2,
            'transaction_date' => \Carbon\Carbon::createFromDate(2020,12,01)->toDateTimeString(),
            'quantity' => 3,
        ]);
    }
}
