<?php namespace App\Http\Controllers;

use App\Doc;
use App\Http\Requests;
use App\Http\Requests\DocRequest;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class ReminderController extends Controller {

    public function index()
    {
        $docs = Doc::where('ket', '=', '1')->get();
        return view('reminder.index', compact('docs'));
    }
    
    public function history()
    {
        $docs = Doc::where('ket', '=', '0')->get();
        return view('reminder.history', compact('docs'));
    }

    public function show($id)
    {
        $doc = Doc::findOrFail($id);
        return view('reminder.show', compact('doc'));
    }

    public function create()
    {
        return view('reminder.create');
    }

    public function store(DocRequest $request)
    {
        $input = $request->all();
        $input['id_user'] = \Auth::User()->id;
        $input['ket'] = 1;        
        $until=$_REQUEST['untill_date'];
        $date = str_replace('-','/', $until);{
        $input['warn_date'] = date('Y-m-d', strtotime($date . "-1 months"));}

        Doc::create($input);
        Flash::success('Data Dokumen berhasil ditambahkan !!!');
        return redirect('reminder');
    }

    public function edit($id)
    {
        $doc = Doc::findOrFail($id);
        return view ('reminder.edit', compact('doc'));
    }

    public function update($id, DocRequest $request)
    {
        $doc = Doc::findOrFail($id);

        $input = $request->all();
        $until=$_REQUEST['untill_date'];
        $date = str_replace('-','/', $until);{
        $input['warn_date'] = date('Y-m-d', strtotime($date . "-1 months"));}

        $doc->update($input);
        Flash::warning('Data Dokumen berhasil dirubah !!!');
        return redirect('reminder');
    }


    public function destroy($id)
    {
        $doc = Doc::findOrFail($id);
        $doc->delete();
        Flash::error('Data Dokumen berhasil dihapus !!!');
        return redirect('reminder');
    }

}