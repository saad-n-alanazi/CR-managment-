<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use App\Recipient ; 
class recipientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        $this->validate($request , [  
            'recipientName' =>'required',
            "recipientPhone"=>'required',
            "recipientAddress"=>'required',
          ]);
    
          $recipientUpdate = Recipient::findOrFail($id);
          $recipientUpdate->name = $request->input('recipientName');
          $recipientUpdate->phone = $request->input('recipientPhone');
          $recipientUpdate->address = $request->input('recipientAddress');
          if($recipientUpdate->save())
          {
            Session:: flash('successfulRecipientUpdate' , 'تم تعديل المستفيد بنجاح');
            return back();

           
          }
          else{
            Session:: flash('ErrorRecipientUpdate' , 'خطا في تعديل معلومات المستفيد ');
            return back();
          }
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
