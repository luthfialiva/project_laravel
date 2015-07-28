<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use Illuminate\Support\Facades\Auth;
use Laracasts\Flash\Flash;
use Illuminate\Support\ServiceProvider;

class ProfileController extends Controller {

    private $user, $users, $kepbag, $pegawai;

    public function __construct(User $user)
    {
        $this->users = $user->paginate(15);
        $this->kepbag = $user->whereRole(2)->paginate(15);
        $this->pegawai = $user->whereRole(3)->paginate(15);
        $this->user = $user;
        $this->middleware('auth');
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.profile', compact('user'));
    }

    public function update($id, Request $request)
    {
        $file = \Input::file('picture');
        $name = time() . '-' . \Auth::user()->username . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/picture/', $name);

        User::find($id)->update([
            'name' => $request->get('name'),
            'username' => $request->get('username'),
            'password'  => bcrypt($request->input('password')),
            'email'     => $request->input('email'),
            'picture' => '/picture/' . $name
        ]);

        Flash::warning('Profile berhasil dirubah !!!');
        if(Auth::User()->role == 1) {
            return redirect('admin');
        }
        elseif(Auth::User()->role == 2) {
            return redirect('kepbag');
        }
        else {
            return redirect('peg');
        }
    }
}
