<?php

use Illuminate\Database\Seeder;
use App\Setting;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $setting = new Setting();
        $setting->name = 'email';
        $setting->value = 'info@email.com';
        $setting->save();

        $setting = new Setting();
        $setting->name = 'phone';
        $setting->value = '+44 123 123 123';
        $setting->save();

        $setting = new Setting();
        $setting->name = 'address';
        $setting->value = '4877 Spruce Drive<br> West Newton, PA 15089';
        $setting->save();

    }
}
