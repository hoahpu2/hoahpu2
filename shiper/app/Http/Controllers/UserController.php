<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Redirect;

class UserController extends Controller
{
    public function postSignUp(Request $request) {
		$this->validate($request,
			[
				'email' => 'required |unique:users|
				min:4|max:100',
				'name' => 'required|min:4|unique:users|max:100',
				'password' => 'required|min:4|unique:users|max:100',
			],
			[
				'email.required' => 'require email',
				'name.required' => 'require username',
				'password.required' => 'require password',
			]);
		$user = new User();
		$user->name = $request->name;
		$user->fullname = $request->fullname;
		$user->number = $request->number;
		$user->country = $request->country;
		$user->email = $request->email;
		$user->password = Hash::make($request->password);
		$user->save();
		return redirect()->route('admin-login')->with('info', 'you registed a account ! ');

	}

	public function hoanguyen(){
		return view('welcome');
	}

	public function postSignIn(Request $request) {
		$this->validate($request,
			[
				'name' => 'required | min:4|max:100',
				'password' => 'required | min:4|max:100',
			],
			[
				'name.required' => 'require email',
				'password.required' => 'require password',
			]);

		$data = [
			'name' => $request->name,
			'password' => $request->password,
		];

		if (Auth::attempt($data)) {
			return redirect()->route('admin-home')->with('info', 'you login ! ');
		} else {
			return redirect()->route('admin-login')->with('messenger', 'you cannot login with those info !');
		}
	}

	public function logout() {
		Auth::logout();
		return redirect()->route('admin-login')->with('info', 'logout success,see U again');
	}

	public function revenue(){
		$order = Order::all();
		return view('admin.Revenue.revenue')->with(['body' => 'hold-transition skin-blue sidebar-mini', 'order' => $order,'dashbroard' => 'Quan ly doanh thu' , 'home' => 'Quan ly doanh thu', 'home1' => 'danh sach doanh thu']);
	}
}
