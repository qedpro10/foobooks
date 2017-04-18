<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class PracticeController extends Controller
{

    public function practice8() {

    }

    public function practice7() {
        $result = Book::orderBy('title', 'desc')->get();
        dump($result->toArray());
    }

    public function practice6() {
        $result = Book::orderBy('created_at')->limit(3)->get();
        dump($result->toArray());
    }

    public function practice5() {
        $result = Book::orderBy('published', 'desc')->get();
        dump($result->toArray());
    }

    public function practice4() {
        $results = Book::where('author', '=', 'F. Scott Fitzgerald')->get();
        dump($results->toArray()); # Study the results
    }

    public function practice3() {
        $results = Book::where('published', '>', 1950)->get();
        dump($results->toArray()); # Study the results
    }
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
