<?php


namespace App\Services;


use App\Models\Income;
use App\Repositories\IncomeRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class IncomeService implements IncomeServiceInterface
{
    private $IncomeRepository;
    public function __construct(IncomeRepositoryInterface $IncomeRepository)
    {
        $this->IncomeRepository=$IncomeRepository;
    }

    public function getAllIncomes(): ?Collection
    {
     return $this->IncomeRepository->getAll();
    }

    public function getIncomeById(int $id): ?Income
    {
        return $this->IncomeRepository->findById($id);

    }

    public function addIncome(Request $request):bool
    {
        if(!$this->validateRequest($request))
            return false;
        $request=$request->all();
        $this->IncomeRepository->save($request);
        return true;
    }

    public function updateIncome(int $id,Request $request):bool
    {
       if(!$this->validateRequest($request))
           return false;
       $request=$request->all();
       $income=$this->getIncomeById($id);
       $this->IncomeRepository->save($request,$income);
       return true;

    }
    private function validateRequest(Request $request):bool
    {
        try {
            $request->validate([
                'value'=>'required',
                'source'=>'required',
                'comment'=>'required'
            ]);
            return true;
        }catch (\Exception $e)
        { return false;}
    }

    public function deleteIncome($id)
    {
        $this->IncomeRepository->delete($id);
    }


}
