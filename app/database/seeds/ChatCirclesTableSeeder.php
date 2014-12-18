<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ChatCirclesTableSeeder extends Seeder {

	public function run()
	{
		ChatCircle::create([
      'title'  =>'Ellesmere Island',
      'lat'    => 81.430858,
      'lng'    => -84.403959,
      'radius' => 160934
    ]);
    ChatCircle::create([
      'title'  => 'Canada',
      'lat'    => 52.122217,
      'lng'    => -64.452787,
      'radius' => 160934
    ]);
    ChatCircle::create([
      'title'  => 'Baker County, Florida',
      'lat'    => 31.346599,
      'lng'    => -84.598730,
      'radius' => 160934
    ]);
    ChatCircle::create([
      'title'  => 'Venezuela',
      'lat'    => 4.469640,
      'lng'    => -62.274510,
      'radius' => 160934
    ]);
    ChatCircle::create([
      'title'  => 'Brazil',
      'lat'    => -24.933767,
      'lng'    => -49.969823,
      'radius' => 160934
    ]);
    ChatCircle::create([
      'title'  => 'Argentina',
      'lat'    => -40.653556,
      'lng'    => -65.438572,
      'radius' => 160934
    ]);
    ChatCircle::create([
      'title'  => 'Antarctica',
      'lat'    => -74.475108,
      'lng'    => -67.547947,
      'radius' => 160934
    ]);
	}

}