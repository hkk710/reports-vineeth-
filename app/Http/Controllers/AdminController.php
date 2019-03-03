<?php

namespace App\Http\Controllers;
use App\Message;
use App\User;
use Auth;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
      return view('admin.index');
    }

    public function doctorsview()
    {
        $doctors = Patient::orderBy('patient_id', 'desc')->paginate(10);
        return view('doctor.index')->withDoctors($doctors);
    }

    public function show()
    {
      $messages = Message::orderBy('id', 'desc')->paginate(15);
      return view('admin.messageshow')->withMessages($messages);
    }

    public function usershow()
    {
      $users = User::orderBy('id')->paginate(15);
      return view('admin.usershow')->withUsers($users);
    }

}
