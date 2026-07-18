<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function dashboard() {
        $data['total_articles'] = $this->Noc_model->count_all('articles');
        $data['total_feedbacks'] = $this->Noc_model->count_all('feedbacks');

        $this->load->view('admin/partials/head');
        $this->load->view('admin/partials/side_nav');
        $this->load->view('admin/dashboard', $data);
        $this->load->view('admin/partials/footer');
    }

    public function articles() {
        $data['articles'] = $this->Noc_model->get_all('articles');

        $this->load->view('admin/partials/head');
        $this->load->view('admin/partials/side_nav');
        $this->load->view('admin/article_list', $data);
        $this->load->view('admin/partials/footer');
    }

    public function add_article() {
        // Validasi Form Artikel
        $this->form_validation->set_rules('title', 'Judul Artikel', 'required|min_length[5]');
        $this->form_validation->set_rules('category', 'Kategori', 'required');
        $this->form_validation->set_rules('content', 'Konten', 'required');
        $this->form_validation->set_rules('status', 'Status Draft/Published', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('admin/partials/head');
            $this->load->view('admin/partials/side_nav');
            $this->load->view('admin/article_form');
            $this->load->view('admin/partials/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'slug' => strtolower(url_title($this->input->post('title'))),
                'category' => $this->input->post('category'),
                'content' => $this->input->post('content'),
                'status' => $this->input->post('status')
            ];
            $this->Noc_model->insert('articles', $data);
            $this->session->set_flashdata('success', 'Artikel baru berhasil disimpan!');
            redirect('admin/articles');
        }
    }

    public function edit_article($id) {
        $this->form_validation->set_rules('title', 'Judul Artikel', 'required|min_length[5]');
        $this->form_validation->set_rules('category', 'Kategori', 'required');
        $this->form_validation->set_rules('content', 'Konten', 'required');
        $this->form_validation->set_rules('status', 'Status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data['article'] = $this->Noc_model->get_by_id('articles', $id);
            $this->load->view('admin/partials/head');
            $this->load->view('admin/partials/side_nav');
            $this->load->view('admin/article_form', $data);
            $this->load->view('admin/partials/footer');
        } else {
            $data = [
                'title' => $this->input->post('title'),
                'slug' => strtolower(url_title($this->input->post('title'))),
                'category' => $this->input->post('category'),
                'content' => $this->input->post('content'),
                'status' => $this->input->post('status')
            ];
            $this->Noc_model->update('articles', $id, $data);
            $this->session->set_flashdata('success', 'Artikel berhasil diperbarui!');
            redirect('admin/articles');
        }
    }

    public function delete_article($id) {
        $this->Noc_model->delete('articles', $id);
        $this->session->set_flashdata('success', 'Artikel berhasil dihapus!');
        redirect('admin/articles');
    }

    public function feedbacks() {
        $data['feedbacks'] = $this->Noc_model->get_all('feedbacks');
        $this->load->view('admin/partials/head');
        $this->load->view('admin/partials/side_nav');
        $this->load->view('admin/feedback_list', $data);
        $this->load->view('admin/partials/footer');
    }
}