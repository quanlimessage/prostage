<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Support\MessageBag;
use Validator;
use Auth;
use App\User;
use DateTime;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getCreateUser() {
        return view('admin.user.createuser');
    }

    public function getListUser() {
        $data = User::select('id','name','email','image')->get()->toArray();
		return view('admin.user.listuser',['user_data' => $data]);
    }

    public function CreateUser(Request $request) {
        $rules = [
                'name' =>'required',
                'email' =>'required|email',
                'password' => 'required|min:8',
                'password2' => 'required|min:8|same:password',
                'img' =>'required'
            ];
        $messages = [
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email address.',
            'password.required' => 'Password is required.',
            'password.min' => 'Password must contain at least 8 characters.',
            'password2.required' => 'Password2 is required.',
            'password2.min' => 'Password2 must contain at least 8 characters.',
            'password2.same' => 'Password1 and Password2 must match.',
            'img.required' => 'image is required.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            $user = new User;
            $file = $request->img;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            if(strlen($file) > 0){
                $filename = time().'.'.$file->getClientOriginalName();
                $des = "upload/user/";
                $file->move($des,$filename);
                $user->image = $filename;
            }
            $user->created_at = new DateTime();
            $user->save();
            return redirect()->back()->with(['flash_message' => 'Success']);
        }
    }
}
