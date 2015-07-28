<?php namespace App\Http\Controllers;

use App\Bidang;
use App\Http\Requests;
use App\Http\Requests\CreateBidangRequest;
use App\Http\Controllers\Controller;
use App\Kategori;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;


class BidangController extends Controller {

    public function index()
    {
        $bidangs = Bidang::all();
        return view('bidang.index', compact('bidangs'));
    }

    public function create()
    {
        return view('bidang.create');
    }

    public function edit($id)
    {
        $bidang = Bidang::findOrFail($id);
        return view ('bidang.edit', compact('bidang'));
    }

    public function update($id, Request $request)
    {
        $bidang = Bidang::findOrFail($id);
        $bidang->update($request->all());
        Flash::warning('Bidang Operasional berhasil dirubah !!!');
        return redirect('bidang');
    }

    public function store(CreateBidangRequest $request)
    {
        $input = $request->all();
        Bidang::create($input);
        Flash::success('Bidang Operasional berhasil ditambahkan !!!');
        return redirect('bidang');
    }

    public function destroy($id)
    {
        $bidang = Bidang::findOrFail($id);
        $bidang->delete();
        Flash::error('Bidang Operasional berhasil dihapus !!!');
        return redirect('bidang');
    }

}
