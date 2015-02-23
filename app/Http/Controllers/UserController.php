<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserRequest;
use App\User;
use App\Models\Role;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;


class UserController extends Controller {

	/**
     * @var User
     * @var Role
     */
    private $user;
    private $role;


    /**
     * Constructor.
     *
     * @param User $user
     */
    public function  __construct(User $user, Role $role)
    {
        $this->user = $user;
        $this->role = $role;
        $this->middleware('auth');
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$limit = 10;
		$users = $this->user
							->with('role')
							->orderBy('created_at', 'desc')
							->paginate($limit); 
		
		$m = 1;  // how many months ago, for example

		$now = time();
		$cm = date("m",$now); // current month
		$yr = date("Y",$now) - intval((12 + $m - $cm)/12);
		$month = (($cm + 11 - ($m % 12) ) % 12) + 1;

		echo "$m months ago: $month  yr: $yr\n";
		return view('user.index', compact('users', 'limit'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$role = $this->role->all()->lists('title', 'id');
		return view('user.create', compact('role'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store( UserStoreRequest $request )
	{
		$activate = 0;
		if( $request['activate'] )
			$activate = 1;
		$this->user->create([
			'name' => $request['firstname'],
			'email' => $request['email'],
			'password' => bcrypt($request['password']),
			'firstname' => $request['firstname'],
			'middlename' => $request['middlename'],
			'lastname' => $request['lastname'],
			'gender' => $request['gender'],
			'country' => $request['country'],
			'state' => $request['state'],
			'city' => $request['city'],
			'address' => $request['address'],
			'postal' => $request['postal'],
			'role_id' => $request['role'],
			'isactive' => $activate
		]);
        return redirect()->route('user.index');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = $this->user->with('role')->findOrFail( $id );
		return view('user.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->user
							->with('role')
							->findOrFail( $id );
		$roles = $this->role->all()->lists('title', 'id');	
		return view('user.edit', compact('user', 'roles'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(UserUpdateRequest $request, $id)
	{
		$userExists = $this->user->findOrFail($id);
		$userUpdate = [];
		$activate = 0;
		if( $request['activate'] )
			$activate = 1;
		if( $request['email'] ){
			if($userExists->email != $request['email'])
				$userUpdate['email'] = $request['email'];
		}
		if( $request['password'] )
			$userUpdate['password'] = bcrypt($request['password']);
		
		$userUpdate['name'] 		= $request['firstname'];
		$userUpdate['firstname'] 	= $request['firstname'];
		$userUpdate['middlename'] 	= $request['middlename'];
		$userUpdate['lastname'] 	= $request['lastname'];
		$userUpdate['gender'] 		= $request['gender'];
		$userUpdate['country'] 		= $request['country'];
		$userUpdate['state'] 		= $request['state'];
		$userUpdate['city'] 		= $request['city'];
		$userUpdate['address'] 		= $request['address'];
		$userUpdate['postal'] 		= $request['postal'];
		$userUpdate['role_id'] 		= $request['role'];
		$userUpdate['isactive'] 	= $activate;
		$userExists->update($userUpdate, $id);
		return redirect()->route('user.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->user->findOrFail($id)->delete();

        return redirect()->route('user.index');
	}

	public function showlimit( UserRequest $request){
		$limit = $request['limit'];
		$users = $this->user
							->with('role')
							->orderBy('created_at', 'desc')
							->paginate($limit); 
		return view('user.index', compact('users', 'limit'));
	}
}
