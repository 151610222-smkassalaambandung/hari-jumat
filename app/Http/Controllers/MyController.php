<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //passing data basic
    public function percobaan()
    {
    	$a ="shodik";
    	return "nama saya adalah ".$a;
    }

    //passing data view
    public function percobaan2()
    {
    	return view('about');
    }

    //passing data variable to view
    public function percobaan3()
    {
    	$b ="sodik";
    	return view('latihan.saya', compact('b'));
    }

 	public function percobaan4()
    {
    	$c ="sodik";
    	$d ="XII RPL 2";
    	$e =" SMK ASSALAAM";
    	return view('latihan2.nama', compact('c','d','e'));
    }

    public function percobaan5()
    {
    	$f ="1";
    	$g ="2";
    	$h ="3";
    	return view('seleksi', compact('f','g','h'));
    }

    public function percobaan6()
    {
    	$buah =['mangga','jeruk','apel','anggur'];
    	return view('buah', compact('buah'));
    }


    public function percobaan7()
    {
    	$buah =['mangga','jeruk','apel','anggur','manggis'];
    	$hewan =['kucing','ciciak','kuda','kelinci','ikan'];
    	$computer =['asus','samsung','acer','intel','lenovo'];

    	return view('data', compact('buah','hewan','computer'));
    }

    



    public function latihan($data,$data2=null)
    {
    	$array=array ('buah'=> ['mangga'=>['harumanis','marijan'],
                                'jeruk'=>['bali','manis'],
                                'alpukat'=>['fuji','hesjo']],

                    'hewan'=> ['kucing'=>['anggora','persia'],
                                'hamster'=>['hamataro','hamatari'],
                                'kelinci'=>['anggora','persia']],

                    'komputer'=> ['asus'=>['456UR','456'],
                                'dell'=>['alineware','inspiron'],
                                'acer'=>['6930','7780']]
                    
                    );



        if ($data){
            $query =( array_keys($array[$data]));

        }
        if ($data2){
            $query =($array[$data][$data2]);
        }
    	return view('buahan', compact('query','data','data2'));
    }



}
