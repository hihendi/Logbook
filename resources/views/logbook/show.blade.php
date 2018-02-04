
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Logbook Info</div>

                    <div class="panel-body">


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Nama / PT</label>
                            {{-- @foreach ($logbook->marketings as $logbook) --}}
                              {{$logbook->Marketing->nama_pelanggan}}


                            {{-- @endforeach --}}

                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Alamat</label>
                            {{ $logbook->Marketing->alamat }}
                        </div>


                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Impact</label>
                            {{ $logbook->impact }}
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Source Problem</label>
                            {{ $logbook->source_problem }}
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Segment</label>
                            {{ $logbook->segment }}
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Descripton</label>
                            {{ $logbook->description }}
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Solved By</label>
                          <label class="label label-success">{{ $logbook->solved_by }}</label>  
                        </div>




{{--
                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Roles</label>
                            @if(!empty($user->roles))
                                @foreach($user->roles as $role)
                                    <label class="label label-success">{{ $role->display_name }}</label>
                                @endforeach
                            @endif
                        </div> --}}
                        <div class="form-group">
                            <a href="{{route('logbook.edit',$logbook->id)}}" class="btn btn-warning btn-sm">Update</a>
                            <a href="{{route('logbook.index')}}" class="btn btn-danger btn-sm">Back</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
