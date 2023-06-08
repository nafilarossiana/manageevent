<?php

namespace App\Controllers;

use App\Models\DaftarkegiatanModel;
use App\Models\registerpesertaModel;
use CodeIgniter\HTTP\Request;

class Pages extends BaseController
{
    protected $dafkegModel;
    protected $registerModel;
    public function home()
    {
        $data=[
            'title' => 'Home | WEB Event Organizer'
            
            
        ];
        echo view ('layout/header',$data);
        echo view ('pages/home');
        echo view ('layout/footer');
    }

    public function __construct(){
        $this->dafkegModel = new DaftarkegiatanModel();
    }
    public function event()
    {
        $kegiatan = $this->dafkegModel->findAll();
        $data=[
            'title' => 'Event | WEB Event Organizer', 
            'kegiatan' => $kegiatan
        ];

        echo view ('layout/header',$data);
        echo view ('pages/event');
        echo view ('layout/footer');

    }

    public function create(){
        //session();
        $data = [
            'title' => 'Formulir | WEB Event Organizer',
            'validation' => \Config\Services::validation()
        ];
        
        echo view('layout/header', $data);
        echo view('pages/create');
        echo view('layout/footer');
    }

    public function editevent($id=null){
        $dafkegModel =$this->dafkegModel->find($id);
                $data=[
                    'title' => 'Edit Form | WEB Event Organizer',
                    'validation' =>  \Config\Services::validation(), 
                    $dafkegModel = $this->dafkegModel->find($id)
                    
                    
                ];
                if (is_array($dafkegModel)) {
                    $data['dafkegModel'] = $dafkegModel;
                }
                echo view ('layout/header', $data);
                echo view ('pages/editevent');
                echo view ('layout/footer');
                //return redirect()->to('/pages/editregis');
        }
    
    public function register()
    {
        $registerpeserta= $this->registerModel->findAll();
        $data=[
            'title' => 'Register',
            'registerpeserta' => $registerpeserta
        ];
        
        echo view ('layout/header',$data);
        echo view ('pages/register');
        echo view ('layout/footer');
    }

    public function addregister()
    {
        //session();
        $registerpeserta= $this->registerModel->findAll();
        $data=[
            'title' => 'Add Registration',
            'registerpeserta' => $registerpeserta,
            'validation' => \Config\Services::validation()
        ];
        echo view ('layout/header');
        echo view ('pages/addregister',$data);
        echo view ('layout/footer');
    }
    public function __construct()
    {
        $this->registerModel = new registerpesertaModel();
        $this->dafkegModel = new DaftarkegiatanModel();
    }
    public function save(){
        if(!$this->validate([
            'namapeserta' => [
                'required' => 'required',
                'errors' =>[
                    'required' => '{field} harus diisi',
                ]
                ],
                'fotoktm' =>[
                'rules'=> 'uploaded[fotoktm]|is_image[fotoktm]|mime_in[fotoktm,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'pilih gambar Foto KTM terlebihh dahulu',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang Anda pilih bukan gambar'
                ]
                ]
        ])){
            // $validation = \Config\Services::validation();
            return redirect()->to('/pages/addregister')->withInput();   
            // return redirect()->to('/pages/addregister')->withInput()->with('validation', $validation);
        }
        $filektm = $this->request->getFile('fotoktm');
        $namaktm = $filektm -> getRandomName();
        //pindah ke folder imgg
        $filektm->move('img', $namaktm);
        
        //ambil nama file 
        
