<?php

namespace App\Http\Controllers\Profile;

use App\Http\Requests\UpdateAvatarRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AvatarController extends Controller
{
    public function update(UpdateAvatarRequest $request){

        $request->validate([
            'avatar' => ['required', 'image'],
        ]);
        dd($request->all());

        return redirect(route('profile.edit'));
        //return back()->withInput(['message', 'Avatar updated successfully']);
    }
}