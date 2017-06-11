<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class Siswacontroller extends Controller
{
    //

		public function percobaan($post)
		{
			$a =siswa::all();
			return view('siswa' ,compact ('a'));


		}

			public function show()
		{
			$a=siswa::find(1);
			return $a;
		}
}
