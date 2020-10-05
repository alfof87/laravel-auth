@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees:</div>

                <div class="card-body">
                  <ul>
                      <li>
                        <h3>Employee: {{ $emp -> firstname }} {{ $emp -> lastname }}</h3>
                      </li>
                      <li>
                        <img style="width: 90px;height: 100px;" src="https://brighterwriting.com/wp-content/uploads/icon-user-default.png" alt="">
                      </li>
                      <li>
                        <strong>Date of Birth:</strong>
                        {{ $emp -> date_of_birth }}
                      </li>
                      <br>
                      <li>
                        <strong>Private Code:</strong>
                        {{ $emp -> private_code }}
                      </li>
                  </ul>
                  <br><br>
                  @auth
                    <a class="btn btn-primary" href="#">EDIT</a>
                    <a class="btn btn-danger" href="{{ route('emp.destroy', $emp -> id)}}">DELETE</a>
                  @endauth

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
