<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Basket ; 
use App\Recipient; 
class MainPageController extends Controller
{
    public function mainPge()
    {
        $basketsCount = Basket::count();
        $recipient= Recipient::count();
        $delivered =Basket::where('status' , '=' , '1')->count();
        $notDelivered =Basket::where('status' , '=' , '0')->count();
        return view('MainPage' , compact('basketsCount' ,'recipient' , 'delivered' , 'notDelivered'));

    }

    public function delivered()
    {
        $delivereds = Basket::where('status' , '=' , '1')->get();
        return view('basket.Delivered' , compact('delivereds'));
    }

    public function notDelivered()
    {
        $notDeliveredBaskets = Basket::where('status' , '=' , '0')->get();
        return view('basket.notDelivered' , compact('notDeliveredBaskets'));
    } 
}
