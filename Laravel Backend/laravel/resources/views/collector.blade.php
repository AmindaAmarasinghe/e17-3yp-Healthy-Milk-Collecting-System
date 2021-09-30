@extends('layouts.app')
@section('content')

        <div class="container-fluid">
                <h5 class="mb-2">Registered collectors</h5>
                <div class="container col-sm-6  col-md-10 col-md-offset-1">
                  <table class="table table-bordered table-hover" style="background-color: deepskyblue;">
                      <thead class="thead-light">
                          <tr>
                            <th scope="col" class="bg-primary">User ID</th>
                            <th scope="col" class="bg-primary">collector id</th>
                            <th scope="col" class="bg-primary">Username</th>
                            <th scope="col" class="bg-primary">Email</th>
                            <th scope="col" class="bg-primary">Contact</th>
                            <th scope="col" class="bg-primary">Address</th>
                            <th scope="col" class="bg-primary">businesstype</th>
                            
                            <th scope="col" class="bg-danger">Options</th>
                          </tr>
                      </thead>
                      <tbody>
                          @foreach ($users as $user)
                          <tr>
                          <?php $user_id= $user['user_id'];
                          $collector_id=$user["collector_id"]?>
                          <td>{{ $user["user_id"] }}</td>
                          <td>{{ $user["collector_id"] }}</td>
                          <td>{{ $user["name"] }}</td>
                          <td>{{ $user["email"] }}</td>
                          <td>{{ $user["contact"] }}</td>
                          <td>{{ $user["address"] }}</td>
                          <td>{{ $user["businesstype"] }}</td>
                          <td><a href="{{url('get-farmers') . '?' . http_build_query(['id' => $collector_id])}}"  class="btn btn-success">Farmers</a>
                          <a href="{{url('collector-edit') . '?' . http_build_query(['id' => $user_id])}}" class="btn btn-primary">Edit</a>
                          <a href="{{url('user-remove') . '?' . http_build_query(['id' => $user_id])}}"  class="btn btn-danger">Delete</a></td> 
                          </tr>
                          @endforeach
                      </tbody>
                  </table>
              </div>
        </div>
   
@endsection   