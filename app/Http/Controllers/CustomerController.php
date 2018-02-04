<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marketing;
use App\Role;
use App\Logbook;
use App\User;
use DB;
use Auth;
use DataTables;

class CustomerController extends Controller
{
    public function home()
    {
        return view('customer.home');
    }

    public function index()
    {
      // $user = User::whereHas('marketings', function($query){
      //     $query->where('users.name', '=','marketings.username');
      // })->get();
      //   $marketing = Marketing::pluck('nama_pelanggan','id');
      //
      //   dd($user);
      // return view('customer.index')->with('customer', $customer)->with('marketing', $marketing);

      // $user = Auth::user()->first();

      // $customer = DB::table('marketings')->join('users', 'marketings.username','=','users.name')
      //   // ->where('users.id', '=', Auth::user()->id)
      //   // ->join('logbooks', 'logbooks.marketing_id', '=', 'marketings.id')
      //   ->where('users.name', '=', Auth::user()->name)->get();
      //   // dd($customer);
      //
      // // $logbook = Logbook::with('Marketing');
      // $logbook = DB::table('logbooks')->join('marketings', 'logbooks.marketing_id', '=', 'marketings.id')
      //   ->where('marketings.username', '=', Auth::user()->name)
      //   ->get();
      // // $logbook = Logbook::all();
      // dd($logbook);
      // return view('customer.index')->with('customer', $customer)->with('logbook', $logbook);
      // return view('customer.index')->with('logbook', $logbook);
      return view('customer.index');
    }

    public function datatable()
    {
      $logbook = DB::table('logbooks')->join('marketings', 'logbooks.marketing_id', '=', 'marketings.id')
        ->where('marketings.username', '=', Auth::user()->name)
        ->get();

      return Datatables::of($logbook)
        ->make(true);
    }
}
