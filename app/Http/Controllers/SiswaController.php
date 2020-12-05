<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\siswa;
use App\Imports\SiswaImport; 
use PDF;
use Excel;

class SiswaController extends Controller
{
    //
    public function index()
    {
    	$siswa = siswa::all();
    	return view('siswa',['siswa'=>$siswa]);
    }
 
    public function cetak_pdf()
    {
    	$siswa = Siswa::all();
 
    	$pdf = PDF::loadview('siswapdf',['siswa'=>$siswa]);
    	return $pdf->download('laporan-siswa-pdf');
    }
    public function store(Request $request)
    {
        
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new SiswaImport, $file); //IMPORT FILE 
            return redirect()->back()->with(['success' => 'Upload success']);
        }  
        return redirect()->back()->with(['error' => 'Please choose file before']);

    }

    public function storeData(Request $request)
    {
dd('test');
        //VALIDASI
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new ProductsImport, $file); //IMPORT FILE 
            return redirect()->back()->with(['success' => 'Upload success']);
        }  
        return redirect()->back()->with(['error' => 'Please choose file before']);
    }

}
