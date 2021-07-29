<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Storage;

class MovieController extends Controller
{
    public function index()
    {
         $json = Storage::disk('local')->get('movies.json');
         $json = json_decode($json,true);
        return $json;
    }
}
