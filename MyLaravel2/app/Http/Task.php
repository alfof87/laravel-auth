<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
  protected $fillabel = [
    'employee_id',
    'task_id'
  ];
  public function employees(){
    return $this -> belongsToMany(Employee::class);
  }
}
