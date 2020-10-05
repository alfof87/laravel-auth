<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class GuestController extends Controller
{
  public function index(){
    $emps = Employee::all();
    return view('home', compact('emps'));
  }
  public function show($id){
    $emp = Employee::findOrFail($id);
    return view('show', compact('emp'));
  }
}
