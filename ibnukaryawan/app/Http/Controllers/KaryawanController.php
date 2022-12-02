<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KaryawanController extends Controller
{
    public function index(){
        
        return view('karyawan.index',[
            'karyawans' =>  Karyawan::all()
        ]);
    }
    public function create()
    {
        return view('Karyawan.create');
    }

   
    public function store(Request $request)
    {
        
        
        
        $karyawan= Karyawan::create( $request->validate(
            [
             'nama' => 'required|max:30',
             'nik' => 'required|digits:16',
             'jenis_kelamin' => 'required',
             'tempat_lahir' => 'required',
             'tanggal_lahir' => 'before:12/31/2004',
             'alamat' => 'required',
            ],
         ));
        $karyawan->gajih()->create($request->validate(
            [
                // 'karyawan_id' =>'required',
                'gajih_pokok' => 'required|numeric',
                'gajih_lembur' => 'required|numeric',
                'tunjangan' => 'required|numeric',
                'potongan' => 'required|numeric',
                'total_gajih' => 'required|numeric',
                // 'total_gajih' => [
                //     'required',
                //     function ($attribute, $value, $fail) use ($request) {
                //         $total_gajih = (int)$request->gajih_pokok + (int)$request->gajih_lembur + (int)$request->tunjangan - (int)$request->potongan;
                //         if ((int)$value !== $total_gajih) {
                //             $fail('Wrong '.$attribute.'! Try again');
                //         }
                //     },
                // ],

            ],
            
        ));

        return redirect()->route('karyawans.index')->with('message',"Data berhasil ditambahkan");
    }

    public function edit(Karyawan $karyawan){
        return view('karyawan.edit',[
            'karyawan' => $karyawan
        ]);
    }


    public function update(Request $request, Karyawan $karyawan){
        $karyawan->update( $request->validate(
            [
             'nama' => 'required|max:30',
             'nik' => 'required|digits:16',
             'jenis_kelamin' => 'required',
             'tempat_lahir' => 'required',
             'tanggal_lahir' => 'before:12/31/2004',
             'alamat' => 'required',
            ],
         ));
        $karyawan->gajih()->update($request->validate(
            [
                // 'karyawan_id' =>'required',
                'gajih_pokok' => 'required|numeric',
                'gajih_lembur' => 'required|numeric',
                'tunjangan' => 'required|numeric',
                'potongan' => 'required|numeric',
                'total_gajih' => 'required|numeric',
                // 'total_gajih' => [
                //     'required',
                //     function ($attribute, $value, $fail) use ($request) {
                //         $total_gajih = (int)$request->gajih_pokok + (int)$request->gajih_lembur + (int)$request->tunjangan - (int)$request->potongan;
                //         if ((int)$value !== $total_gajih) {
                //             $fail('Wrong '.$attribute.'! Try again');
                //         }
                //     },
                // ],

            ],
            
        ));
         return redirect()->route('karyawans.index')->with('message',"Data berhasil diedit");
    }

    public function destroy(Karyawan $karyawan){
        $image_path ='storage/Karyawan/'.$karyawan->photo;
        if (File::exists(public_path( $image_path ))){
           unlink($image_path);
        }
        
        Karyawan::destroy($karyawan->id);
        return redirect()->route('karyawans.index')->with('message',"Data $karyawan->nama berhasil dihapus");

    }
}
