<?php

namespace App\Http\Controllers;

use App\Models\Criteria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class criteriaController extends Controller
{
    //
    public function index()
    {
        $criterias = Criteria::paginate(10);
        return view('criteria', ['criterias' => $criterias]);
    }

}
