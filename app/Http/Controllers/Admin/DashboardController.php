<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $today = Visitor::whereDate('created_at', Carbon::today())->get()->count();
        $current_week = Visitor::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get()->count();
        $current_month = Visitor::whereMonth('created_at', date('m'))->whereYear('created_at', date('Y'))->get(['created_at'])->count();
        $total = Visitor::all()->count();
        return view('layouts.admin.dashboard.index', [
            'today' => $today,
            'current_week' => $current_week,
            'current_month' => $current_month,
            'total' => $total,
        ]);
    }
}
