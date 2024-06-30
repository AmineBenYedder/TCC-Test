<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
public function index(){
    $employees = Employee::all();
    return view('employees.index',['employees'=>$employees]);
}
public function create(){
    return view('employees.create');
}
public function store(Request $request){
    $data = $request->validate([
        'nom' => 'required',
        'prénom' => 'required',
        'phone' => 'required|numeric',
        'email' => 'required|email|ends_with:@tuniscallcenter.com',
    ]);
    $newEmployee = Employee::create($data);

    return redirect(route('employee.index'));
}
public function edit(Employee $employee){
    return view('employees.edit',['employee'=>$employee]);;
}

public function update(Employee $employee, Request $request){
    $data = $request->validate([
        'nom' => 'required',
        'prénom' => 'required',
        'phone' => 'required|numeric',
        'email' => 'required',
    ]);
    $employee->update($data);
    return redirect(route('employee.index'))->with('success','Mise à jour réussie');
}
public function destroy(Employee $employee){
    $employee->delete();
    return redirect(route('employee.index'))->with('success', 'Employé supprimé avec succès');
}
}
