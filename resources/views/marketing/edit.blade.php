
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><h4><strong>Create Data Marketing</strong></h4></div>

                    <div class="panel-body">
                        <!-- Display Validation Errors -->
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form class="form-horizontal" role="form" method="POST"
                              action="{{ route('marketing.update', $marketing->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}


                              <div class="form-group{{ $errors->has('impact') ? ' has-error' : '' }}">
                                  <label for="nama_pelanggan" class="col-md-4 control-label">Nama Pelanggan/PT</label>

                                <div class="col-md-6">

                                    <input id="nama_pelanggan" type="text" class="form-control" name="nama_pelanggan"
                                           value="{{$marketing->nama_pelanggan}}" placeholder="Masukkan Nama Pelanggan/PT "
                                           required autofocus>

                                    @if ($errors->has('nama_pelanggan'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nama_pelanggan') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>

                              <div class="form-group{{ $errors->has('impact') ? ' has-error' : '' }}">
                                  <label for="username" class="col-md-4 control-label">Username</label>

                                <div class="col-md-6">

                                    <input id="username" type="text" class="form-control" name="username"
                                           value="{{$marketing->username}}" placeholder="Masukkan Username "
                                           required autofocus>

                                    @if ($errors->has('username'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>

                              <div class="form-group{{ $errors->has('impact') ? ' has-error' : '' }}">
                                  <label for="alamat" class="col-md-4 control-label">Alamat</label>

                                <div class="col-md-6">

                                    <input id="alamat" type="text" class="form-control" name="alamat"
                                           value="{{$marketing->alamat}}" placeholder="Masukkan Alamat Pelanggan"
                                           required autofocus>

                                    @if ($errors->has('alamat'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('alamat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>

                              <div class="form-group{{ $errors->has('segment ') ? ' has-error' : '' }}">
                                <label for="paket_langganan" class="col-md-4 control-label">Paket Berlangganan</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="paket_langganan" id="paket_langganan">
                                        <option value="{{old($marketing->paket_langganan)}}" selected='selected'>Pilih Paket Berlangganan</option>
                                        <option value="10MB-Bronze">1MB-Bronze</option>
                                        <option value="50MB-Bronze">5MB-Bronze</option>
                                        <option value="100MB-Bronze">10MB-Bronze</option>
                                        <option value="10MB-Silver">10MB-Silver</option>
                                        <option value="50MB-Silver">50MB-Silver</option>
                                        <option value="10MB-Gold">10MB-Gold</option>
                                        <option value="50MB-Gold">50MB-Gold</option>
                                        <option value="100MB-Gold">100MB-Gold</option>
                                        <option value="200MB-Gold">200MB-Gold</option>

                                  </select>

                                    @if ($errors->has('paket_langganan'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('paket_langganan') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('segment ') ? ' has-error' : '' }}">
                              <label for="id_customer" class="col-md-4 control-label">Nama Registrasi</label>

                              <div class="col-md-6">
                                <select class="form-control" name="id_customer" id="id_customer">
                                      <option value="" selected='selected'>Pilih nama Registrasi</option>
                                      @foreach ($customer as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>

                                      @endforeach


                                </select>

                                  @if ($errors->has('id_customer'))
                                      <span class="help-block">
                                      <strong>{{ $errors->first('id_customer') }}</strong>
                                  </span>
                                  @endif
                              </div>
                          </div>


                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>

                                    <a class="btn btn-danger" href="{{ route('marketing.index') }}">
                                        Cancel
                                    </a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
