<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipient;
use App\Basket ;
use Illuminate\Support\Facades\Session; 

class basketsContreoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $baskets = Basket::all();
        return view('basket.baskets' , compact('baskets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('basket.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request , [  
        'basketName' =>'required',
        'basketContent' => 'required',
        'recipientName' =>'required',
        "recipientPhone"=>'required',
        "recipientAddress"=>'required',
      ]);

      $recipient = new Recipient;
      $recipient->name = $request->input('recipientName');
      $recipient->phone = $request->input('recipientPhone');
      $recipient->address = $request->input('recipientAddress');
      if($recipient->save())
      {
        $basket = new Basket; 
        $basket->name = $request->input('basketName');  
        $basket->content = $request->input('basketContent');
        $basket->recipient_id = $recipient->id;
        if($basket->save())
        {
            Session:: flash('successfulAdd' , 'تمت الاضافة');
            return redirect()->route('baskets.create');
        }
        else{
            Session:: flash('successfulAdd' , 'Somthing bad happin with the baskets');
            return redirect()->route('baskets.create');
        }
       
      }
      else{
        Session:: flash('successfulAdd' , 'Somthing bad happing with person ');
        return redirect()->route('baskets.create');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('basket.view');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
