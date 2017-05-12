<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Requests;
    use Illuminate\Support\Facades\Auth;
    class HomeController extends Controller
    {
        //public function __construct() {
        //    $this->middleware('auth',['except' => 'getLogout']);
        //}
    
        public function getIndex() {
            if (Auth::check()) {
                return view('admin.dashboard.main');
            }else{
                return view('admin.login.login');
            }
        }
    
        public function getLogout() {
           Auth::logout();
           return redirect(\URL::previous());
        }
    }