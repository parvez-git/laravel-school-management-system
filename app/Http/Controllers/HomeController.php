<?php

namespace App\Http\Controllers;

use App\Grade;
use App\Parents;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = Auth::user();
        
        if ($user->hasRole('Admin')) {

            $parents = Parents::latest()->get();
            $teachers = Teacher::latest()->get();
            $students = Student::latest()->get();

            return view('home', compact('parents','teachers','students'));

        } elseif ($user->hasRole('Teacher')) {

            $teacher = Teacher::with(['user','subjects','classes'])->withCount('subjects','classes')->findOrFail($user->teacher->id);

            return view('home', compact('teacher'));

        } elseif ($user->hasRole('Parent')) {
            
            $parents = Parents::with(['children'])->withCount('children')->findOrFail($user->parent->id); 

            return view('home', compact('parents'));

        } elseif ($user->hasRole('Student')) {
            
            $student = Student::with(['user','parent','class','attendances'])->findOrFail($user->student->id); 

            return view('home', compact('student'));

        } else {
            return 'NO ROLE ASSIGNED YET!';
        }
        
    }

    public function profile() 
    {
        return view('dashboard.profile');
    }
}
