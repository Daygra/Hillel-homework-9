<?php


namespace App\Services;


use App\Models\Expense;
use App\Repositories\ExpenseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;


class ExpenseService implements ExpenseServiceInterface
{
    private $expenseRepository;

    /**
     * ExpenseService constructor.
     * @param ExpenseRepositoryInterface $ExpenseRepository
     */
    public function __construct(ExpenseRepositoryInterface $ExpenseRepository)
    {
        $this->expenseRepository=$ExpenseRepository;
    }

    public function getAllExpenses(): ?Collection
    {
     return $this->expenseRepository->getAll();
    }

    public function getExpenseById(int $id): ?Expense
    {
        return $this->expenseRepository->findById($id);

    }

    public function addExpense(Request $request):bool
    {
        if(!$this->validateRequest($request))
            return false;
        $request=$request->all();
        $this->expenseRepository->save($request);
        return true;
    }

    public function updateExpense(int $id,Request $request):bool
    {
       if(!$this->validateRequest($request))
           return false;
       $request=$request->all();
       $income=$this->getExpenseById($id);
       $this->expenseRepository->save($request,$income);
       return true;

    }
    private function validateRequest(Request $request):bool
    {
        try {
            $request->validate([
                'value'=>'required',
                'purpose'=>'required',
                'comment'=>'required'
            ]);
            return true;
        }catch (\Exception $e)
        { return false;}
    }

}
