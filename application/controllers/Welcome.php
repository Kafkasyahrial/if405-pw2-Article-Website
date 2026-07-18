<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data['articles'] = $this->Noc_model->get_published_articles();
        $this->load->view('public_feedback', $data);
    }

    public function read($slug) {
        $data['article'] = $this->Noc_model->get_article_by_slug($slug);
        if (!$data['article']) {
            show_404();
        }
        $this->load->view('public_detail', $data);
    }

    public function send_feedback() {
        $this->form_validation->set_rules('name', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('message', 'Pesan / Masukan', 'required|min_length[10]');

        if ($this->form_validation->run() == FALSE) {
            $data['articles'] = $this->Noc_model->get_published_articles();
            $this->load->view('public_feedback', $data);
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'message' => $this->input->post('message')
            ];
            $this->Noc_model->insert('feedbacks', $data);
            $this->session->set_flashdata('success', 'Terima kasih! Feedback Anda telah terkirim.');
            redirect('welcome');
        }
    }
}