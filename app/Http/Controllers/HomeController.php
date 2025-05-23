<?php

namespace App\Http\Controllers;

use App\Models\Linkedin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $allData = Linkedin::take(6)->get();

        $linkedInData1 = $allData->slice(0, 3); // first 3 records
        $linkedInData2 = $allData->slice(3, 3); // next 3 records
        return view('welcome', compact('linkedInData1', 'linkedInData2', 'allData'));
    }
}
