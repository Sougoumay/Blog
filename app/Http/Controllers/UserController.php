<?php

namespace App\Http\Controllers;


use App\Helpers\UploadsFile;
use App\Http\Requests\ProfileRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function homePage()
    {
        $user = User::with('languages','softwares','hobbys','academics')->first();
        //dd($admin);
        return view('index', compact('user'));

    }

    function viewSetting()
    {
        $user = User::find(1);
        return view('admin.settings',compact('user'));
    }

    function getEditProfile()
    {
        return view('admin.updateProfile');
    }

    function editProfile(ProfileRequest $profileRequest)
    {
        $photo = $profileRequest->file('profile');
        if($photo) {
            $imageName = uniqid('image_',true).'.'.$photo->getClientOriginalExtension();
            $photo->move(UploadsFile::getUploadPAth('profile_photos'),$imageName);
        }

        User::find(1)->update([
            'profile'=>$photo,
        ]);

        return redirect()->route('admin.settings');
    }

    function getupdateUserData()
    {
        $user = User::find(1);
        return view('admin.updateUserData',compact('user'));
    }


    function updateUserData(UserRequest $userRequest)
    {
        User::find(1)->update([
            'first_name'=>$userRequest->get('first_name'),
            'last_name'=>$userRequest->get('last_name'),
            'rue'=>$userRequest->get('rue'),
            'code_postale'=>$userRequest->get('code_postale'),
            'country'=>$userRequest->get('country'),
            'phone_number'=>$userRequest->get('phone_number'),
            'email'=>$userRequest->get('email'),
        ]);

        return redirect()->route('admin.settings');
    }



    // TODO changement complet de profil
    // TODO Modifier la fonction de commentaire de l'admin
    // TODO pareil que celui de client
}
