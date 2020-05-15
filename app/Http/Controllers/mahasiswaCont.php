<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class mahasiswaCont extends Controller
{
    
      public function viewMahasiswa(){
        
        $mhs = DB::table('mahasiswa')->get();

            return view('mahasiswa')
            ->with('mhs',$mhs)
            ->with('act','viewMahasiswa');
       
    }

     public function viewMahasiswaWithMsg($msg){
        
        $mhs = DB::table('mahasiswa')->get();

            return view('mahasiswa')
            ->with('mhs',$mhs)
            ->with('msg',$msg)
            ->with('act','viewMahasiswa');
    }


     public function viewTambahMahasiswa(){
        return view('mahasiswa')
        ->with('act','ViewTambahMahasiswa');

     }

     public function viewEditMahasiswa($id){
        
        $mhs = DB::table('mahasiswa')->where('id','=',$id)->first();

        return view('mahasiswa')
        ->with('mhs',$mhs)
        ->with('act','ViewEditMahasiswa');
    }


    public function viewDeleteMahasiswa($id){
        $mhs = DB::table('mahasiswa')->get();

        $mhs_del = DB::table('mahasiswa')->where('id','=',$id)->first();

        return view('mahasiswa')
        ->with('mhs',$mhs)
        ->with('mhs_del',$mhs_del)
        ->with('act','ViewDeleteMahasiswa');
    }

	public function prosesTambahMahasiswa(Request $req){
    	$nim = $req->nim;
    	$nama = $req->nama;
    	$jurusan = $req->jurusan;
        $alamat = $req->alamat;

    	
        $hasil = DB::table('mahasiswa')->insert(
            ['nim' => $nim, 'nama' => $nama, 'jurusan' => $jurusan, 'alamat' => $alamat]
        );

        if($hasil){
            return redirect('/mhs/msg/1');
        }else{
            return redirect('/mhs/msg/2');;
        }

    }

    public function prosesEditMahasiswa(Request $req){
        $id = $req->id;
        $nim = $req->nim;
        $nama = $req->nama;
        $jurusan = $req->jurusan;
        $alamat = $req->alamat;


        
        $hasil = DB::table('mahasiswa')
            ->where('id','=',$id)
            ->update(['nim' => $nim, 'nama' => $nama, 'jurusan' => $jurusan, 'alamat' => $alamat]);

        if($hasil){
            return redirect('/mhs/msg/3');
        }else{
            return redirect('/mhs/msg/4');
        }
    }


    public function prosesDeleteMahasiswa($id){

        $del = DB::table('mahasiswa')->where('id', '=', $id)->delete();

        return redirect('/mhs/msg/5');
    }

}