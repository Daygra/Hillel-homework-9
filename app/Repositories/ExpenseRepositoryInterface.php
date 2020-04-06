<?php


namespace App\Repositories;


use App\Models\Expense;
use Illuminate\Database\Eloquent\Collection;

interface ExpenseRepositoryInterface
{
    public function getAll():?Collection;
    public function findById($id):?Expense;
    public function save(array $data,Expense $expense=NULL);

}

