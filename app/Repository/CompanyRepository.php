<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\DB;

class CompanyRepository
{
    /**
     * @param string $name
     * @return array
     */
    static function create(string $name)
    {
        $param = [
            'name' => $name,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
            'del_flg' => false
        ];
        DB::table('companies')->insert($param);

        return $param;
    }

    /**
     * @param $param
     * @return Model|Builder|object|null
     */
    static function advancedSearch($param)
    {
        $company = DB::table('companies')
            ->where('name', $param['name'])
            ->where('created_at', $param['created_at'])
            ->first();
        return $company;
    }
}
