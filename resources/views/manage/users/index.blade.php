@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User Management</div>
                <div class="panel-body">


                  <table class="table table-bordered table-striped table-condensed">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Created At</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $user)

                      <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                          <a href="{{route('users.show',$user->id)}}" class="btn btn-info btn-sm">Show</a>
                          <a href="{{route('users.edit',$user->id)}}" class="btn btn-success btn-sm">Edit</a>
                        <form  style='display : inline-block' action="{{route('users.destroy',$user->id)}}" method="POST">
                          {{ csrf_field()}}
                          {{ method_field('DELETE') }}
                          <button type="submit" class="btn btn-danger btn-sm" onclick="confirmation()">Delete</button>
                        </form>
                        </td>
                      </tr>

                    @endforeach
                    </tbody>
                  </table>
                  <a href="{{route('users.create')}}" class="btn btn-primary btn-medium pull-right"> Create User</a>

                  {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
        function confirmation(){
          alert('Data telah dihapus');
        }
        // $(".delete").on("submit", function(){
        // return confirm("Do you want to delete this item?");
    // });
</script>
