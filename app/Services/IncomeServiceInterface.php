<?php


namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Income;
use Illuminate\Database\Eloquent\Collection;

interface IncomeServiceInterface
{
    public function getAllIncomes():?Collection;
    public function getIncomeById(int $id):?Income;
    public function addIncome(Request $request):bool;
    public function updateIncome(int $id,Request $request):bool;
    public function deleteIncome($id);
}
