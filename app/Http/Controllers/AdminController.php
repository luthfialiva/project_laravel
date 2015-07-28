<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Activity;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    private $user, $users, $kepbag, $pegawai;

    public function __construct(User $user)
    {
        $this->users = $user->paginate(15);
        $this->kepbag = $user->whereRole(2)->paginate(15);
        $this->pegawai = $user->whereRole(3)->paginate(15);
        $this->user = $user;
        $this->middleware('auth');
        $this->middleware('administrator');
    }

	public function index()
	{
		$feeds = Activity::with('user', 'subject')->latest()->limit('5')->get();
        return view('admin.index', compact('feeds'));
	}
	
	public function act()
	{
		$feeds = Activity::with('user', 'subject')->latest()->get();
        return view('admin.act', compact('feeds'));
	}

    public function all()
    {
        return view('admin.users.all')->with([
            'users' => $this->users,
            'kepbag' => $this->kepbag,
            'pegawai' => $this->pegawai
        ]);
    }


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('admin.create')->with([
            'users' => $this->users,
            'kepbag' => $this->kepbag,
            'pegawai' => $this->pegawai
        ]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateUserRequest $request, User $user)
	{
        $user->create([
            'username' => $request->get('username'),
            'password' => bcrypt($request->get('password')),
            'name'     => $request->get('name'),
            'role'     => $request->get('role'),
            'email'    => $request->get('email'),
            'picture'  => '/picture/default.png'
        ]);
        Flash::success('User berhasil ditambahkan !!!');
        return redirect()->route('admin.all');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
       return $user->activity;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$user = $this->user->find($id);
        return view('admin.edit')->with([
            'user' => $user,
            'users' => $this->users,
            'kepbag' => $this->kepbag,
            'pegawai' => $this->pegawai
        ]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
        $user = $this->user->find($id);
        $user->fill([
            'username' => $request->get('username'),
            'name' => $request->get('name'),
            'email' => $request->get('email')
        ])->save();
        Flash::warning('User berhasil dirubah !!!');
		return redirect()->intended(route('admin.all'));
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user = User::findOrFail($id);
        $user->delete();
        Flash::error('User berhasil dihapus !!!');
        return redirect()->route('admin.all');
	}

}
