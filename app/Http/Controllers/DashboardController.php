<?php

namespace App\Http\Controllers;

use App\Models\Camp;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $datas = Checkout::with(['camp'])->whereUserId(Auth::id())->get();

        return view('Auth.user.dashboard',[ 'data' => $datas ]);
    }
}
