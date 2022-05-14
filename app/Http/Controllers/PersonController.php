<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index() {
        $persons = [
            [
                'id' => 1,
                'name' => 'Kolya',
                'age' => 18,
                'job' => 'coach'
            ],
            [
                'id' => 2,
                'name' => 'Elena',
                'age' => 17,
                'job' => 'rest'
            ],
            [
                'id' => 3,
                'name' => 'Petr',
                'age' => 34,
                'job' => 'seller'
            ]
        ];
        
        return $persons;
    }
}
