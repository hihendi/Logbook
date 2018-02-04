
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit Logbook</div>

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
                              action="{{ route('logbook.update', $logbook->id) }}">
                            {{ csrf_field() }}
                            {{ method_field('PATCH') }}

                            <div class="form-group{{ $errors->has('marketing') ? ' has-error' : '' }}">
                                <label for="marketing" class="col-md-4 control-label">Nama Pelanggan</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="marketing_id" id="marketing_id">
                                        <option value="{{old($logbook->Marketing->nama_pelanggan)}}" selected='selected'>{{$logbook->Marketing->nama_pelanggan}}</option>
                                      @foreach ($marketing as $key => $value)
                                        <option value="{{$key}}">{{"$value"}}</option>
                                      @endforeach
                                  </select>


                                    @if ($errors->has('marketing'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('marketing') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>

                              <div class="form-group{{ $errors->has('impact') ? ' has-error' : '' }}">
                                  <label for="impact" class="col-md-4 control-label">Impact</label>

                                <div class="col-md-6">

                                    <input id="impact" type="text" class="form-control" name="impact"
                                           value="{{old($logbook->impact)}}" placeholder="Masukkan Impact"
                                           required autofocus>

                                    @if ($errors->has('impact'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('impact') }}</strong>
                                    </span>
                                    @endif
                                </div>
                              </div>

                              <div class="form-group{{ $errors->has('segment ') ? ' has-error' : '' }}">
                                <label for="segment" class="col-md-4 control-label">Segment</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="segment" id="segment">
                                        <option value="{{old($logbook->segment)}}" selected='selected'>{{$logbook->segment}}</option>
                                        <option value="Telkom">Telkom</option>
                                        <option value="Indosat">Indosat</option>
                                        <option value="StarNet">StarNet</option>


                                  </select>

                                    @if ($errors->has('segment'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('segment') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('source_problem') ? ' has-error' : '' }}">
                                <label for="source_problem" class="col-md-4 control-label">Source Problem</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="source_problem" id="source_problem">
                                        <option value="{{{old($logbook->source_problem)}}}" selected='selected'>{{$logbook->source_problem}}</option>
                                        <option value="Connection/Internet">Connection/Internet</option>
                                        <option value="Network Outage">Network Outage</option>
                                        <option value="Device Outage">Device Outage</option>

                                  </select>

                                    @if ($errors->has('source_problem'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('source_problem') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">Descripton</label>

                              <div class="col-md-6">

                                <textarea name="description" rows="8" cols="80" id="description"
                                placeholder="Masukkan Descripton" class="form-control"></textarea>
                                {{-- <input id="description" type="text" class="form-control" name="description"
                                       value="" placeholder="Masukkan Descripton"
                                       required autofocus> --}}

                                  @if ($errors->has('description'))
                                      <span class="help-block">
                                      <strong>{{ $errors->first('description') }}</strong>
                                  </span>
                                  @endif
                              </div>
                            </div>

                            <div class="form-group{{ $errors->has('solved_by') ? ' has-error' : '' }}">
                                <label for="solved_by" class="col-md-4 control-label">Solved By</label>

                                <div class="col-md-6">
                                  <select class="form-control" name="solved_by" id="solved_by">
                                    @foreach ($user as $users)

                                      <option value="{{old($users->name)}}"selected="selected">{{$users->name}}</option>
                                    @endforeach

                                  </select>

                                    @if ($errors->has('solved_by'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('solved_by') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>

                                    <a class="btn btn-danger" href="{{ route('logbook.index') }}">
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
