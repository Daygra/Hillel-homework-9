<?php

namespace App\Http\Controllers;

use App\Services\ExpenseServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ExpenseController extends Controller
{
    private $expenseService;
    public function __construct(ExpenseServiceInterface $expenseService)
    {
        $this->expenseService=$expenseService;

    }

    /**
     * Display a listing of the resource.
     *
     * //* @return Response
     */
    public function index()
    {
        $expenses=$this->expenseService->getAllExpenses();
        return view('expenses.index',compact('expenses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('expenses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        return $this->expenseService->addExpense($request)?redirect(route('expense.index')):
            redirect(route('expense.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function show($id)
    {
        $expense=$this->expenseService->getExpenseById($id);
        return view('expenses.show',compact('expense'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $expense=$this->expenseService->getExpenseById($id);
        return view('expenses.edit',compact('expense'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        return $this->expenseService->updateExpense($id,$request)?redirect(route('expense.show',['expense'=>$id])):
            redirect(route('expense.edit',['expense'=>$id]));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
