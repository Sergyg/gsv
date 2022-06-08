<?php

namespace App\Http\Controllers;

use App\Models\Delehacji;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class DelehacjiController extends Controller
{
    public function index()
    {
        return view('delehacji');
    }
    public function getDelehacji (Request $request)
    {
        if ($request->ajax()) {
            $data = Delehacji::latest()->get();
            return Datatables::of($data)
                ->make(true);
        }
    }

}
