<?php

namespace App\Http\Controllers;

use App\Models\Income;
use App\Services\IncomeServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

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
      if (!$this->authControl())
          return view('auth.login');
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
        if (!$this->authControl())
            return view('auth.login');
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
        if (!$this->authControl())
            return view('auth.login');
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
        if (!$this->authControl())
            return view('auth.login');
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
        if (!$this->authControl())
            return view('auth.login');
        return $this->incomeService->updateIncome($id,$request)?redirect(route('income.show',['income'=>$id])):
                                                                redirect(route('income.edit',['income'=>$id]));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     * @throws \Exception
     */
    public function destroy($id)
    {
        if (!$this->authControl())
            return view('auth.login');
       $this->incomeService->deleteIncome($id);
        return redirect()->route('income.index');
    }
    private function authControl()
    {
        if (Auth::id()===NULL)
            return false;
        return true;

    }
}
