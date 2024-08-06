<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\carbon;

class ArtistsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artists')->insert([
    [
        'title' => 'Keshi',
                'url' => 'https://allureceleb.com/wp-content/uploads/2022/05/Keshi.jpg',
                'description' => 'Keshiはテキサス州出身でベトナム人の両親もとで生まれた29歳。13歳のとき、祖父が持っていたギターとベトナム語の音楽書籍を頼りに独学で音楽を始める。エドシーランの音楽から影響を受ける。大学学生時代に音楽投稿サイトに楽曲を投稿するようになる。2017年の『Over U』『If youre Not the One for Me Who Is』などの作品で数百万回の再生回数を記録したのがきっかけに知名度を広げていく。',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
    ],
    [
        'title' => 'Lil Tjay',
                'url' => 'https://images.genius.com/37fa0ec7a8c84796094306c475d33d83.738x738x1.jpg',
                'description' => 'Lil Tjay is an American rapper and singer.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
    ],    
    [
        'title' => 'Kiana Lede',
                'url' => 'https://wallpapercave.com/wp/wp4632244.jpg',
                'description' => 'Kiana Lede is an American singer and actress.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
    ],    
    [    
        'title' => 'Sunkis',
                'url' => 'https://lineimg.omusic.com.tw/img/artist/988459.jpg?v=20210429013001s',
                'description' => 'Sunkis is a music artist with a unique sound.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
    ],
    [
        'title' => 'Dua Lipa',
                'url' => 'https://images.hdqwalls.com/wallpapers/dua-lipa-2017-ua.jpg',
                'description' => 'Dua Lipa is a British singer and songwriter.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
    ], 
]);
    }
}
