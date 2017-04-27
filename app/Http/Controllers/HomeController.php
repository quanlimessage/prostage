<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Http\Requests;
    use Auth;
    class HomeController extends Controller
    {
        public function __construct() {
            $this->middleware('auth',['except' => 'getLogout']);
            return view('admin.login.login');
        }
    
        public function getIndex() {
            return view('admin.dashboard.main');
        }
    
        public function getLogout() {
           Auth::logout();
           return redirect('login');
        }
    }