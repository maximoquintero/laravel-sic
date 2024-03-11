<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Requests\StudentRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        // All
        // $this->middleware('auth');
        // Algunos metodos
        // $this->middleware('auth')->only(['store','update']);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $students = Student::paginate(10);
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('add-student');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $validated = $request->validated();

        $student = new Student;
        $student->name_student = $validated['name_student'];
        $student->lastname_student = $validated['lastname_student'];
        $student->id_student = $validated['id_student'];
        $student->birthday = $validated['birthday'];
        $student->comments = $validated['comments'];
        $student->save();
    
        return redirect()->route('students.index')->with('success', 'Datos agregados exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $student = Student::find($id);
        return view('show-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $student=Student::find($id);
        return view('edit-student',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, string $id)
    {
        $validated = $request->validated();

        $student=Student::find($id);
        $student->update($validated);
        return redirect(route('students.index'))->with('notificacion','Estudiante editado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
