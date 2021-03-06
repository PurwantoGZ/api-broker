<?php
/**
* 
*/
namespace App\Repository;

use App\User;
use Illuminate\Support\Facades\Hash;

class UsersRepository
{
	
	public function getAll(){
		$users=User::all();
		return $users; 
	}

	public function getById($id){
		$users=User::find($id);
		return $users; 
	}

	public function getByName($name){
		$users=User::where('first_name','LIKE','%'.$name.'%')->get();
		return $users;
	}

	public function insertUser($request){
		$user=new User();
		$user->first_name=$request->input('first_name');
		$user->last_name=$request->input('last_name');
		$user->email=$request->input('email');
		$user->password= Hash::make($request->input('password'));
		$user->city=$request->input('city');
		$user->status=$request->input('status');
		$user->save();
	}

	public function updateUser($id,$input){
		$user=User::find($id);
		$user->first_name=$input['first_name'];
		$user->last_name=$input['last_name'];
		$user->email=$input['email'];
		$user->password=Hash::make($input['password']);
		$user->city=$input['city'];
		$user->status=$input['status'];
		$user->save();
	}

	public function deleteUser($id){
		$user=User::find($id);
		$user->delete();
	}
}