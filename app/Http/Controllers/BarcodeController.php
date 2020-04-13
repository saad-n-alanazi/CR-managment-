<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session; 


use App\Basket ; 
use App\Recipient;

class BarcodeController extends Controller
{
    public function barcode($id)
    {
        $showBasket = Basket::findOrFail($id);
        return view('barCode.barcode' , compact('showBasket'));
    }

    public function barcodeResult($id)
    {
        $showBasketResult = Basket::findOrFail($id);
        return view('barCode.barcodeResult' , compact('showBasketResult'));

    }

    public function resultUpdate($id)
    {
        $basketUpdate = Basket::findOrFail($id);
        $basketUpdate->status = 1 ; 
        if($basketUpdate->save())
        {
            Session:: flash('successfulAdd' , 'تم التسليم بنجاح');
            return back();

        }
        else
        {
            echo "there is problem ";
        }
    }

}
