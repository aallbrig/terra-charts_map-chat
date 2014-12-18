<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ChatCirclesTableSeeder extends Seeder {

	public function run()
	{
    $radius = 160934;  // 100 miles in meters
		ChatCircle::create([
      'title'  =>'Ellesmere Island',
      'lat'    => 81.430858,
      'lng'    => -84.403959,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Canada',
      'lat'    => 52.122217,
      'lng'    => -64.452787,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Florida',
      'lat'    => 31.346599,
      'lng'    => -84.598730,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Venezuela',
      'lat'    => 4.469640,
      'lng'    => -62.274510,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Brazil',
      'lat'    => -24.933767,
      'lng'    => -49.969823,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Argentina',
      'lat'    => -40.653556,
      'lng'    => -65.438572,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Antarctica',
      'lat'    => -74.475108,
      'lng'    => -67.547947,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'India',
      'lat'    => 21.879339,
      'lng'    => 78.204920,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Japan',
      'lat'    => 38.080526,
      'lng'    => 139.640467,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Melbourne, Australia',
      'lat'    => -38.015641,
      'lng'    => 144.869959,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Middle of Nowhere, Greenland',
      'lat'    => 79.517317,
      'lng'    => -42.952307,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Russia',
      'lat'    => 72.000485,
      'lng'    => 98.727381,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Ostroda, Poland',
      'lat'    => 72.000485,
      'lng'    => 98.727381,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Gdansk, Poland',
      'lat'    => 54.364288,
      'lng'    => 18.628229,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Libya',
      'lat'    => 32.345894,
      'lng'    => 11.627772,
      'radius' => $radius
    ]);
    ChatCircle::create([
      'title'  => 'Some place in Aegean Sea',
      'lat'    => 37.040524,
      'lng'    => 25.217860,
      'radius' => $radius
    ]);
	}

}