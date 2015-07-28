<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Doc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PegController extends Controller {

    public function __construct()
    {
        $this->middleware('pegawai');
    }

    public function index()
    {
        $docs = Doc::where('ket', '=', '1')->latest()->limit('5')->get();
        return view('pegawai.index', compact('docs'));
    }
}
