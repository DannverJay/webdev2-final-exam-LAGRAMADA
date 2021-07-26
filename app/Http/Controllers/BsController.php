<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Biblestudy;
class BsController extends Controller
{
    public function registrationform (Request $request) {

       $bstable = new Biblestudy();
        return view ('/bible-study-request-form', compact ('bstable'));
       }
    
     public function bsrequest (Request $request) {
     
       $bstable = Biblestudy::all();
        return view ('/bible-study-requests', compact ('bstable'));
       }
    
     public function createform (Request $request) {
    
        $bstable = new Biblestudy();
        $bstable->name = $request-> name;
        $bstable->email = $request-> email;
        $bstable->number = $request-> number;
        $bstable->bdate = $request-> bdate;
        $bstable->religion = $request-> religion;
        $bstable->bsdate = $request-> bsdate;
        $bstable->bstime= $request-> bstime;
        $bstable->bslocation = $request-> bslocation;
        
       if ($bstable->save()) {
            return redirect ('/thank-you');
       }
            return redirect ('/thank-you');
       }
    
       public function thankyou (Request $request) {
    
        $bstable = new Biblestudy();
        return view ('/thank-you');
       }
    }