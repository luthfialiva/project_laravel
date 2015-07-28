<?php namespace App\Http\Controllers;

use App\Doc;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KepbagController extends Controller {

    public function __construct()
    {
        $this->middleware('kepalabagian');
    }

    public function index()
    {
        $docs = Doc::where('ket', '=', '1')->latest()->limit('5')->get();
        return view('kepbag.index', compact('docs'));
    }

}
