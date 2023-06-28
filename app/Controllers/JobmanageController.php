<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\JobmanagementModel;

class JobmanageController extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('tbl_joblist');
        $query = $builder->get()->getResult();
        $data['jobmgmt'] = $query;

        return view ('job-management', $data);
    }
}
