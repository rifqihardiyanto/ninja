<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Imports\DataImport;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class DataController extends Controller
{
    public function index()
    {
        $datas = Data::all()->take(10);
        return view('welcome', compact('datas'));
    }

    public function import() 
    {
        return view('import');
    }

    public function import_action(Request $request)
    {
        $file = $request->file('file')->store('public/import');
        $import = new DataImport;
        $import->import($file);

        if ($import->failures())
        {
            return back()->withFailures($import->failures());
        }

        return redirect('/')->with('success', 'Data Berhasil Di Import');
    }

    public function cari(Request $request){
        // Get the search value from the request
        $cari = $request->input('cari');
    
        // Search in the title and body columns from the posts table
        $datas = Data::query()
            ->where('kecamatan', 'LIKE', "%{$cari}%")
            ->orWhere('kabupaten', 'LIKE', "%{$cari}%")
            ->get();
    
        // Return the search view with the resluts compacted
        return view('welcome', compact('datas'));
    }

    public function home()
    {
        return view('layout.index');
    }
}
