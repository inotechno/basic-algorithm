<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\SoalController;

class SoalController extends Controller
{
    public function soalA()
    {
        $array = [12, 9, 30, 'A', 'M', 99, 82, 'J', 'N', 'B'];
        $angka = [];
        $huruf = [];

        foreach ($array as $key => $val) {
            if (is_numeric($val)) {
                $angka[] = $val;
            } elseif (is_string($val)) {
                $huruf[] = $val;
            }
        }

        asort($angka);
        asort($huruf);

        $data = array_merge($huruf, $angka);
        return response()->json($data, 200);
    }

    public function soalB(){
        $input1 = ["palindrom", "ind"];
        $input2 = ["abakadabra", "ab"];
        $input3 = ["hello", ""];
        $input4 = ["ababab", "aba"];
        $input5 = ["aaaaaa", "aa"];
        $input6 = ["hell", "hello"];

        $data = [
            'valueA' => $this->pattern_count($input1),
            'valueB' => $this->pattern_count($input2),
            'valueC' => $this->pattern_count($input3),
            'valueD' => $this->pattern_count($input4),
            'valueE' => $this->pattern_count($input5),
            'valueF' => $this->pattern_count($input6),
        ];

        return response()->json($data, 200);
    }

    public function soalC()
    {
        $input1 = "Hello World";
        $input2 = "Bismillah";
        $input3 = "MasyaAllah";

        $data = [
            'valueA' => $this->countAndSortLetters($input1),
            'valueB' => $this->countAndSortLetters($input2),
            'valueC' => $this->countAndSortLetters($input3),
        ];

        return response()->json($data, 200);
    }

    function pattern_count($data) {
        $textLength = strlen($data[0]);
        $patternLength = strlen($data[1]);
        $count = 0;

        // Jika teks atau pola kosong, tidak ada kemunculan pola
        if ($textLength == 0 || $patternLength == 0) {
            return 0;
        }

        for ($i = 0; $i <= $textLength - $patternLength; $i++) {
            // Memeriksa apakah potongan teks pada posisi saat ini cocok dengan pola
            $match = true;
            for ($j = 0; $j < $patternLength; $j++) {
                if ($data[0][$i + $j] != $data[1][$j]) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                $count++;
            }
        }

        return $count;
    }

    function countAndSortLetters($input)
    {
       $charCount = [];

       for ($i=0; $i < strlen($input); $i++) {
            $char = $input[$i];

            if(ctype_alpha($char)){
                $charCount[$char] = isset($charCount[$char]) ? $charCount[$char] + 1 : 1;
            }
       }

       ksort($charCount);
       return $charCount;
    }
}
