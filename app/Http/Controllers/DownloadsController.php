<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadsController extends Controller
{
    /**
    * Download handler
    * @param $file_name
    *@return file
    */
    public function download($file_name){
        $file_path = public_path('files/'.$file_name);
        return response()->download($file_path);
    }
}
