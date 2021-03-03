<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AgencyController extends Controller
{
    public function index()
    {
        $agencies = DB::table('agencies')->paginate(10);
        return view('index', compact(['agencies']));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $agency = new Agency();

        $agency->code = $request->code;
        $agency->name = $request->name;
        $agency->phone = $request->phone;
        $agency->email = $request->email;
        $agency->address = $request->address;
        $agency->manager = $request->manager;
        $agency->status = $request->status;

        $agency->save();
        return redirect()->route('agency.index');
    }

    public function edit($id)
    {
        $agency = Agency::find($id);
        return view('edit', compact(['agency']));
    }

    public function update($id, Request $request)
    {
        $agency = Agency::find($id);

        $agency->name = $request->name;
        $agency->phone = $request->phone;
        $agency->email = $request->email;
        $agency->address = $request->address;
        $agency->manager = $request->manager;
        $agency->status = $request->status;

        $agency->save();
        return redirect()->route('agency.index');
    }

    public function show($id)
    {
        $agency = Agency::find($id);
        return view('show', compact(['agency']));
    }

    public function delete($id)
    {
        $agency = Agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('agency.index');
    }

    public function search()
    {

    }

}
