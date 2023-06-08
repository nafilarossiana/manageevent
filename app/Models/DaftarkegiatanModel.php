<?php namespace App\Models;
use CodeIgniter\Model;

class DaftarkegiatanModel extends Model
{
    
    protected $table = 'daftarkegiatan';
    protected $primaryKey = 'id';    
protected $allowedFields = ['nama','jenis','date','time','time2','lokasi','benefit','poster'];
public function getPages($id = false)
    {
        if($id == false) {
            return $this->findAll();
        }
        return $this->where(['id'=>$id])->first();

    }


}