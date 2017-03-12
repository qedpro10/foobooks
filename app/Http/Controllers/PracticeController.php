<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    /**
    *
    */
    public function practice2() {
        //dumps the env setting called debug in the app.php file
        dump(config("app"));
    }

    public function practice1() {
        dump('This is the first example');
    }

    /* This method accepts all requests to /practice/ and
     * invokes the appropriate method
     * http://foobooks.loc/practice/1 => invokes practice1
     */
     public function index($n) {
         $method = 'practice'.$n;

         if(method_exists($this, $method))
            return $this->$method();
        else {
            dd("Practice route [{$n}] not defined");
        }
     }
}
