<?php

namespace App\Http\Controllers;
use App\Employee;
use App\Location;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){
      $emps = Employee::all();
      return view('index', compact('emps'));
    }
    public function show($id){
      $emp = Employee::findOrFail($id);
      return view('layouts.show', compact('emp'));
    }
    public function create(){
      $locs = Location::all();
      return view('layouts.create', compact('locs'));
      // return view('layouts.create', compact('emp'));
    }
    public function store(Request $request){
      $data = $request -> all();
      Employee::create($data);
      return redirect() -> route('emp.index');
    }
    public function destroy($id){
      $emp = Employee::findOrFail($id);
      $emp -> delete();
      return redirect() -> route('emp.index');
    }
}
