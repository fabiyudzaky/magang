<?php

use Illuminate\Database\Seeder;
use App\Klien;
use App\Website;
use App\Media;

class KlienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = \Faker\Factory::create();

        $jumlah_klien = 20;
        for ($i = 1; $i <= $jumlah_klien; $i++) { 
            $klien = new klien;
            $klien->nama_klien = $faker->name($gender = null);
            $klien->email_klien = $faker->freeEmail;
            $klien->wa_klien = $faker->phoneNumber;
            $klien->password_klien = $faker->password;
            $klien->save();

            $jumlah_website = rand(1, 3);
            for ($j=1; $j <= $jumlah_website; $j++) { 
                $websites = new website;
                $websites->domain = $faker->domainName;
                $websites->harga = rand(100000, 200000);
                $websites->berakhir = $faker->date;
                $klien->websites()->save($websites);
            }

            $jumlah_media = rand(1, 3);
            for ($k=1; $k <= $jumlah_media; $k++) { 
                $medias = new media;
                $medias->media = $faker->freeEmailDomain;
                $medias->layanan = rand(1, 7);
                $medias->berakhir = $faker->date;
                $klien->medias()->save($medias);
            }
        }
    }
}
