<?php


namespace App\Repositories;


use App\Models\Expense;
use Illuminate\Database\Eloquent\Collection;

class ExpenseRepository implements ExpenseRepositoryInterface
{
/**
*/
    private $model;
    public function __construct()
    {
        $this->model=app()->make(Expense::class);

    }
    public function getAll(): ?Collection
    {
        return $this->model::all();
    }
    public function findById($id): ?Expense
    {
    return $this->model->findOrFail($id);
    }
    public function save(array $data,Expense $expense=NULL)
    {
      !is_null($expense)?:$expense = new Expense();
        $expense->value=$data['value'];
        $expense->purpose=$data['purpose'];
        $expense->comment=$data['comment'];
        $expense->user_id=1;
        $expense->save();
    }


}
