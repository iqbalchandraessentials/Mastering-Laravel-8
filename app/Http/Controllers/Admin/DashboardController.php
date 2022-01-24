<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $datas = Checkout::with(['camp'])->get();

        return view('Auth.admin.dashboard',[ 'data' => $datas ]);
    }
}
