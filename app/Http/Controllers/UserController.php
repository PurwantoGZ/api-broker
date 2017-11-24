<?php

namespace App\Http\Controllers;

use Log;
use App\Transformer\UserTransformer;
use App\Repository\UsersRepository;
use Dingo\Api\Routing\Helpers;
use Illuminate\Http\Request;

class UserController extends Controller
{
	use Helpers;

    protected $userRepository;
    protected $userTransformer;

    public function __construct(UsersRepository $userRepository,UserTransformer $userTransformer)
    {
    	$this->userRepository = $userRepository;
    	$this->userTransformer = $userTransformer;
    }

    public function show(){
        Log::info('Showing all users');
    	$user=$this->userRepository->getAll();

    	$response=$this->response->item($user,new UserTransformer());

        return $response;
    }

    public function insert(Request $request){
    	$user=$this->userRepository->insertUser($request);
    	return $user;
    }

    public function showById($id){
        Log::info('Showing user : '.$id);
    	$user=$this->userRepository->getByName($id);

    	$response=$this->response->item($user,new UserTransformer());
    	return $response;
    }
}
