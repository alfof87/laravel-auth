@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employees:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <ul>
                    @foreach ($emps as $emp)
                      <li class="flex">
                        <a href="{{ route('emp.show', $emp -> id) }}">{{ $emp -> firstname }} {{ $emp -> lastname }}</a>
                        <a href="{{ route('emp.destroy', $emp -> id) }}"><strong><span id="x">&otimes;</span></strong></a>
                      </li>
                    @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
