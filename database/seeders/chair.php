<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class chair extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ////////////// Từ Phòng 1 đến Phòng 10  
        for($p = 1; $p < 11; $p++){
        	$a = 1; $b = 1; $c = 1; $d = 1; $e = 1; $f = 1; $g = 1; $h = 1; $m = 1; $j = 1; $k = 1; $l = 1; $n = 1;
	        for ($i = 0; $i < 12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'A'.$a,     #hang A 1 
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $a=$a+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'B'.$b,	#hang B 2
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $b=$b+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'C'.$c,	#hang C 3
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $c=$c+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'D'.$d,	#hang D 4
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $d=$d+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'E'.$e,	#hang E 5
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $e=$e+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'F'.$f,	#hang F 6
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $f=$f+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'G'.$g,	#hang G 7
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $g=$g+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'H'.$h,	#hang H 8
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $h=$h+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'I'.$m,	#hang I 9
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $m=$m+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'J'.$j,	 #hang J 10
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $j=$j+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'K'.$k,	#hang K 11
	                'chair_types'		=> 2,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $k=$k+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'L'.$l,		#hang L 12
	                'chair_types'		=> 2,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $l=$l+1;
	        }

	        for ($i = 0; $i < 7; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P'.$p.'M'.$n,	#hang M 13
	                'chair_types'		=> 3,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $n=$n+1;
	        }
	    }  
	    
	    ////////////////////////////// 2 phòng 3D

	    for($p = 11; $p < 13; $p++){
        	$a = 1; $b = 1; $c = 1; $d = 1; $e = 1; $f = 1; $g = 1; $h = 1; $m = 1; $j = 1;
  	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P3D'.$p.'A'.$a,     #hang A 1 
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $a=$a+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P3D'.$p.'B'.$b,     #hang B 2
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $b=$b+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P3D'.$p.'C'.$c,	#hang C 3
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $c=$c+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P3D'.$p.'D'.$d,	#hang D 4
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $d=$d+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P3D'.$p.'E'.$e,	#hang E 5
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $e=$e+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P3D'.$p.'F'.$f,	#hang F 6
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $f=$f+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P3D'.$p.'G'.$g,	#hang G 7
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $g=$g+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P3D'.$p.'H'.$h,	#hang H 8
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $h=$h+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P3D'.$p.'I'.$m,	#hang I 9
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $m=$m+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'P3D'.$p.'J'.$j,	 #hang J 10
	                'chair_types'		=> 1,
	                'chair_theater'		=> $p,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $j=$j+1;
	        }  
	    }

	    ////////////////////////////// Phòng IMAX

	    $a = 1; $b = 1; $c = 1; $d = 1; $e = 1; $f = 1; $g = 1; $h = 1; $m = 1; $j = 1;
	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'PIMAXA'.$a,     #hang A 1 
	                'chair_types'		=> 1,
	                'chair_theater'		=> 13,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $a=$a+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'PIMAXB'.$b,     #hang B 2
	                'chair_types'		=> 1,
	                'chair_theater'		=> 13,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $b=$b+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'PIMAXC'.$c,	#hang C 3
	                'chair_types'		=> 1,
	                'chair_theater'		=> 13,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $c=$c+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'PIMAXD'.$d,	#hang D 4
	                'chair_types'		=> 1,
	                'chair_theater'		=> 13,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $d=$d+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'PIMAXE'.$e,	#hang E 5
	                'chair_types'		=> 1,
	                'chair_theater'		=> 13,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $e=$e+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'PIMAXF'.$f,	#hang F 6
	                'chair_types'		=> 1,
	                'chair_theater'		=> 13,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $f=$f+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'PIMAXG'.$g,	#hang G 7
	                'chair_types'		=> 1,
	                'chair_theater'		=> 13,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $g=$g+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'PIMAXH'.$h,	#hang H 8
	                'chair_types'		=> 1,
	                'chair_theater'		=> 13,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $h=$h+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'PIMAXI'.$m,	#hang I 9
	                'chair_types'		=> 1,
	                'chair_theater'		=> 13,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $m=$m+1;
	        }

	        for ($i = 0; $i <12; $i++){
	            DB::table('tbl_chair')->insert([
	                'chair_name'		=> 'PIMAXJ'.$j,	 #hang J 10
	                'chair_types'		=> 1,
	                'chair_theater'		=> 13,
	                'chair_status'		=> 1,
	                'created_at' 		=> now(),
	           		'updated_at'		=> now()
	            ]);
	            $j=$j+1;
	        }  
	    
    }
}
