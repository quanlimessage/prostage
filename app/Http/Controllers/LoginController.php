<?php
    namespace App\Http\Controllers;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;
    use Illuminate\Support\MessageBag;
    use Validator;
    use Auth;
    class LoginController extends Controller
    {
        public function getLogin() {
            return view('admin.login.login');
        }
        public function postLogin(Request $request) {
            $rules = [
                'email' =>'required|email',
                'password' => 'required|min:8'
            ];
            $messages = [
                'email.required' => 'Email là trường bắt buộc',
                'email.email' => 'Email không đúng định dạng',
                'password.required' => 'Mật khẩu là trường bắt buộc',
                'password.min' => 'Mật khẩu phải chứa ít nhất 8 ký tự',
            ];
            $validator = Validator::make($request->all(), $rules, $messages);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            } else {
                $email = $request->input('email');
                $password = $request->input('password');
    
                if( Auth::attempt(['email' => $email, 'password' =>$password], $request->has('remember'))) {
                    return redirect()->intended('/');
                } else {
                    $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                    return redirect()->back()->withInput()->withErrors($errors);
                }
            }
        }
    }
