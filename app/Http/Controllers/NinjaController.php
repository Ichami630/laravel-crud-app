<?php

namespace App\Http\Controllers;

use App\Models\Dojo;
use App\Models\Ninja;
use Illuminate\Http\Request;

class NinjaController extends Controller
{
    public function index() {
        // route => /ninjas/
        $users = Ninja::with('dojo')->orderBy('created_at', 'desc')->paginate(10);
        return view('users.index', ["users" => $users]);
    }

    public function show($id) {
        // route => /ninjas/{id}
        $user = Ninja::with('dojo')->findOrFail((int)$id);
        return view('users.show', ["user" => $user]);
    }

    public function create() {
        $dojos = Dojo::all();
        return view("users.create", ['dojos' => $dojos]);
    }

    public function store(Request $request){
        $validated = $request->validate(
            [
                'dojo_id' => 'required|exists:dojos,id', // dojo_id must exist in the dojos table in the id column
                'name' => 'required|string|max:255',
                'skill' => 'required|integer|min:0|max:100',
                'bio' => 'required|string|min:20|max:1000'
            ]
            );

        Ninja::create($validated);

        return redirect()->route('users.index')->with('success', 'User Created!');
    }

    public function destroy($id) {
        $ninja = Ninja::findOrFail((int)$id);

        $ninja->delete();

        return redirect()->route('users.index')->with('success', 'User Deleted!');
    }
}
