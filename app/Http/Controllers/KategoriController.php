<?php namespace App\Http\Controllers;

use App\Kategori;
use App\Http\Requests;
use App\Http\Requests\CreateKategoriRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;


class KategoriController extends Controller {

    public function index()
    {
        $kategoris = Kategori::all();
        return view('kategori.index', compact('kategoris'));
    }

    public function create()
    {
        return view('kategori.create');
    }

    public function edit($id)
    {
        $kategori = Kategori::findOrFail($id);
        return view ('kategori.edit', compact('kategori'));
    }

    public function update($id, Request $request)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->update($request->all());
        Flash::warning('Kategori Dokumen berhasil dirubah !!!');
        return redirect('kategori');
    }

    public function store(CreateKategoriRequest $request)
    {
        $input = $request->all();
        Kategori::create($input);
        Flash::success('Kategori Dokumen berhasil ditambahkan !!!');
        return redirect('kategori');
    }

    public function destroy($id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();
        Flash::error('Kategori Dokumen berhasil dihapus !!!');
        return redirect('kategori');
    }
}
