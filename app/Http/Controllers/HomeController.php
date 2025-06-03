<?php

namespace App\Http\Controllers;

use App\Models\Linkedin;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View
    {
        $allData = Linkedin::take(6)->get();

        $linkedInData1 = $allData->slice(0, 3);
        $linkedInData2 = $allData->slice(3, 3);

        return view('welcome', compact('linkedInData1', 'linkedInData2', 'allData'));
    }
}
