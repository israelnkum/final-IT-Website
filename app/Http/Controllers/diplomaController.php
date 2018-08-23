<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class diplomaController extends Controller
{
    public function store(){
        $newData4Path ="";
        $midSemPath ="";
        $path ="";
        $lvl100Sem1EveningDataPath ="";
        $head="";
        //hnd Level 100 Semester 1
        if (isset($_POST['diplomaLvl100sem1'])){
            $head="Diploma level 100 semester I";
            //hnd Level 100 Semester 1 REGULAR end of Sem
            $lec = scandir('storage/questionFiles/diploma/level100/firstSem/endOfSem/');
            $lecData =[];

            for ($i = 2; $i<count($lec);$i++){
                if ($lec[$i] != '.' || $lec[$i] != '..'){
                    array_push($lecData,$lec[$i]);
                    $path = "storage/questionFiles/diploma/level100/firstSem/endOfSem/";

                }
            }


            //hnd Level 100 Semester 1 REGULAR midSemester
            $lvl100Sem1MidSem = scandir('storage/questionFiles/diploma/level100/firstSem/midSem/');
            $lvl100Sem1MidSemData =[];

            for ($i = 2; $i<count($lvl100Sem1MidSem);$i++){
                if ($lvl100Sem1MidSem[$i] != '.' || $lvl100Sem1MidSem[$i] != '..'){
                    array_push($lvl100Sem1MidSemData,$lvl100Sem1MidSem[$i]);
                    $midSemPath = "storage/questionFiles/diploma/level100/firstSem/midSem/";

                }
            }




            return view('pastQuestion')
                ->with('lecData',$lecData)
                ->with('path',$path)
                ->with('lvl100Sem1MidSemData',$lvl100Sem1MidSemData)
                ->with('midSemPath',$midSemPath)
                ->with('newData4Path',$newData4Path)
                ->with('head',$head)
                ;
        }//End diploma Level 100 Semester 1



        //diploma Level 100 Semester 2
        if (isset($_POST['diplomaLvl100sem2'])){
            $head="Diploma level 100 semester II";
            //hnd Level 100 Semester 1 REGULAR end of Sem
            $lec = scandir('storage/questionFiles/diploma/level100/secondSem/endOfSem/');
            $lecData =[];

            for ($i = 2; $i<count($lec);$i++){
                if ($lec[$i] != '.' || $lec[$i] != '..'){
                    array_push($lecData,$lec[$i]);
                    $path = "storage/questionFiles/diploma/level100/secondSem/endOfSem/";

                }
            }


            //hnd Level 100 Semester 1 REGULAR midSemester
            $lvl100Sem1MidSem = scandir('storage/questionFiles/diploma/level100/secondSem/midSem/');
            $lvl100Sem1MidSemData =[];

            for ($i = 2; $i<count($lvl100Sem1MidSem);$i++){
                if ($lvl100Sem1MidSem[$i] != '.' || $lvl100Sem1MidSem[$i] != '..'){
                    array_push($lvl100Sem1MidSemData,$lvl100Sem1MidSem[$i]);
                    $midSemPath = "storage/questionFiles/diploma/level100/secondSem/midSem/";

                }
            }




            return view('pastQuestion')
                ->with('lecData',$lecData)
                ->with('path',$path)
                ->with('lvl100Sem1MidSemData',$lvl100Sem1MidSemData)
                ->with('midSemPath',$midSemPath)
                ->with('lvl100Sem1EveningDataPath',$lvl100Sem1EveningDataPath)
                ->with('newData4Path',$newData4Path)
                ->with('head',$head)
                ;
        }//End hnd Level 100 Semester 2


        //diploma Level 200 Semester
        if (isset($_POST['diplomaLvl200sem1'])){
            $head="Diploma level 200 semester I";
            //hnd Level 100 Semester 1 REGULAR end of Sem
            $lec = scandir('storage/questionFiles/diploma/level200/firstSem/endOfSem/');
            $lecData =[];

            for ($i = 2; $i<count($lec);$i++){
                if ($lec[$i] != '.' || $lec[$i] != '..'){
                    array_push($lecData,$lec[$i]);
                    $path = "storage/questionFiles/diploma/level200/firstSem/endOfSem/";

                }
            }


            //hnd Level 100 Semester 1 REGULAR midSemester
            $lvl100Sem1MidSem = scandir('storage/questionFiles/diploma/level200/firstSem/midSem/');
            $lvl100Sem1MidSemData =[];

            for ($i = 2; $i<count($lvl100Sem1MidSem);$i++){
                if ($lvl100Sem1MidSem[$i] != '.' || $lvl100Sem1MidSem[$i] != '..'){
                    array_push($lvl100Sem1MidSemData,$lvl100Sem1MidSem[$i]);
                    $midSemPath = "storage/questionFiles/diploma/level200/firstSem/midSem/";

                }
            }




            return view('pastQuestion')
                ->with('lecData',$lecData)
                ->with('path',$path)
                ->with('lvl100Sem1MidSemData',$lvl100Sem1MidSemData)
                ->with('midSemPath',$midSemPath)
                ->with('lvl100Sem1EveningDataPath',$lvl100Sem1EveningDataPath)
                ->with('newData4Path',$newData4Path)
                ->with('head',$head)
                ;
        }//End diploma Level 200 Semester 2


        //diploma Level 200 Semester
        if (isset($_POST['diplomaLvl200sem2'])){
            $head="Diploma level 200 semester II";
            //hnd Level 100 Semester 1 REGULAR end of Sem
            $lec = scandir('storage/questionFiles/diploma/level200/secondSem/endOfSem/');
            $lecData =[];

            for ($i = 2; $i<count($lec);$i++){
                if ($lec[$i] != '.' || $lec[$i] != '..'){
                    array_push($lecData,$lec[$i]);
                    $path = "storage/questionFiles/diploma/level200/secondSem/endOfSem/";

                }
            }


            //hnd Level 100 Semester 1 REGULAR midSemester
            $lvl100Sem1MidSem = scandir('storage/questionFiles/diploma/level200/secondSem/midSem/');
            $lvl100Sem1MidSemData =[];

            for ($i = 2; $i<count($lvl100Sem1MidSem);$i++){
                if ($lvl100Sem1MidSem[$i] != '.' || $lvl100Sem1MidSem[$i] != '..'){
                    array_push($lvl100Sem1MidSemData,$lvl100Sem1MidSem[$i]);
                    $midSemPath = "storage/questionFiles/diploma/level200/secondSem/midSem/";

                }
            }

            return view('pastQuestion')
                ->with('lecData',$lecData)
                ->with('path',$path)
                ->with('lvl100Sem1MidSemData',$lvl100Sem1MidSemData)
                ->with('midSemPath',$midSemPath)
                ->with('lvl100Sem1EveningDataPath',$lvl100Sem1EveningDataPath)
                ->with('newData4Path',$newData4Path)
                ->with('head',$head)
                ;
        }//End diploma Level 200 Semester 2
        else{
            return view('pastQuestion');
        }
    }
}
