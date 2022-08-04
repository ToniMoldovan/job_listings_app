<?php

namespace App\Models;

class Listing
{
    public static function all()
    {
        return [
                [
                    'id' => 1,
                    'title' => 'Listing One',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis dolore saepe provident earum vel porro dicta reiciendis! Odit quos doloribus explicabo dolorem, deserunt delectus ut beatae odio itaque repellendus facere?'
                ],
                [
                    'id' => 2,
                    'title' => 'Listing Two',
                    'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perspiciatis dolore saepe provident earum vel porro dicta reiciendis! Odit quos doloribus explicabo dolorem, deserunt delectus ut beatae odio itaque repellendus facere?'
                ]
        ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if($listing['id'] == $id)
                return $listing;
        }
    }
}
