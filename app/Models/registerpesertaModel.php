<?php namespace App\Models;
use CodeIgniter\Model;

class registerpesertaModel extends Model
{
    
    protected $table = 'registerpeserta';
    protected $primaryKey = 'idregister';    
//protected $allowedFields = ['idregister','nama','nim','email','telp','institusi','alamat','jeniskegiatan','namakegiatan','fotoktm'];
protected $allowedFields = ['namapeserta','nim','email','telp','institusi','alamat','jeniskegiatan','namakegiatan','fotoktm'];
public function getPages($idregister = false)
    {
        if($idregister == false) {
            return $this->findAll();
        }
        return $this->where(['idregister'=>$idregister])->first();

    }


}