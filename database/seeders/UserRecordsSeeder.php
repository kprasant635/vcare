<?php

namespace Database\Seeders;

use App\Models\UserRecored;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserRecordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'prasant',
            'email' => 'admin@gmail.com',
            'email_verified_at' => Carbon::now(),
            'password' => '$2y$10$hPizyoFwkdCMXfu74LCE2uMM94w7vZWcAuSUiiCePLm5iji0RiMim',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]]);
    }
}
