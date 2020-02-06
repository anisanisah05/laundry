<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Paket extends CI_Controller {

    public function index()
    {
        $data['halaman'] = 'v_home';
        $data['paket'] = $this->db->get('paket')->result_array();
        // var_dump($data['halaman']);die;
        $this->load->view('template', $data);
    }

    public function transaksi()
    {
        $data['halaman'] = 'v_transaksi';
        $this->load->view('template', $data);
    }

    public function karyawan()
    {
        $data['halaman'] = 'v_karyawan';
        $this->load->view('template', $data);
    }

    public function tambah()
    {
        $data = [
            'jenis' => $this->input->post('jenis'),
            'harga' => $this->input->post('harga')
        ];
        $this->db->insert('paket', $data);
        
        redirect('paket','refresh');
    }

}

/* End of file Paket.php */