        $this->registerModel->save([
        'idregister' => $this->request->getVar('idregister'),
        'namapeserta' => $this->request->getVar('namapeserta'),
        'nim' => $this->request->getVar('nim'),
        'email' => $this->request->getVar('email'),
        'telp' => $this->request->getVar('telp'),
        'institusi' => $this->request->getVar('institusi'),
        'alamat' => $this->request->getVar('alamat'),
        'jeniskegiatan' => $this->request->getVar('jeniskegiatan'),
        'namakegiatan' => $this->request->getVar('namakegiatan'),
        'fotoktm' => $namaktm
        ]);
        session()->setFlashdata('pesan','Data berhasil ditambahkan');
        return redirect()->to('/pages/register');
    }
    public function delete($idregister){
        
        $this->registerModel->delete($idregister);
        session()->setFlashdata('pesan','Data berhasil dihapus');
        return redirect()->to('/pages/register');
    }
    public function editregis($idregister=null){
    $registerModel =$this->registerModel->find($idregister);
            $data=[
                'title' => 'Edit Registration',
                'validation' =>  \Config\Services::validation(), 
                $registerModel = $this->registerModel->find($idregister)
                
            ];
            if (is_array($registerModel)) {
                $data['registerModel'] = $registerModel;
            }
            echo view ('layout/header');
            echo view ('pages/editregis',$data);
            echo view ('layout/footer');
            //return redirect()->to('/pages/editregis');
        
    }
    public function update($idregister)
    {
        if (!$this->validate([
            'namapeserta' => [
                'required' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi',
                ]
            ],
            'fotoktm' => [
                'rules' => 'uploaded[fotoktm]|is_image[fotoktm]|mime_in[fotoktm,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => 'pilih gambar Foto KTM terlebihh dahulu',
                    'is_image' => 'Yang anda pilih bukan gambar',
                    'mime_in' => 'Yang Anda pilih bukan gambar'
                ]
            ]
        ])) {
            // $validation = \Config\Services::validation();
            return redirect()->to('/pages/editregis/' . $idregister)->withInput();
            // return redirect()->to('/pages/addregister')->withInput()->with('validation', $validation);
        }
        $filektm = $this->request->getFile('fotoktm');
        $namaktm = $filektm->getRandomName();
        //pindah ke folder imgg
        $filektm->move('img', $namaktm);

        //ambil nama file 

        $this->registerModel->save([
            'idregister' => $idregister,
            'namapeserta' => $this->request->getVar('namapeserta'),
            'nim' => $this->request->getVar('nim'),
            'email' => $this->request->getVar('email'),
            'telp' => $this->request->getVar('telp'),
            'institusi' => $this->request->getVar('institusi'),
            'alamat' => $this->request->getVar('alamat'),
            'jeniskegiatan' => $this->request->getVar('jeniskegiatan'),
            'namakegiatan' => $this->request->getVar('namakegiatan'),
            'fotoktm' => $namaktm
        ]);
        session()->setFlashdata('pesan', 'Data berhasil diubah');
        return redirect()->to('/pages/register');

    }
    public function addevent()
    {
        //session();
        $kegiatan = $this->dafkegModel->findAll();
        
        // session();
        $data = [
            'title' => 'Formulir | WEB Event Organizer',
            'kegiatan' => $kegiatan,
            'validation' => \Config\Services::validation()
        ];
        
        echo view('layout/header', $data);
        echo view('pages/addevent');
        echo view('layout/footer');
    }
    public function saveevent(){
        //untuk ngecheck data :
        // dd($this->request->getVar());

        //validasi input
        if(!$this->validate([
            'nama' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi !'
                ]
                ],
            'date' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi !'
                ]
                ],
            'time' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi !'
                ]
                ], 
            'time2' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi !'
                    ]
                    ], 
            'lokasi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi !'
                    ]
                    ], 
            'benefit' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi !'
                    ]
                    ],
                    'poster' =>[
                        'rules'=> 'uploaded[poster]|is_image[poster]|mime_in[poster,image/jpg,image/jpeg,image/png]',
                        'errors' => [
                            'uploaded' => 'pilih gambar POSTER terlebihh dahulu',
                            'is_image' => 'Yang anda pilih bukan gambar',
                            'mime_in' => 'Yang Anda pilih bukan gambar'
                        ]
                        ]
            
                    
        ])) {
           //$validation = \Config\Services::validation();
            //dd($validation);
            return redirect()->to('/pages/addevent')->withInput();
        }
        $fileposter = $this->request->getFile('poster');
        $namaposter = $fileposter -> getRandomName();
        //pindah ke folder imgg
        $fileposter->move('img', $namaposter);
        
        
        $this->dafkegModel->save([
            'id' =>$this->request->getVar('id'),
            'nama' =>$this->request->getVar('nama'),
            'jenis' =>$this->request->getVar('jenis'),
            'date' =>$this->request->getVar('date'),
            'time' =>$this->request->getVar('time'),
            'time2' =>$this->request->getVar('time2'),
            'lokasi' =>$this->request->getVar('lokasi'),
            'benefit' =>$this->request->getVar('benefit'),
            'poster' =>$namaposter
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/pages/event');

    }
    public function deleteevent($id){
        $this->dafkegModel->deleteevent($id);
        session()->setFlashdata('pesan','Data berhasil dihapus');
        return redirect()->to('/pages/event');
    }
    
}