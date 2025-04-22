<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ReviewSeederYandex extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $reviews = file_get_contents(public_path('reviews/mt46_yandex_rev.json'));

        foreach (json_decode($reviews) as $item) {
            if (!isset($item->author)) continue;

            $ing_lnk = isset($item->author->pic)?'https://avatars.mds.yandex.net/get-yapic/'. $item->author->pic .'/islands-68':"";
            if ($ing_lnk)
                Storage::disk('public')->put("reviews/yandex_".$item->id.".webp", file_get_contents($ing_lnk), 'public');
            $data = [
                'name' => isset($item->author->name)?$item->author->name:"Ананим",
                'data' => date("Y-m-d", intval(mb_substr($item->time,0, 10))),
                'platform' => "Yandex",
                'img' => ($ing_lnk)?"reviews/yandex_".$item->id.".webp":"",
                'score' => $item->rating->val,
                'description' => $item->text,
                'platform_lnk' => "https://yandex.ru/profile/1288615619"
            ];

            print_r($data);
            DB::table("reviews")->insert($data);
        }
    }
}
