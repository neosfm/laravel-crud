<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ListedUser;

class Controller
{
    // Add
    public function add(Request $request)
    {
        // Validate
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:listed_users,email',
        ]);
        ListedUser::create($validated);
        return redirect('/');
    }
    // Update
    public function update(Request $request, ListedUser $listedUser){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:listed_users,email,' . $listedUser->id,
        ]);
        $listedUser->update($validated);
    
        return redirect('/');
    }

    // Delete
    public function delete (ListedUser $listedUser){
        $listedUser->delete();
        return redirect('/');
    }
}
