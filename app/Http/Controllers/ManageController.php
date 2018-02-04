<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laratrust\LaratrustFacade as Laratrust;


class ManageController extends Controller
{
    public function index()
    {
      if (Laratrust::hasRole('noc')) return $this->NocDashboard();
      if (Laratrust::hasRole('teknisi')) return $this->TeknisiDashboard();
      if (Laratrust::hasRole('marketing')) return $this->MarketingDashboard();
      if (Laratrust::hasRole('customer')) return $this->CustomerDashboard();
    }

    public function NocDashboard()
    {
      return redirect()->route('users.index');
    }

    public function TeknisiDashboard()
    {
      return redirect()->route('logbook.index');
    }

    public function MarketingDashboard()
    {
      return redirect()->route('marketing.index');
    }

    public function CustomerDashboard()
    {
      return redirect()->route('customer.index');
    }
}
