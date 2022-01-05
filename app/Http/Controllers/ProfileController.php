<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function showProfile($id)
    {
        $users = User::find($id);
        return view('profile', compact('users'));
    }

    public function updateProfile(Request $request , $id){
        $users = User::find($id);
        $users->name = $request->name != null ? $request->name : $users->name;
        $users->email = $request->email != null ? $request->email :  $users->email;

        $file = $request->file('picture');

        if($file != null){
            $imageName = time().'.'.$file->getClientOriginalExtension();

            Storage::putFileAs('public/images', $file, $imageName);

            $users->pictures = $imageName;
        }

        $users->save();
        return redirect('/');
    }

    public function updatePassword(Request $request, $id){
        $users = User::find($id);
        // $request->validate(['oldPassword' => 'required']);

        if (Hash::check($request->oldPassword, $users->password)) {
            // dd('test');
            $validated = $request->validate([
                'newPassword' => 'required',
                'confirmNewPassword' => 'required|same:newPassword'
            ]);

            $validated['confirmNewPassword'] = Hash::make($validated['confirmNewPassword']);
            $users->password = $validated['confirmNewPassword'];
            // dd($request->oldPassword, $users->password);
            $users->save();
            return redirect('profile/'.$id)->with('success', 'Password berhasil diganti !');
            // return redirect('/');
        }
        else{
            return redirect('profile/'.$id)->with('failed', 'Password tidak berhasil diganti !');
        }



    }
}