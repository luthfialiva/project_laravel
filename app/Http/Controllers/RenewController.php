<?php namespace App\Http\Controllers;

use App\Doc;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class RenewController extends Controller {

    public function show($id)
    {
        $doc = Doc::findOrFail($id);
        return view('reminder.showrenew', compact('doc'));
    }

    public function update($id, Requests\DocRequest $request)
    {
        $doc = Doc::findOrFail($id);

        $input = $request->all();
        $until=$_REQUEST['untill_date'];
        $date = str_replace('-','/', $until);{
        $input['warn_date'] = date('Y-m-d', strtotime($date . "-1 months"));}

        $doc->update($input);
        Flash::success('Masa aktif dokumen telah diperpanjang !!!');
        return redirect('reminder');
    }

}
