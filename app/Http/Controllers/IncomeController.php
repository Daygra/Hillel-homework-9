<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Http\Request;
class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * //* @return \Illuminate\Http\Response
     */
    public function index()
    {
      $incomes=Income::all();
        return view('incomes.index',compact('incomes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('incomes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $this->validate($request,[
                'value'=>'required',
                'source'=>'required',
                'comment'=>'required'
            ]);
            $income= new Income();

            $income->value=$request->get('value');
            $income->source=$request->get('source');
            $income->comment=$request->get('comment');
            $income->save();
            return   redirect(route('income.index'));// return redirect()->route('income.index') в чем отличие?

        }catch (\Exception $exception){
          return  redirect(route('income.create'));
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
        $income= Income::findOrFail($id);
        return view('incomes.show',compact('income'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $income= Income::findOrFail($id);
        return view('incomes.edit',compact('income'));
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
        try {
            $this->validate($request,[
                'value'=>'required',
                'source'=>'required',
                'comment'=>'required'
            ]);
            $income= Income::findOrFail($id);

            $income->value=$request->get('value');
            $income->source=$request->get('source');
            $income->comment=$request->get('comment');
            $income->save();
            return   redirect(route('income.show',['income'=>$id]));

        }catch (\Exception $exception){

           return  redirect(route('income.edit',['income'=>$id]));
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
