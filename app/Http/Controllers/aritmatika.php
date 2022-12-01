<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aritmatika extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    
    public function index()
    {
        
        if (isset($_GET['submit'])) {

            $x = $_GET["firstnum"];
            $y = $_GET["second"];
            $name = $_GET["multi"];
            
            if($name == '+'){
                $result = $x + $y;
                $namek= "Result of this Addition";

            }else if($name == '*'){
                $result = $x * $y;
                $namek= "Result of this multiplication";

            }else if($name == '/'){
                $result = $x / $y;
                $namek= "Result of this division";
                
            }else{
                $namek= "Unknown Operator";
                $result = "ERROR";
            }

        }
        if (!isset($result)) {
                $result = '-';

        }
        if (!isset($x)) {
            $x = '';
        }
        if (!isset($y)) {
            $y = '';
        }
        if (!isset($name)){
            $name = '';
        }
        if (!isset($namek)){
            $namek  = '';
        }
        return view('aritmatik', compact('result', 'x', 'y','name','namek'));
    }

}
