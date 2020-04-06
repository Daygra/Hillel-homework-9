<?php


namespace App\Repositories;


use App\Models\Income;
use Illuminate\Database\Eloquent\Collection;

class IncomeRepository implements IncomeRepositoryInterface
{
/** @var Income
*/
    private $model;
    public function __construct()
    {
        $this->model=app()->make(Income::class);

    }
    public function getAll(): ?Collection
    {
        return $this->model::all();
    }
    public function findById($id): ?Income
    {
    return $this->model->findOrFail($id);
    }
    public function save(array $data,Income $income=NULL)
    {
      !is_null($income)?:$income = new Income();
        $income->value=$data['value'];
        $income->source=$data['source'];
        $income->comment=$data['comment'];
        $income->user_id=1;
        $income->save();
    }


}
