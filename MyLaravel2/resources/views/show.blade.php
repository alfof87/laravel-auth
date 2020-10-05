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
                        <img style="width: 90px;height: 100px;" src="https://brighterwriting.com/wp-content/uploads/icon-user-default.png" alt="">
                      </li>
                      <li>
                        <h4>Date of Birth:</h4>
                        {{ $emp -> date_of_birth }}
                      </li>
                      <br>
                      <li>
                        <h4>Private Code:</h4>
                        {{ $emp -> private_code }}
                      </li>
                  </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
