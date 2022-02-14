
@extends('layouts.master')
@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User List</h3>
              </div>
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Date of Birth</th>
                    <th>Profession</th>
                  </tr>
                  </thead>
                  <tbody>
                      @foreach($userdata as $keyUserdata => $valUserdata)
                        <tr>
                            <td>{{$valUserdata['id']}}</td>
                            <td>{{$valUserdata['first_name']}}</td>
                            <td>{{$valUserdata['last_name']}}</td>
                            <td>{{$valUserdata['email']}}</td>
                            <td>{{$valUserdata['phone_number']}}</td>
                            <td>{{$valUserdata['dob']}}</td>
                            <td>{{$valUserdata['profession']}}</td>
                        </tr>
                      @endforeach
                  </tbody>
                </table>
              </div>
              <div class="col-sm-12 ">
                <div class="float-right dataTables_paginate">
                  {{$userdata->links()}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
@endsection
  
