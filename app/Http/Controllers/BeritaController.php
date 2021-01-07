<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;
use File; 

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::paginate(3);
        
        return view('berita.berita',compact('berita'));
    }
    public function tambah(){
        return view('berita.create');
    }
    public function upload(Request $request)
    {
        $this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:2048',
            'ket_berita' => 'required',
        ]);

        $file = $request->file('file');
        $nama_file = time()."_".$file->getClientOriginalName();

        $tujuan_upload = 'data_file';
        $file->move($tujuan_upload,$nama_file);
        
        Berita::create([
			'file' => $nama_file,
			'keterangan' => $request->ket_berita,
		]);
        
        alert()->success('Berhasil.','Berita tersimpan!');
		return redirect()->back();
    }
    public function hapus($id)
    {
        $berita = Berita::where('id',$id)->first();
	    File::delete('data_file/'.$berita->file);
 
        // hapus data
        Berita::where('id',$id)->delete();

        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->back();
    }
    public function edit($id){
        $berita = Berita::where('id',$id)->get();

        return view('berita.edit',compact('berita'));
    }

    public function update(Request $request){

       $berita = Berita::where('id',$request->id)->first();
        
        
        if($request->hasfile('file')){
            $file_old = 'data_file/'.$berita->file;
            unlink($file_old);

            $file = $request->file;
            $filename = time()."_".$file->getClientOriginalName();
            $file->move('data_file', $filename);

        $berita->update([
            'file' => $filename,
            'keterangan' => $request->ket_berita,           
        ]);
        }
        else{
            $berita->update([
                'keterangan' => $request->ket_berita,           
            ]); 
        }
        
        return redirect('/berita');
   }
   public function detail($id)
   {
        $detailBerita = Berita::where('id',$id)->get();
        return view('detail-berita',['detail' => $detailBerita]);
   }
}
