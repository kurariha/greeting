<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function greeting03()
    {
        $greetings = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        shuffle($greetings);
        return view('greeting.greeting03',[
            'greetings' => $greetings[0],
            ]);
    }
    
    public function greeting01($greeting)
    {
        if ($greeting === 'morning') {
            $time = '朝';
            $result  = 'おはようございます';
        } elseif ($greeting === 'afternoon') {
            $time = '昼';
            $result = 'こんにちは';
        } elseif ($greeting === 'evening') {
            $time = '夕方';
            $result = 'こんばんは';
        } elseif ($greeting === 'night') {
            $time = '夜';
            $result = 'おやすみ';
        }
        return view(
            'greeting.greeting01',
            [
            'result' => $result,
            'time' => $time
            ]
        );
    }

    public function greeting02($freeword)
    {
        return view('greeting.greeting02', ['freeword' => $freeword]);
    }


}
