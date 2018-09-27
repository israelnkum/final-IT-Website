<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HndController extends Controller
{
   public function store(){
       $newData4Path ="";
       $midSemPath ="";
       $lvl100Sem1EveningDataPath ="";
       //hnd Level 100 Semester 1
      if (isset($_POST['btnLvl100sem1'])){
          $head="hnd level 100 semester I";
          //hnd Level 100 Semester 1 REGULAR end of Sem
          $lec = scandir('storage/questionFiles/hnd/level100/regular/firstSem/endOfSem/');
          $lecData =[];

          for ($i = 2; $i<count($lec);$i++){
              if ($lec[$i] != '.' || $lec[$i] != '..'){
                  array_push($lecData,$lec[$i]);
                  $path = "storage/questionFiles/hnd/level100/regular/firstSem/endOfSem/";

              }
             }


          //hnd Level 100 Semester 1 REGULAR midSemester
          $lvl100Sem1MidSem = scandir('storage/questionFiles/hnd/level100/regular/firstSem/midSem/');
          $lvl100Sem1MidSemData =[];

          for ($i = 2; $i<count($lvl100Sem1MidSem);$i++){
              if ($lvl100Sem1MidSem[$i] != '.' || $lvl100Sem1MidSem[$i] != '..'){
                  array_push($lvl100Sem1MidSemData,$lvl100Sem1MidSem[$i]);
                  $midSemPath = "storage/questionFiles/hnd/level100/regular/firstSem/midSem/";

              }
              }


          //hnd Level 100 Semester 1 Evening end of Sem
          $lvl100Sem1Evening = scandir('storage/questionFiles/hnd/level100/evening/firstSem/endOfSem/');
          $lvl100Sem1EveningData =[];

          for ($i = 2; $i<count($lvl100Sem1Evening);$i++){
              if ($lvl100Sem1Evening[$i] != '.' || $lvl100Sem1Evening[$i] != '..'){
                  array_push($lvl100Sem1EveningData,$lvl100Sem1Evening[$i]);
              }
              $lvl100Sem1EveningDataPath = "storage/questionFiles/hnd/level100/evening/firstSem/endOfSem/";
          }


          //hnd Level 100 Semester 1 Evening midSemester
          $data4 = scandir('storage/questionFiles/hnd/level100/evening/firstSem/midSem/');
          $newData4 =[];

          for ($i = 2; $i<count($data4);$i++){
              if ($data4[$i] != '.' || $data4[$i] != '..'){
                  array_push($newData4,$data4[$i]);
              }
              $newData4Path = "storage/questionFiles/hnd/level100/evening/firstSem/midSem/";
          }

         return view('pastQuestion')
             ->with('lecData',$lecData)
             ->with('path',$path)
             ->with('lvl100Sem1MidSemData',$lvl100Sem1MidSemData)
             ->with('midSemPath',$midSemPath)
             ->with('lvl100Sem1EveningData',$lvl100Sem1EveningData)
             ->with('lvl100Sem1EveningDataPath',$lvl100Sem1EveningDataPath)
             ->with('newData4',$newData4)
             ->with('newData4Path',$newData4Path)
             ->with('head',$head)
             ;
      }//End hnd Level 100 Semester 1










       //hnd Level 100 Semester 2
       if (isset($_POST['btnLvl100sem2'])){
           $head="hnd level 100 semester Ii";
           //hnd Level 100 Semester 1 REGULAR end of Sem
           $lec = scandir('storage/questionFiles/hnd/level100/regular/secondSem/endOfSem/');
           $lecData =[];

           for ($i = 2; $i<count($lec);$i++){
               if ($lec[$i] != '.' || $lec[$i] != '..'){
                   array_push($lecData,$lec[$i]);
                   $path = "storage/questionFiles/hnd/level100/regular/secondSem/endOfSem/";

               }
           }


           //hnd Level 100 Semester 1 REGULAR midSemester
           $lvl100Sem1MidSem = scandir('storage/questionFiles/hnd/level100/regular/secondSem/midSem/');
           $lvl100Sem1MidSemData =[];

           for ($i = 2; $i<count($lvl100Sem1MidSem);$i++){
               if ($lvl100Sem1MidSem[$i] != '.' || $lvl100Sem1MidSem[$i] != '..'){
                   array_push($lvl100Sem1MidSemData,$lvl100Sem1MidSem[$i]);
                   $midSemPath = "storage/questionFiles/hnd/level100/regular/secondSem/midSem/";

               }
           }


           //hnd Level 100 Semester 1 Evening end of Sem
           $lvl100Sem1Evening = scandir('storage/questionFiles/hnd/level100/evening/secondSem/endOfSem/');
           $lvl100Sem1EveningData =[];

           for ($i = 2; $i<count($lvl100Sem1Evening);$i++){
               if ($lvl100Sem1Evening[$i] != '.' || $lvl100Sem1Evening[$i] != '..'){
                   array_push($lvl100Sem1EveningData,$lvl100Sem1Evening[$i]);
               }
               $lvl100Sem1EveningDataPath = "storage/questionFiles/hnd/level100/evening/secondSem/endOfSem/";
           }


           //hnd Level 100 Semester 1 Evening midSemester
           $data4 = scandir('storage/questionFiles/hnd/level100/evening/secondSem/midSem/');
           $newData4 =[];

           for ($i = 2; $i<count($data4);$i++){
               if ($data4[$i] != '.' || $data4[$i] != '..'){
                   array_push($newData4,$data4[$i]);
               }
               $newData4Path = "storage/questionFiles/hnd/level100/evening/secondSem/midSem/";
           }

           return view('pastQuestion')
               ->with('lecData',$lecData)
               ->with('path',$path)
               ->with('lvl100Sem1MidSemData',$lvl100Sem1MidSemData)
               ->with('midSemPath',$midSemPath)
               ->with('lvl100Sem1EveningData',$lvl100Sem1EveningData)
               ->with('lvl100Sem1EveningDataPath',$lvl100Sem1EveningDataPath)
               ->with('newData4',$newData4)
               ->with('newData4Path',$newData4Path)
               ->with('head',$head)
               ;
       }//End hnd Level 100 Semester 2




       //hnd Level 200 Semester 1
       if (isset($_POST['btnLvl200sem1'])){
           $head="hnd level 200 semester I";
           //hnd Level 100 Semester 1 REGULAR end of Sem
           $lec = scandir('storage/questionFiles/hnd/level200/regular/firstSem/endOfSem/');
           $lecData =[];

           for ($i = 2; $i<count($lec);$i++){
               if ($lec[$i] != '.' || $lec[$i] != '..'){
                   array_push($lecData,$lec[$i]);
                   $path = "storage/questionFiles/hnd/level200/regular/firstSem/endOfSem/";

               }
           }


           //hnd Level 100 Semester 1 REGULAR midSemester
           $lvl100Sem1MidSem = scandir('storage/questionFiles/hnd/level200/regular/firstSem/midSem/');
           $lvl100Sem1MidSemData =[];

           for ($i = 2; $i<count($lvl100Sem1MidSem);$i++){
               if ($lvl100Sem1MidSem[$i] != '.' || $lvl100Sem1MidSem[$i] != '..'){
                   array_push($lvl100Sem1MidSemData,$lvl100Sem1MidSem[$i]);
                   $midSemPath = "storage/questionFiles/hnd/level200/regular/firstSem/midSem/";

               }
           }


           //hnd Level 200 Semester 1 Evening end of Sem
           $lvl100Sem1Evening = scandir('storage/questionFiles/hnd/level200/evening/firstSem/endOfSem/');
           $lvl100Sem1EveningData =[];

           for ($i = 2; $i<count($lvl100Sem1Evening);$i++){
               if ($lvl100Sem1Evening[$i] != '.' || $lvl100Sem1Evening[$i] != '..'){
                   array_push($lvl100Sem1EveningData,$lvl100Sem1Evening[$i]);
               }
               $lvl100Sem1EveningDataPath = "storage/questionFiles/hnd/level200/evening/firstSem/endOfSem/";
           }


           //hnd Level 200 Semester 1 Evening midSemester
           $data4 = scandir('storage/questionFiles/hnd/level200/evening/firstSem/midSem/');
           $newData4 =[];

           for ($i = 2; $i<count($data4);$i++){
               if ($data4[$i] != '.' || $data4[$i] != '..'){
                   array_push($newData4,$data4[$i]);
               }
               $newData4Path = "storage/questionFiles/hnd/level200/evening/firstSem/midSem/";
           }

           return view('pastQuestion')
               ->with('lecData',$lecData)
               ->with('path',$path)
               ->with('lvl100Sem1MidSemData',$lvl100Sem1MidSemData)
               ->with('midSemPath',$midSemPath)
               ->with('lvl100Sem1EveningData',$lvl100Sem1EveningData)
               ->with('lvl100Sem1EveningDataPath',$lvl100Sem1EveningDataPath)
               ->with('newData4',$newData4)
               ->with('newData4Path',$newData4Path)
               ->with('head',$head)
               ;
       }//End hnd Level 200 Semester 1


       //hnd Level 200 Semester 1
       if (isset($_POST['btnLvl200sem2'])){
           $head="hnd level 200 semester Ii";
           //hnd Level 100 Semester 1 REGULAR end of Sem
           $lec = scandir('storage/questionFiles/hnd/level200/regular/secondSem/endOfSem/');
           $lecData =[];

           for ($i = 2; $i<count($lec);$i++){
               if ($lec[$i] != '.' || $lec[$i] != '..'){
                   array_push($lecData,$lec[$i]);
                   $path = "storage/questionFiles/hnd/level200/regular/secondSem/endOfSem/";

               }
           }


           //hnd Level 100 Semester 1 REGULAR midSemester
           $lvl100Sem1MidSem = scandir('storage/questionFiles/hnd/level200/regular/secondSem/midSem/');
           $lvl100Sem1MidSemData =[];

           for ($i = 2; $i<count($lvl100Sem1MidSem);$i++){
               if ($lvl100Sem1MidSem[$i] != '.' || $lvl100Sem1MidSem[$i] != '..'){
                   array_push($lvl100Sem1MidSemData,$lvl100Sem1MidSem[$i]);
                   $midSemPath = "storage/questionFiles/hnd/level200/regular/secondSem/midSem/";

               }
           }


           //hnd Level 100 Semester 1 Evening end of Sem
           $lvl100Sem1Evening = scandir('storage/questionFiles/hnd/level200/evening/secondSem/endOfSem/');
           $lvl100Sem1EveningData =[];

           for ($i = 2; $i<count($lvl100Sem1Evening);$i++){
               if ($lvl100Sem1Evening[$i] != '.' || $lvl100Sem1Evening[$i] != '..'){
                   array_push($lvl100Sem1EveningData,$lvl100Sem1Evening[$i]);
               }
               $lvl100Sem1EveningDataPath = "storage/questionFiles/hnd/level200/evening/secondSem/endOfSem/";
           }


           //hnd Level 100 Semester 1 Evening midSemester
           $data4 = scandir('storage/questionFiles/hnd/level200/evening/secondSem/midSem/');
           $newData4 =[];

           for ($i = 2; $i<count($data4);$i++){
               if ($data4[$i] != '.' || $data4[$i] != '..'){
                   array_push($newData4,$data4[$i]);
               }
               $newData4Path = "storage/questionFiles/hnd/level200/evening/secondSem/midSem/";
           }

           return view('pastQuestion')
               ->with('lecData',$lecData)
               ->with('path',$path)
               ->with('lvl100Sem1MidSemData',$lvl100Sem1MidSemData)
               ->with('midSemPath',$midSemPath)
               ->with('lvl100Sem1EveningData',$lvl100Sem1EveningData)
               ->with('lvl100Sem1EveningDataPath',$lvl100Sem1EveningDataPath)
               ->with('newData4',$newData4)
               ->with('newData4Path',$newData4Path)
               ->with('head',$head)
               ;
       }//End hnd Level 200 Semester 1


       //hnd Level 300 Semester 1
       if (isset($_POST['btnLvl300sem1'])){
           $head="hnd level 200 semester I";
           //hnd Level 100 Semester 1 REGULAR end of Sem
           $lec = scandir('storage/questionFiles/hnd/level300/regular/firstSem/endOfSem/');
           $lecData =[];

           for ($i = 2; $i<count($lec);$i++){
               if ($lec[$i] != '.' || $lec[$i] != '..'){
                   array_push($lecData,$lec[$i]);
                   $path = "storage/questionFiles/hnd/level300/regular/firstSem/endOfSem/";

               }
           }


           //hnd Level 300 Semester 1 REGULAR midSemester
           $lvl100Sem1MidSem = scandir('storage/questionFiles/hnd/level300/regular/firstSem/midSem/');
           $lvl100Sem1MidSemData =[];

           for ($i = 2; $i<count($lvl100Sem1MidSem);$i++){
               if ($lvl100Sem1MidSem[$i] != '.' || $lvl100Sem1MidSem[$i] != '..'){
                   array_push($lvl100Sem1MidSemData,$lvl100Sem1MidSem[$i]);
                   $midSemPath = "storage/questionFiles/hnd/level300/regular/firstSem/midSem/";

               }
           }


           //hnd Level 100 Semester 1 Evening end of Sem
           $lvl100Sem1Evening = scandir('storage/questionFiles/hnd/level300/evening/firstSem/endOfSem/');
           $lvl100Sem1EveningData =[];

           for ($i = 2; $i<count($lvl100Sem1Evening);$i++){
               if ($lvl100Sem1Evening[$i] != '.' || $lvl100Sem1Evening[$i] != '..'){
                   array_push($lvl100Sem1EveningData,$lvl100Sem1Evening[$i]);
               }
               $lvl100Sem1EveningDataPath = "storage/questionFiles/hnd/level300/evening/firstSem/endOfSem/";
           }


           //hnd Level 100 Semester 1 Evening midSemester
           $data4 = scandir('storage/questionFiles/hnd/level300/evening/firstSem/midSem/');
           $newData4 =[];

           for ($i = 2; $i<count($data4);$i++){
               if ($data4[$i] != '.' || $data4[$i] != '..'){
                   array_push($newData4,$data4[$i]);
               }
               $newData4Path = "storage/questionFiles/hnd/level300/evening/firstSem/midSem/";
           }

           return view('pastQuestion')
               ->with('lecData',$lecData)
               ->with('path',$path)
               ->with('lvl100Sem1MidSemData',$lvl100Sem1MidSemData)
               ->with('midSemPath',$midSemPath)
               ->with('lvl100Sem1EveningData',$lvl100Sem1EveningData)
               ->with('lvl100Sem1EveningDataPath',$lvl100Sem1EveningDataPath)
               ->with('newData4',$newData4)
               ->with('newData4Path',$newData4Path)
               ->with('head',$head)
               ;
       }//End hnd Level 300 Semester 1




       //hnd Level 300 Semester 2
       if (isset($_POST['btnLvl300sem2'])){
           $head="hnd level 200 semester II";
           //hnd Level 300 Semester 1 REGULAR end of Sem
           $lec = scandir('storage/questionFiles/hnd/level300/regular/secondSem/endOfSem/');
           $lecData =[];

           for ($i = 2; $i<count($lec);$i++){
               if ($lec[$i] != '.' || $lec[$i] != '..'){
                   array_push($lecData,$lec[$i]);
                   $path = "storage/questionFiles/hnd/level300/regular/secondSem/endOfSem/";

               }
           }


           //hnd Level 300 Semester 1 REGULAR midSemester
           $lvl100Sem1MidSem = scandir('storage/questionFiles/hnd/level300/regular/secondSem/midSem/');
           $lvl100Sem1MidSemData =[];

           for ($i = 2; $i<count($lvl100Sem1MidSem);$i++){
               if ($lvl100Sem1MidSem[$i] != '.' || $lvl100Sem1MidSem[$i] != '..'){
                   array_push($lvl100Sem1MidSemData,$lvl100Sem1MidSem[$i]);
                   $midSemPath = "storage/questionFiles/hnd/level300/regular/secondSem/midSem/";

               }
           }


           //hnd Level 100 Semester 1 Evening end of Sem
           $lvl100Sem1Evening = scandir('storage/questionFiles/hnd/level300/evening/secondSem/endOfSem/');
           $lvl100Sem1EveningData =[];

           for ($i = 2; $i<count($lvl100Sem1Evening);$i++){
               if ($lvl100Sem1Evening[$i] != '.' || $lvl100Sem1Evening[$i] != '..'){
                   array_push($lvl100Sem1EveningData,$lvl100Sem1Evening[$i]);
               }
               $lvl100Sem1EveningDataPath = "storage/questionFiles/hnd/level300/evening/secondSem/endOfSem/";
           }


           //hnd Level 100 Semester 1 Evening midSemester
           $data4 = scandir('storage/questionFiles/hnd/level300/evening/secondSem/midSem/');
           $newData4 =[];

           for ($i = 2; $i<count($data4);$i++){
               if ($data4[$i] != '.' || $data4[$i] != '..'){
                   array_push($newData4,$data4[$i]);
               }
               $newData4Path = "storage/questionFiles/hnd/level300/evening/secondSem/midSem/";
           }

           return view('pastQuestion')
               ->with('lecData',$lecData)
               ->with('path',$path)
               ->with('lvl100Sem1MidSemData',$lvl100Sem1MidSemData)
               ->with('midSemPath',$midSemPath)
               ->with('lvl100Sem1EveningData',$lvl100Sem1EveningData)
               ->with('lvl100Sem1EveningDataPath',$lvl100Sem1EveningDataPath)
               ->with('newData4',$newData4)
               ->with('newData4Path',$newData4Path)
               ->with('head',$head)
               ;
       }//End hnd Level 300 Semester 1




      else{
          return view('pastQuestion');
      }
   }
}
