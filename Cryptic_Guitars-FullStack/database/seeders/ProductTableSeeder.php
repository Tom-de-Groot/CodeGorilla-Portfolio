<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            //Gretsch Electric
            [
                'name'          => 'Gretsch G2210 Streamliner Junior Jet Club Vintage White',
                'brand_id'      => 1,
                'category_id'   => 1,
                'price'         => 319,
                'image_source'  => 'gretsch/gretsch-g2210-streamliner-junior-jet-club-vintage-white.jpg',
            ],

            [
                'name'          => 'Gretsch G5230T Electromatic Jet FT Bigsby Airline Silver',
                'brand_id'      => 1,
                'category_id'   => 1,
                'price'         => 577,
                'image_source'  => 'gretsch/gretsch-g5230t-electromatic-jet-ft-bigsby-airline-silver.jpg',
            ],    

            [
                'name'          => 'Gretsch G5230T Electromatic Jet FT Bigsby Firebird Red',
                'brand_id'      => 1,
                'category_id'   => 1,
                'price'         => 569,
                'image_source'  => 'gretsch/gretsch-g5230t-electromatic-jet-ft-bigsby-firebird-red.jpg',
            ],

            [
                'name'          => 'Gretsch G5420T Electromatic Hollow Body Azure Metallic',
                'brand_id'      => 1,
                'category_id'   => 1,
                'price'         => 880,
                'image_source'  => 'gretsch/gretsch-g5420t-electromatic-hollow-body-azure-metallic.jpg',
            ],      
            //Gretsch Bass
            [
                'name'          => 'Gretsch G2220 Electromatic Junior Jet Bass II Shell Pink',
                'brand_id'      => 1,
                'category_id'   => 2,
                'price'         => 397,
                'image_source'  => 'gretsch/gretsch-g2220-electromatic-junior-jet-bass-ii-shell-pink.jpg',
            ],  
            //Fender Electric
            [
                'name'          => 'Fender Player Stratocaster MN Black',
                'brand_id'      => 2,
                'category_id'   => 1,
                'price'         => 709,
                'image_source'  => 'fender/fender-player-stratocaster-mn-black.jpg',
            ],

            [
                'name'          => 'Fender Player Stratocaster MN Polar White',
                'brand_id'      => 2,
                'category_id'   => 1,
                'price'         => 709,
                'image_source'  => 'fender/fender-player-stratocaster-mn-polar-white.jpg',
            ],

            [
                'name'          => 'Fender Player Stratocaster HSS PF 3 Tone Sunburst',
                'brand_id'      => 2,
                'category_id'   => 1,
                'price'         => 749,
                'image_source'  => 'fender/fender-player-stratocaster-hss-pf-3-tone-sunburst.jpg',
            ],

            [
                'name'          => 'Fender Player Telecaster MN Black',
                'brand_id'      => 2,
                'category_id'   => 1,
                'price'         => 709,
                'image_source'  => 'fender/fender-player-telecaster-mn-black.jpg',
            ],
            //Fender Bass
            [
                'name'          => 'Fender 75th Anniversary Jazz Bass',
                'brand_id'      => 2,
                'category_id'   => 2,
                'price'         => 1199,
                'image_source'  => 'fender/fender-75th-anniversary-jazz-bass.jpg',
            ],

            [
                'name'          => 'Fender Player Precision Bass PF Polar White',
                'brand_id'      => 2,
                'category_id'   => 2,
                'price'         => 799,
                'image_source'  => 'fender/fender-player-precision-bass-pf-polar-white.jpg',
            ],

            [
                'name'          => 'Fender American Professional II Fretless Jazz Bass Olympic White',
                'brand_id'      => 2,
                'category_id'   => 2,
                'price'         => 2099,
                'image_source'  => 'fender/fender-american-professional-ii-fretless-jazz-bass-olympic-white.jpg',
            ],

            [
                'name'          => 'Fender Player Jazz Bass PF Black',
                'brand_id'      => 2,
                'category_id'   => 2,
                'price'         => 799,
                'image_source'  => 'fender/fender-player-jazz-bass-pf-black.jpg',
            ],
            //Gibson Electric
            [
                'name'          => 'Gibson Slash Les Paul Standard November Burst',
                'brand_id'      => 3,
                'category_id'   => 1,
                'price'         => 2999,
                'image_source'  => 'gibson/gibson-slash-les-paul-standard-november-burst.jpg',
            ],

            [
                'name'          => 'Gibson Slash Les Paul Standard Limited Edition Vermillion Burst',
                'brand_id'      => 3,
                'category_id'   => 1,
                'price'         => 2999,
                'image_source'  => 'gibson/gibson-slash-les-paul-standard-limited-edition-vermillion-burst.jpg',
            ],

            [
                'name'          => 'Gibson Les Paul Studio Wine Red',
                'brand_id'      => 3,
                'category_id'   => 1,
                'price'         => 1399,
                'image_source'  => 'gibson/gibson-les-paul-studio-wine-red.jpg',
            ],

            [
                'name'          => 'Gibson Les Paul Studio Ebony',
                'brand_id'      => 3,
                'category_id'   => 1,
                'price'         => 1369,
                'image_source'  => 'gibson/gibson-les-paul-studio-ebony.jpg',
            ],
        ]);
    }
}
