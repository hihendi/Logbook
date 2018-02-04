<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Logbook;
use App\Marketing;
use App\Role;
use App\User;
use DB;
use DataTables;

class LogbookController extends Controller
{
    public function home()
    {
      return view('logbook.home');
    }

    public function index()
    {
      return view('logbook.index');
    }

    public function show($id)
    {

      $logbook = Logbook::find($id);
      return view('logbook.show')->with('logbook', $logbook);

    }

    public function datatable()
    {

      $logbooks = Logbook::with('marketing');

       return DataTables::eloquent($logbooks)
       ->order(function ($order){
          $order->OrderBy('id', 'desc');
       })
       ->addColumn('action', function($logbooks){
         return '<a href="index/'.$logbooks->id.'" class="btn btn-info btn-sm">Show</a>'.
         '<a href="index/'.$logbooks->id.'/edit" class="btn btn-success btn-sm">Edit</a>'.
         // '<button value="'.$logbooks->id.'" class="btn btn-xs btn-primary btn-edit">Edit</button>' .
         '<button value="'.$logbooks->id.'" class="btn btn-danger btn-del btn-sm" data-remote="'.$logbooks->id.'">Delete</button>';

           })->make(true);

    }

    public function create()
    {
      $marketing = Marketing::pluck('nama_pelanggan', 'id');
      // $role = Role::where('display_name', '=', 'Teknisi');
      $user = User::whereHas('roles', function($query){
          $query->where('display_name', 'Teknisi');
      })->get();


      return view('logbook.create')->with('marketing', $marketing)->with('user', $user);
    }

    public function store(Request $request)
    {
      // $this->validate($request, [
      //     'name'=> 'required|max:100',
      //     'email'=> 'required|email|max:120|unique:users',
      //     'password'=> 'required|confirmed|min:6',
      //     'roles'=> 'required'
      //
      // ]);

      $logbook = new Logbook;
      $logbook->marketing_id = $request->marketing_id;
      $logbook->impact = $request->impact;
      $logbook->segment = $request->segment;
      $logbook->source_problem = $request->source_problem;
      $logbook->description = $request->description;
      $logbook->solved_by = $request->solved_by;

      $logbook->save();

      return redirect()->route('logbook.index')->with('success', 'Berhasil dibuat');
    }

    public function edit($id)
    {
      $marketing = Marketing::pluck('nama_pelanggan', 'id');
      $logbook = Logbook::find($id);
      $user = User::whereHas('roles', function($query){
          $query->where('display_name', 'Teknisi');
      })->get();

      return view('logbook.edit')->with('logbook', $logbook)->with('marketing', $marketing)->with('user', $user);
    }

    public function update(Request $request, $id)
    {
      $logbook = Logbook::find($id);
      $logbook->marketing_id = $request->marketing_id;
      $logbook->impact = $request->impact;
      $logbook->segment = $request->segment;
      $logbook->source_problem = $request->source_problem;
      $logbook->description = $request->description;
      $logbook->solved_by = $request->solved_by;

      $logbook->save();

      return redirect()->route('logbook.index')->with('success', 'Logbook berhasil diupdate');
    }

    public function delete(Request $request)
    {
        if ($request->ajax()) {
          Logbook::destroy($request->id);

          return response($request->id);
        }
    }
}
