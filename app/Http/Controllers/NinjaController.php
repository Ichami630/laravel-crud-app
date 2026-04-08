<?php

namespace App\Http\Controllers;

use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        // route => /ninjas/
        $users = Ninja::orderBy('created_at', 'desc')->get();
        return view('users.index', ["users" => $users]);
    }

    public function show($id) {
        // route => /ninjas/{id}
        $user = Ninja::findOrFail((int)$id);
        return view('users.show', ["user" => $user]);
    }

    public function create() {
        return view("users.create");
    }
}
