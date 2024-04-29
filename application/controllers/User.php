<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model', 'model');
        is_logout();
        $this->user = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
    }

    public function read_data()
    {
        is_admin();
        $data = [
            'judul' => 'Daftar Pengaduan',
            'user' => $this->user,
            'data' => $this->model->getData()
        ];
        $this->templating->load('user/pengaduan', $data);
    }

    public function ubah_data()
    {
        if (isset($_POST['ubah-data'])) {
            $this->model->ubah_data();
        } else {
            redirect('auth/notfound');
        }
    }

    public function tambah_data()
    {
        is_admin();
        $data = [
            'judul' => 'Tambah Pengaduan',
            'user' => $this->user
        ];

        $this->templating->load('user/tambah', $data);
    }

    public function berita()
    {
        is_admin();
        $data = [
            'judul' => 'Berita Kelurahan',
            'user' => $this->user
        ];

        $this->templating->load('user/berita', $data);
    }

    public function tambah_data_aksi()
    {
        
        if ($this->input->is_ajax_request() == true) {
            $this->form_validation->set_rules('judul_pengaduan', 'Judul pengaduan', 'required|max_length[128]');
            $this->form_validation->set_rules('isi_pengaduan', 'Isi pengaduan', 'required');
            $this->form_validation->set_rules('no_telp', 'No Telp', 'required|numeric|max_length[15]');
            
            $this->form_validation->set_error_delimiters('', '');

            //konfigurasi sebelum gambar diupload
            $config['upload_path'] = './assets/img/upload/';
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '3000';
            $config['max_width'] = '10024';
            $config['max_height'] = '10000';
            $config['file_name'] = 'img' . date('Y-m-d');
            
            $this->load->library('upload', $config);

            if ($this->form_validation->run() == false) {
                $errors = [
                    'judul_pengaduan' => form_error('judul_pengaduan'),
                    'isi_pengaduan' => form_error('isi_pengaduan'),
                    'no_telp' => form_error('no_telp'),
                ];
                $data = [
                    'status' => FALSE,
                    'errors' => $errors
                ];
                $this->output->set_content_type('application/json')->set_output(json_encode($data));

            } else {
                if ($this->upload->do_upload('image')) {    
                    $image = $this->upload->data();
                    $gambar = $image['file_name'];
                } else {
                    $gambar = '';
                }   
                $data = [
                    'instansi_id' => $this->user['id'],
                    'tgl_pengaduan' => date('Y-m-d'),
                    'judul_pengaduan' => htmlspecialchars($this->input->post('judul_pengaduan', true)),
                    'isi_pengaduan' => htmlspecialchars($this->input->post('isi_pengaduan', true)),
                    'no_telp' => htmlspecialchars($this->input->post('no_telp', true)),
                    'image' => htmlspecialchars($gambar),
                ];
                // var_dump($data);
                $this->model->tambah_data($data);
                $data['status'] = TRUE;
                $this->output->set_content_type('application/json')->set_output(json_encode($data));
            }
        } else {
            //echo "error";
            redirect('tambah-pengaduan');
        }
    }

    public function ubah_password()
    {
        $data = [
            'user' => $this->user,
            'judul' => 'Ubah Password'
        ];

        $this->form_validation->set_rules('password', 'Password Lama', 'required');
        $this->form_validation->set_rules('newpass', 'Password Baru', 'required|min_length[8]');
        $this->form_validation->set_rules('newpass2', 'Konfirmasi Password', 'required|matches[newpass]');

        if ($this->form_validation->run() == false) {
            $this->templating->load('user/ubah-password', $data);
        } else {
            $this->model->ubah_password();
        }
    }
}
