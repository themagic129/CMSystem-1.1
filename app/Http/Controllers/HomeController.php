<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $customer = DB::table('customers')->paginate(5);

        $count= DB::table('customers')->count();

        $count_active = DB::table('customers')->where('status', 'inactivo')->count();

        return view('customers.index', ['customer' => $customer, 'count' => $count, 'count_active' => $count_active]);

    }
}
