<?php

namespace App\Http\Controllers;
use App\Employee;
use Illuminate\Http\Request;

class LoggedController extends Controller
{
  public function destroy($id){
    $emp = Employee::findOrFail($id);
    $emp -> delete();
    return redirect() -> route('emp.index');
  }
}
