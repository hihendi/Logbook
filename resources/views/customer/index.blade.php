<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            {{-- <li><a href="{{ route('register') }}">Register</a></li> --}}
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Customer View</div>
                        <div class="panel-body">

                          <div id="id_datatable">

                          <table id="customer-table" class="table table-bordered table-striped table-condensed table-responsive">
                            <thead>
                              <tr>
                                <th>Nama/PT</th>
                                <th>Alamat</th>
                                <th>Impact</th>
                                <th>Descripton</th>
                                <th>Solved By</th>

                              </tr>

                            </thead>

                          </table>
                        </div>
                        {{-- @foreach ($customer as $customer)
                            {{$customer->nama_pelanggan}}
                        @endforeach --}}
                        {{--
                        @foreach ($logbook as $logbook)
                            {{$logbook->nama_pelanggan}}
                            {{$logbook->impact}}
                            {{$logbook->segment}}
                        @endforeach --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

  <script src="{{ asset('js/app.js') }}"></script>
  <script src="https://datatables.yajrabox.com/js/jquery.min.js"></script>
  <script src="https://datatables.yajrabox.com/js/bootstrap.min.js"></script>
  <script src="https://datatables.yajrabox.com/js/jquery.dataTables.min.js"></script>
  <script src="https://datatables.yajrabox.com/js/datatables.bootstrap.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <script src="{{ asset('/js/bootstrap.min.js')}}"></script>

  <script>

    $(document).ready(function(){
      $.ajaxSetup ({
        headers:{
          'X-CSRF-TOKEN' : $('meta[name="csrf-token"]').attr('content')
        }
      });
    });


    $(function(){
        $('#customer-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: '{{route('customer.datatable')}}',
          columns:
          [
              {data: 'nama_pelanggan', name: 'nama_pelanggan'},
              {data: 'alamat', name: 'alamat'},
              {data: 'impact', name: 'impact'},
              {data: 'description', name: 'description'},
              {data: 'solved_by', name: 'solved_by'},
              // {data: 'action', name: 'action', orderable:true, searchable:false}
          ]

        });
    });


  </script>
</body>
</html>
