<?php


namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Expense;
use Illuminate\Database\Eloquent\Collection;

interface ExpenseServiceInterface
{
    public function getAllExpenses():?Collection;
    public function getExpenseById(int $id):?Expense;
    public function addExpense(Request $request):bool;
    public function updateExpense(int $id,Request $request):bool;
}
