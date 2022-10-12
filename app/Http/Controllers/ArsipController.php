<?php

namespace App\Http\Controllers;

use App\Models\Arsip;
use PDF;
use App\Exports\ExportArsip;
use Illuminate\Http\Request;

class ArsipController extends Controller
{
    public function index()
    {
        $arsip = Arsip::all();

        return view('arsip.index', compact('arsip'));
    }
    public function create()
    {
        return view('arsip.create');
    }
    public function store(Request $request)
    {
        $files = $request->file('file');
        $dokumen = 'files'.time().'.'.$files->extension();
        $files->move(public_path('arsip'),$dokumen);

        

        $arsip = new Arsip();
        $arsip->no_surat = $request->no_surat;
        $arsip->kategori = $request->kategori;
        $arsip->judul = $request->judul;
        $arsip->file = $dokumen;

        $arsip->save();

        return redirect('/')->with('toast_success', 'Berhasil Menambahkan Data');
    }

     public function destroy($id)
    {
        Arsip::destroy($id);

        return redirect('/');
    }
    public function show($id){
        
        $arsip = Arsip::where('id', $id)->first();

        return view('arsip.show', compact('arsip'));
    }
    public function printpdf()
    {
        // ambil data buku 
        $data = Buku::all();
        // tangkap kedalam file cetakpdf dalam bentuk landscape 
        $pdf = PDF::loadview('pages.buku.cetak', ['data'=>$data])->setPaper('A4', 'landscape');
        // file di download 
        return $pdf->download('buku.pdf');
    }
    
}