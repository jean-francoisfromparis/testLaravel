<?php

namespace App\Http\Controllers;

use App\Models\webHook;
use Illuminate\Http\Request;

class WebHookController extends Controller
{
    public function index()
    {
        return WebHook::all();
    }
}
