<?php


namespace App\Repositories;


use App\Models\Income;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;

class IncomeRepository implements IncomeRepositoryInterface
{
/** @var Income
*/
    private $model;

    public function __construct()
    {
       // $this->model=app()->make(Income::class);

    }
    public function getAll(): ?Collection
    {
      return Auth::user()->incomes()->get();
    }
    public function findById($id): ?Income
    {
        return Auth::user()->incomes()->findOrFail($id);
         //  return $this->model->findOrFail($id);
    }
    public function save(array $data,Income $income=NULL)
    {
      !is_null($income)?:$income = new Income();
        $income->value=$data['value'];
        $income->source=$data['source'];
        $income->comment=$data['comment'];
        $income->user_id=Auth::id();
        $income->save();
    }

    public function delete($id)
    {
            $this->findById($id)->delete();
    }



}
