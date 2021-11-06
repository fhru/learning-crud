<?php

namespace App\Controllers;

use App\Models\BarangModel;

class Home extends BaseController
{
    protected $Barang;

    public function __construct()
    {
        $this->Barang = new BarangModel();
    }

    public function index()
    {
        $hasil = $this->Barang->findAll();
        $data = [
            'hasil' => $hasil
        ];
        // dd($data);
        return view('index', $data);
    }

    public function detail($id)
    {
        $hasil = $this->Barang->find($id);
        $data = [
            'hasil' => $hasil
        ];
        return view('detail', $data);
    }

    public function tambah()
    {
        $gambar = $this->request->getFile('gambar');
        if ($gambar->getError() == 4) {
            $newnama = 'default.png';
        } else {
            $newnama = $gambar->getRandomName();
            $gambar->move('img', $newnama);
        }

        $data = [
            'nama_barang' => $this->request->getVar('nama_barang'),
            'spesifikasi' => $this->request->getVar('spesifikasi'),
            'lokasi' => $this->request->getVar('lokasi'),
            'kondisi' => $this->request->getVar('kondisi'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'sumber_dana' => $this->request->getVar('sumber_dana'),
            'gambar' => $newnama
        ];
        $this->Barang->insert($data);
        return redirect()->to('/')->with('msg', 'Data Berhasil Ditambah');
    }

    public function delete($id)
    {
        $this->Barang->delete($id);
        return redirect()->to('/')->with('msg', 'Data Berhasil Dihapus');
    }
    public function edit($id)
    {
        $hasil = $this->Barang->find($id);
        $data = [
            'hasil' => $hasil
        ];
        // dd($hasil);
        return view('edit', $data);
    }

    public function save()
    {
        $gambar = $this->request->getFile('gambar');
        if ($gambar->getError() == 4) {
            $newnama = $this->request->getVar('gambarlama');
        } else {
            $newnama = $gambar->getRandomName();
            $gambar->move('img', $newnama);
            unlink('img/' . $this->request->getVar('gambarlama'));
        }

        $data = [
            'id_barang' => $this->request->getVar('id_barang'),
            'nama_barang' => $this->request->getVar('nama_barang'),
            'spesifikasi' => $this->request->getVar('spesifikasi'),
            'lokasi' => $this->request->getVar('lokasi'),
            'kondisi' => $this->request->getVar('kondisi'),
            'jumlah_barang' => $this->request->getVar('jumlah_barang'),
            'sumber_dana' => $this->request->getVar('sumber_dana'),
            'gambar' => $newnama
        ];
        $this->Barang->save($data);
        return redirect()->to('/')->with('msg', 'Data Berhasil Diubah');
    }
}
