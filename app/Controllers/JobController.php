<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ReviewsModel;

class JobController extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('tbl_jobdesk');
        $query = $builder->get()->getResult();
        $data['reviews'] = $query;

        return view ('dashboard', $data);
    }

    public function reviewAdd()
    {
        return view ('add');
    }

    public function reviewStore()
    {
        $validationRules = [
            'waname' => 'required',
            'emailname' => 'required',
            'link' => 'required|valid_url'
        ];
        $validationMessages = [
            'waname' => [
                'required' => 'Nama WA anda harus sesuai.'
            ],
            'emailname' => [
                'required' => 'Nama profil email anda harus di isi.',
            ],
            'link' => [
                'required' => 'Hanya isi link ulasan anda.',
                'valid_url' => 'Format URL tidak valid.'
            ]
        ];
        
        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);
    
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'nama_whatsapp' => $this->request->getVar('waname'),
            'nama_email' => $this->request->getVar('emailname'),
            'link_review' => $this->request->getVar('link'),
        ];
        
        $this->db->table('tbl_jobdesk')->insert($data);

        if($this->db->affectedRows() > 0) {
            return redirect()->to(base_url('add-review'))->with('success', 'Data berhasil di tambahkan 😂');
        }
    }

    public function reviewEdit($id = null)
    {
        if($id != null){
            $query = $this->db->table('tbl_jobdesk')->getWhere(['job_id' => $id]);
            if($query->resultID->num_rows > 0){
                $data ['reviews'] = $query->getRow();
                return view('edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundExceptions::ForPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundExceptions::ForPageNotFound();
        }
    }

    public function reviewUpdate($id)
    {
        $validationRules = [
            'waname' => 'required',
            'emailname' => 'required',
            'link' => 'required|valid_url'
        ];
        $validationMessages = [
            'waname' => [
                'required' => 'Nama WA anda harus sesuai.'
            ],
            'emailname' => [
                'required' => 'Nama profil email anda harus di isi.',
            ],
            'link' => [
                'required' => 'Hanya isi link ulasan anda.',
                'valid_url' => 'Format URL tidak valid.'
            ]
        ];

        $validation = \Config\Services::validation();
        $validation->setRules($validationRules, $validationMessages);
    
        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $data = [
            'nama_whatsapp' => $this->request->getVar('waname'),
            'nama_email' => $this->request->getVar('emailname'),
            'link_review' => $this->request->getVar('link'),
        ];

        $this->db->table('tbl_jobdesk')->where(['job_id' => $id])->update($data);
        return redirect()->to(base_url('/'))->with('success', 'Data berhasil di edit cuy!!...');
    }

    public function reviewDestroy($id){
        $this->db->table('tbl_jobdesk')->where(['job_id' => $id])->delete();
        return redirect()->to(base_url('/'))->with('success', 'Data berhasil di hapus!!...');
    }
}
