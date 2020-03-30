<?php

namespace App\Http\Controllers;

use App\Models\Expense;
use Illuminate\Http\Request;
class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * //* @return \Illuminate\Http\Response
     */
    public function index()
    {
      $expenses=Expense::all();
        return view('expenses.index',compact('expenses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('expenses.create');
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
                'purpose'=>'required',
                'comment'=>'required'
            ]);
            $expense= new Expense();

            $expense->value=$request->get('value');
            $expense->purpose=$request->get('purpose');
            $expense->comment=$request->get('comment');
            $expense->save();
            return   redirect(route('expense.index'));// return redirect()->route('income.index') в чем отличие?

        }catch (\Exception $exception){
          return  redirect(route('expense.create'));
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
        $expense= Expense::findOrFail($id);
        return view('expenses.show',compact('expense'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense= Expense::findOrFail($id);
        return view('expenses.edit',compact('expense'));
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
                'purpose'=>'required',
                'comment'=>'required'
            ]);
            $expense= Expense::findOrFail($id);

            $expense->value=$request->get('value');
            $expense->purpose=$request->get('purpose');
            $expense->comment=$request->get('comment');
            $expense->save();
            return   redirect(route('expense.show',['expense'=>$id]));

        }catch (\Exception $exception){

            return  redirect(route('expense.edit',['expense'=>$id]));
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
