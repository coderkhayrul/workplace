<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Intervention\Image\ImageManagerStatic as Image;

class UserController extends Controller
{

    public function index()
    {
        $data['users'] = User::with('role')->where('status', 1)->get();
        $data['roles'] = Role::where('role_status', 1)->get();

        return view('backend.pages.user.index')->with($data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required|unique:users,user_name',
            'email' => 'required|unique:users,email',
            'password' => 'required',
            'role_id' => 'required',
        ]);

        $user = User::insertGetId([
            'user_name' => Str::lower($request->user_name),
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id,
            'user_slug' => uniqid(),
        ]);
        UserProfile::create([
            'user_id' => $user,
            'full_name' => $request->user_name,
        ]);

        if ($user) {
            $notification = array(
                'message' => 'User Create Successfully!',
                'alert-type' => 'success',
            ); // returns Notification,

            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'User Create Failed!',
                'alert-type' => 'success',
            ); // returns Notification,

        return redirect()->back()->with($notification);
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($slug)
    {
        //
    }

    public function profileShow($slug)
    {
        $user = User::where('user_slug', $slug)->with('profile')->first();
        return view('backend.pages.user.profile', compact('user'));
    }

    public function profileAccount(Request $request, $slug)
    {
        $request->validate([
            'profile_pic' => 'mimes:png,jpg',
            'full_name' => 'required',
            'email' => 'required|email|unique:users,user_slug,' . $slug . ',email',
            'phone_number' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
        ]);
        $user = User::where('user_slug', $slug)->first();

        $user->email = $request->email;
        $user->phone_number = $request->phone_number;
        // Image Find And Update
            if ($user) {
                if ($request->hasFile('profile_pic')) {
                    if ($request->profile_old_image) {
                        unlink($request->profile_old_image);
                    }
                    $new_image = $request->file('profile_pic');
                    $image_name = hexdec(uniqid()) . '.' . $new_image->getClientOriginalExtension();
                    Image::make($new_image)->resize(150, 150)->save('uploads/user/' . $image_name);
                    $profile_image = 'uploads/user/' . $image_name;

                    UserProfile::where('user_id', $user->id)->update([
                        'full_name' => $request->full_name,
                        'profile_pic' => $profile_image,
                    ]);
                }
            }
            UserProfile::where('user_id', $user->id)->update([
                'full_name' => $request->full_name,
            ]);
        $user->update();

        if ($user) {
            $notification = array(
                'message' => 'User Profile Updated!',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        }else{
            $notification = array(
                'message' => 'User Updated Failed!',
                'alert-type' => 'success',
            ); // returns Notification,
            return redirect()->back()->with($notification);
        }
    }
    public function profileSetting(Request $request, $slug)
    {
        $user = User::where('user_slug', $slug)->first();
            UserProfile::where('user_id', $user->id)->update([
                'national_id' => $request->national_id,
                'user_skill' => $request->user_skill,
                'user_position' => $request->user_position,
                'present_address' => $request->present_address,
                'parmenent_address' => $request->parmenent_address,
                'description' => $request->description,
            ]);
        $user->update();
        return redirect()->back();
    }
    public function profileSocialMedia(Request $request, $slug)
    {
        $user = User::where('user_slug', $slug)->first();
            UserProfile::where('user_id', $user->id)->update([
                'facebook_link' => $request->facebook_link,
                'github_link' => $request->github_link,
            ]);
        $user->update();
        return redirect()->back();
    }
}
