<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DownloadsController extends Controller
{

  public function download() {

    $file_path = public_path('files/Curriculum-Vitae-Thomas-Viret.pdf');
    return response()->download($file_path);
  }

}
