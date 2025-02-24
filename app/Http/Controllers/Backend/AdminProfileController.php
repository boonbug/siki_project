<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\adminProfileRequest;
use Illuminate\Support\Facades\Storage;

class AdminProfileController extends Controller
{
    public function adminIndex()
    {
        return view('admin.admin_profile.index');
    }

    public function editAdminProfile($id)
    {
        $admin_profile = User::findOrFail(base64_decode($id));
        return view('admin.admin_profile.edit_profile', compact('admin_profile'));
    }

    public function updateAdminProfile(adminProfileRequest $request)
    {
        $input = $request->except("_token", "_method");
        if ($image = $request->hasFile('user_image')) {
            $image = $request->file('user_image');
            $fileName = time() . '.' . $image->getClientOriginalExtension();
            $path = $image->storeAs('Admin_profile', $fileName, 'public');
            $input['user_image'] = $fileName;
        }
        $user = User::where('id', base64_decode($request->id))->update($input);
        return redirect()->route('admin.index')->with('success', "Profile Updated Sucessfully");
    }
}
