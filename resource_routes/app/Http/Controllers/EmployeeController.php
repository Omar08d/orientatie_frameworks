<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Toon alle werknemers
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    // Toon formulier om nieuwe werknemer aan te maken
    public function create()
    {
        return view('employees.create');
    }

    // Sla nieuwe werknemer op
    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
        ]);

        Employee::create($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully.');
    }

    // Toon details van een werknemer
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    // Toon formulier om werknemer te bewerken
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    // Werk een werknemer bij
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully.');
    }

    // Verwijder een werknemer
    public function destroy(Employee $employee)
    {
        $employee->delete();
        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully.');
    }
}
