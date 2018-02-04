
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Data Marketing Info</div>

                    <div class="panel-body">


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama / PT</label>
                            {{-- @foreach ($logbook->marketings as $logbook) --}}
                              {{$marketing->nama_pelanggan}}


                            {{-- @endforeach --}}

                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Alamat</label>
                            {{ $marketing->alamat }}
                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Paket Berlangganan</label>
                            {{ $marketing->paket_langganan }}
                        </div>

                        <div class="form-group">
                            <a href="{{route('marketing.edit',$marketing->id)}}" class="btn btn-warning btn-sm">Update</a>
                            <a href="{{route('marketing.index')}}" class="btn btn-danger btn-sm">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
