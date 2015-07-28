<?php namespace App\Http\Controllers;

use App\Doc;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Laracasts\Flash\Flash;

class RemindController extends Controller {

    public function show($id)
    {
        $doc = Doc::findOrFail($id);
        return view('reminder.showrem', compact('doc'));
    }

    public function update($id, Requests\DocRequest $request)
    {
        $doc = Doc::findOrFail($id);
        $doc->ket = 0;
        $doc->save();
        return redirect('reminder');
    }

}
