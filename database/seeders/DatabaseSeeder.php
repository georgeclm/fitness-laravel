<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Reminder;
use Carbon\Carbon;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(UserTableSeeder::class);
        Reminder::create([
            'lead_id'=>1,
            'user_id'=>1,
            'reminder'=>'A reminder to call costumer',
            'reminder_date'=> Carbon::now()->addDays(2),
            'status'=>'pending',
            
        ]);
        Reminder::create([
            'lead_id'=>2,
            'user_id'=>1,
            'reminder'=>'A reminder to call costumer',
            'reminder_date'=> Carbon::now()->addDays(3),
            'status'=>'pending',
            
        ]);Reminder::create([
            'lead_id'=>3,
            'user_id'=>1,
            'reminder'=>'A reminder to call costumer',
            'reminder_date'=> Carbon::now()->addDays(1),
            'status'=>'pending',
            
        ]);
    }

}
