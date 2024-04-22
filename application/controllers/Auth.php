<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        // jalankan site_helper > is_login untuk mengecek apakah user sudah login
        is_login();

        // validasi username dan password
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('pass', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['judul'] =  'Halaman Login';
            $this->load->view('auth/index', $data);
        } else {
            // jika lolos validasi, proses..
            $this->_login();
        }
    }

    public function _login()
    {
        $username = htmlspecialchars($this->input->post('username', true));
        $password = $this->input->post('pass', true);

        // get user data
        $user = $this->db->get_where('user', ['username' => $username])->row_array();

        // jika ada username yang di input oleh user
        if ($user) {
            // cek password, jika password yang diinput user sama dengan yang ada di database
            if (password_verify($password, $user['password'])) {
                // siapkan user data
                $data = [
                    'username' => $user['username'],
                    'role_id' => $user['role_id']
                ];

                // set userdata
                $this->session->set_userdata($data);

                // redirect (bisa juga redirect menurut role)
                $this->session->set_flashdata('message',  $data['username']);
                if ($user['role_id'] == 1) {
                    redirect('data-pengaduan');
                } else {
                    redirect('tambah-pengaduan');
                }
            } else {
                // Jika password salah
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username / Password salah!</div>');
                redirect('auth');
            }
        } else {
            // jika username tidak terdaftar pada database
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun tidak terdaftar!</div>');
            redirect('auth');
        }
    }

    public function registrasi()
    {
        if ($this->session->userdata('email')) {
            redirect('user');
        }
        $this->form_validation->set_rules('nama_instansi', 'Nomor NIK', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('pass1', 'Password', 'required|min_length[8]');
        $this->form_validation->set_rules('pass2', 'Konfirmasi Password', 'required|matches[pass1]');
        
        //diinput akan disimpan ke dalam tabel user
        if ($this->form_validation->run() == false) {
            $data['judul'] = 'Registrasi Pengaduan';
            $this->load->view('templates/header', $data);
            $this->load->view('auth/registrasi');
            // $this->load->view('templates/aute_footer');
        } else {
            // tangkap data dan encrypt password
            $password = password_hash($this->input->post('pass1'), PASSWORD_DEFAULT);
            $data = [
            'nama_instansi' => htmlspecialchars($this->input->post('nama_instansi', true)),
            'email' => htmlspecialchars($this->input->post('email', true)),
            'alamat' => htmlspecialchars($this->input->post('alamat', true)),
            'username' => htmlspecialchars($this->input->post('username', true)),
            'password' => $password,
            'role_id' => 2
            ];

            // insert data ke database
            $this->db->insert('user', $data);
            // set session
            $this->session->set_flashdata('success', '<div class="alert alert-success" role="alert">Registerasi Berhasil, Silahkan Kembali Ke Halaman Login</div>');
            
            redirect('auth/registrasi');
        }
    }

    // public function registrasi()
    // {
    //     /*
    //         Validasi field {
    //             required => semua field harus diisi
    //             is_unique => field harus unik (tidak boleh sama)
    //             min_length => minimal panjang karakter
    //             matches => harus sama
    //             email => harus memakai @provider.com
    //         }
    //     */
    //     $this->form_validation->set_rules('nama_instansi', 'Nama Instansi', 'required');
    //     $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
    //     $this->form_validation->set_rules('alamat', 'Alamat', 'required');
    //     $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.username]');
    //     $this->form_validation->set_rules('pass1', 'Password', 'required|min_length[8]');
    //     $this->form_validation->set_rules('pass2', 'Konfirmasi Password', 'required|matches[pass1]');

    //     // Jika validasi gagal
    //     if ($this->form_validation->run() == FALSE) {
    //         $data = [
    //             'judul' => 'Registrasi',
    //             // 'user' => $this->user
    //         ];

    //         $this->templating->load('auth/registrasi', $data);
    //         // $this->templating->load('auth/registerasi', $data);
    //         // jika lolos validasi
    //     } else {
    //         // tambah data ke database
    //         $this->model->registrasi();
    //     }
    // }

    public function logout()
    {
        // unset session userdata
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda berhasil keluar!</div>');
        redirect('auth');
    }

    public function notfound()
    {
        $data['judul'] = 'Page Not Found';
        $this->load->view('auth/error_404', $data);
    }
}
