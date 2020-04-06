<?php


namespace App\Repositories;


use App\Models\Income;
use Illuminate\Database\Eloquent\Collection;

interface IncomeRepositoryInterface
{
    public function getAll():?Collection;
    public function findById($id):?Income;
    public function save(array $data,Income $income=NULL);

}

