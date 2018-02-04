<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marketing;
use App\User;

class MarketingController extends Controller
{
    public function home()
    {
      return view('marketing.home');
    }

    public function index()
    {
      return view('marketing.index');
    }

    public function datatable()
    {

        return Datatables(Marketing::query())
          ->addColumn('action', function($marketing){
            return '<a href="index/'.$marketing->id.'" class="btn btn-info btn-sm">Show</a>'.
            '<a href="index/'.$marketing->id.'/edit" class="btn btn-sm btn-primary btn-edit">Edit</a>' .
            '<button value="'.$marketing->id.'" class="btn btn-sm btn-danger btn-del" data-remote="'.$marketing->id.'">Delete</button>';

          })->make(true);
    }

    public function create()
    {
      $customer = User::pluck('name','id');
      return view('marketing.create')->with('customer', $customer);
    }

    public function store(Request $request)
    {
        $marketing = new Marketing;
        $marketing->nama_pelanggan = $request->nama_pelanggan;
        $marketing->username = $request->username;
        $marketing->id_customer = $request->id_customer;
        $marketing->alamat = $request->alamat;
        $marketing->paket_langganan = $request->paket_langganan;

        $marketing->save();

        return redirect()->route('marketing.index')->with('success', 'Data berhasil ditambahkan');
    }

    public function show($id)
    {

      $marketing = Marketing::find($id);
      return view('marketing.show')->with('marketing', $marketing);
    }

    public function edit($id)
    {
      $customer = User::pluck('name','id');
      $marketing = Marketing::find($id);
      return view('marketing.edit')->with('customer', $customer)->with('marketing', $marketing);
    }

    public function update(Request $request, $id)
    {
      $marketing = Marketing::find($id);
      $marketing->nama_pelanggan = $request->nama_pelanggan;
      $marketing->username = $request->username;
      $marketing->id_customer = $request->id_customer;
      $marketing->alamat = $request->alamat;
      $marketing->paket_langganan = $request->paket_langganan;

      $marketing->save();

      return redirect()->route('marketing.index')->with('success', 'Data berhasil diupdate');
    }

   public function delete(Request $request)
   {
     if ($request->ajax()) {
       Marketing::destroy($request->id);
       return response($request->id);
     }
   }

 }
