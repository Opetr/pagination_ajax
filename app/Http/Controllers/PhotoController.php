<?php

namespace App\Http\Controllers;
use \Photo;


class PhotoController extends Controller
{
    public function getIndex() {
         \Photo::get();
    }
}
