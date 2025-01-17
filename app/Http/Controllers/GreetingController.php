<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GreetingController extends Controller
{
    public function random()
    {
        $greetings = ['おはよう', 'こんにちは', 'こんばんは', 'おやすみ'];
        shuffle($greetings);
        return view('greeting.random',[
            'greetings' => $greetings[0],
            ]);
    }
    
    public function greeting($greeting)
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
            'greeting.greeting',
            [
            'result' => $result,
            'time' => $time
            ]
        );
    }

    public function freeword($freeword)
    {
        return view('greeting.freeword', ['freeword' => $freeword]);
    }


}
