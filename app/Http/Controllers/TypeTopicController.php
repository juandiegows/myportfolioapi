<?php

namespace App\Http\Controllers;

use App\Models\TypeTopic;
use Illuminate\Http\Request;

class TypeTopicController extends Controller
{
    public function index()
    {
        return response()->json(TypeTopic::get());
    }
}