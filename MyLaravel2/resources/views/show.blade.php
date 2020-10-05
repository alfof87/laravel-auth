@extends('layouts.app')

@section('section')
  <div class="flex">
    <ul>
        <li>
          <img src="https://brighterwriting.com/wp-content/uploads/icon-user-default.png" alt="">
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
@endsection
