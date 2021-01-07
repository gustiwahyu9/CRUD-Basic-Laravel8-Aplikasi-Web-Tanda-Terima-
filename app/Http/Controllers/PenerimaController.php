<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Symfony\Component\Mime\MimeTypes;
use PDF;
use Illuminate\Support\Facades\Storage;

class PenerimaController extends Controller
{
    public function index(Request $request)
    {
        $penerima = \App\Penerima::all();
        if ($request->has('cari')) {
            $penerima = \App\Penerima::where('lpj_bulan', 'LIKE', '%' . $request->cari . '%')->get();
            $penerima = \App\Penerima::where('satker', 'LIKE', '%' . $request->cari . '%')->get();
            $penerima = \App\Penerima::where('nama_lengkap', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $penerima = \App\Penerima::all();
        }

        return view('penerima.index', ['penerima' => $penerima]);
    }

    public function create(Request $request)
    {
        $penerima = \App\Penerima::create($request->all());
        if ($request->hasfile('image')) {
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $penerima->image = $request->file('image')->getClientOriginalName();
            $penerima->save();
        }

        return redirect('/penerima')->with('sukses', 'Data Berhasil Disimpan');
    }

    public function delete($id)
    {
        $penerima = \App\Penerima::findOrFail($id);
        $file_name = $penerima->image;
        $penerima->delete($penerima);
        $file_path = public_path('images/' . $file_name);
        unlink($file_path);
        return redirect('/penerima')->with('hapus', 'Data berhasil dihapus');
    }

    public function detail($id)
    {
        $penerima = \App\Penerima::findOrFail($id);
        return view('penerima.detail', ['penerima' => $penerima]);
    }

    public function edit($id)
    {
        $penerima = \App\Penerima::find($id);
        return view('penerima.edit', ['penerima' => $penerima]);
    }

    public function update(Request $request, $id)
    {
        $penerima = \App\Penerima::find($id);
        $penerima->update($request->all());
        if ($request->hasfile('image')) {
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $penerima->image = $request->file('image')->getClientOriginalName();
            $penerima->save();
        }
        return redirect('/penerima')->with('update', 'Data berhasil diupdate jon!');
    }

    public function exportpdf()
    {
        $penerima = \App\Penerima::all();
        $pdf = PDF::loadView('export.penerimapdf', ['penerima' => $penerima]);
        return $pdf->download('penerima.pdf');
    }
}
