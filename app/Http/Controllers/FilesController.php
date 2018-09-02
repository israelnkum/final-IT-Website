<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class FilesController extends Controller
{


    public function welcomeIndex() {
      $data = scandir('storage/images/gallery/handingOver/');
    $newData =[];
        for ($i = 2; $i<10;$i++){
             if ($data[$i] != '.' || $data[$i] != '..'){

                 array_push($newData,$data[$i]);
             }
        }
       // dd ($newData);
      return view('welcome')->with('newData',$newData);
    }

    public function gallery(){

        //lectures
        $lectures = scandir('storage/images/gallery/lectures');
        $newLectures =[];
        for ($i = 2; $i<count($lectures);$i++){
            if ($lectures[$i] != '.' || $lectures[$i] != '..'){

                array_push($newLectures,$lectures[$i]);
            }
        }

//newExecutives
        $executives = scandir('storage/images/gallery/newExecutives');
        $newExecutives =[];
        for ($i = 2; $i<count($executives);$i++){
            if ($executives[$i] != '.' || $executives[$i] != '..'){

                array_push($newExecutives,$executives[$i]);
            }
        }


        //oldExecutives
        $oldExecutives = scandir('storage/images/gallery/oldExecutives');
        $oldExeData =[];
        for ($i = 2; $i<count($oldExecutives);$i++){
            if ($oldExecutives[$i] != '.' || $oldExecutives[$i] != '..'){

                array_push($oldExeData,$oldExecutives[$i]);
            }
        }


//handingOver
        $handingOver = scandir('storage/images/gallery/handingOver');
        $handingOverData =[];
        for ($i = 2; $i<count($handingOver);$i++){
            if ($handingOver[$i] != '.' || $handingOver[$i] != '..'){

                array_push($handingOverData,$handingOver[$i]);
            }
        }

        return view('gallery')
            ->with('newExecutives',$newExecutives)
            ->with('newLectures',$newLectures)
            ->with('oldExeData',$oldExeData)
            ->with('handingOverData',$handingOverData);


    }


    public function aboutLectures(){
        $lec = scandir('storage/images/gallery/lectures');
        $lecData =[];

        for ($i = 2; $i<count($lec);$i++){
            if ($lec[$i] != '.' || $lec[$i] != '..'){

                array_push($lecData,$lec[$i]);

                          }
        }
        return view('about-us')
            ->with('lecData',$lecData);
    }


}//
