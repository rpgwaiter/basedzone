<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(storage_path("seeds/equipment.txt"), "r");
        while(!feof($file)) {
            $line = fgets($file);
            $equip = explode(',', '$line');
            DB::table('equipment')->insert([
                'name' => $equip[0],
                'email' => Str::random(10).'@gmail.com',
                'password' => Hash::make('password'),
            ]);
        }

        fclose($file);
    }
}
