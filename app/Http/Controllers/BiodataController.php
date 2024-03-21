<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\biodata;
use Alert;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;



class BiodataController extends Controller
{
    //
    public function index()
    {
        $biodatas=Biodata::all();
        return view ('biodata.index', compact('biodatas'));
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'=>'required',
            'ttl'=>'required',
            'jurusan'=>'required',
            'kelas'=>'required'
        ]);
        DB::table('biodatas')->insert([
            'nama'=>$request->nama,
            'ttl'=>$request->ttl,
            'jurusan'=>$request->jurusan,
            'kelas'=>$request->kelas
        ]);
        if(DB::table('biodatas')){
            Alert::success('success','data berhasil disimpan');
            return redirect()->route('biodata.index')->with(['success'=>'Data berhasil disimpan']);
        }else{
            return redirect()->route('biodata.index')->with(['error'=>'Data gagal disimpan']);
        }
    }
    public function edit($id)
    {
        $biodata=Biodata::find($id);
        return view('biodata.edit', compact('biodata'));
    }
    public function destroy($id)
{
    $biodata = biodata::FindOrFail($id);

    $biodata->delete();
    if($biodata){
        Alert::success('success','data berhasil disimpan');
        return redirect()->route('biodata.index')->with(['success'=>'Data berhasil disimpan']);

    }else{
        return redirect()->route('biodata.index')->with(['error'=>'Data gagal dihapus']);
    
    }
}
    public function update(Request $request, $id)
    {
    $this->validate($request, [
        'nama' => 'required',
        'ttl' => 'required',
        'jurusan' => 'required',
        'kelas' => 'required',
        
        
        
    ]);
    //get data biodata by ID
 
    $biodata=Biodata::findOrFail($id); 
    $biodata->update([
       
        'nama'=>$request->nama,
        'ttl'=>$request->ttl,
        'jurusan'=>$request->jurusan,
        'kelas'=>$request->kelas ,
       
    ]); 
    if($biodata){
    //redirect dengan pesan sukses
    return redirect()->route('biodata.index')->with(['success'=>'Data berhasil 
    disimpan']);
    }else{
        return redirect()->route('biodata.index')->with(['error'=>'Data gagal disimpan']);
    }
    }
}