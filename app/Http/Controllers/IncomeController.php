<?php

namespace App\Http\Controllers;

use App\Services\IncomeServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class IncomeController extends Controller
{
    /**@var IncomeServiceInterface  */
    private $incomeService;
    public function __construct(IncomeServiceInterface $incomeService)
    {
        $this->incomeService=$incomeService;

    }

    /**
     * Display a listing of the resource.
     *
     * //* @return Response
     */
    public function index()
    {
      $incomes=$this->incomeService->getAllIncomes();
       return view('incomes.index',compact('incomes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('incomes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        return $this->incomeService->addIncome($request)?redirect(route('income.index')):
                                                         redirect(route('income.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function show($id)
    {
      $income=$this->incomeService->getIncomeById($id);
        return view('incomes.show',compact('income'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\Factory|Response|\Illuminate\View\View
     */
    public function edit($id)
    {
        $income=$this->incomeService->getIncomeById($id);
        return view('incomes.edit',compact('income'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        return $this->incomeService->updateIncome($id,$request)?redirect(route('income.show',['income'=>$id])):
                                                                redirect(route('income.edit',['income'=>$id]));

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
