<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Noc_model extends CI_Model {
    
    public function count_all($table) {
        return $this->db->count_all($table);
    }

    public function get_all($table) {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($table)->result();
    }

    public function get_by_id($table, $id) {
        return $this->db->get_where($table, ['id' => $id])->row();
    }

    public function insert($table, $data) {
        return $this->db->insert($table, $data);
    }

    public function update($table, $id, $data) {
        $this->db->where('id', $id);
        return $this->db->update($table, $data);
    }

    public function delete($table, $id) {
        $this->db->where('id', $id);
        return $this->db->delete($table);
    }

    // --- FUNGSI KHUSUS HALAMAN PUBLIK ---
    public function get_published_articles() {
        $this->db->where('status', 'published');
        $this->db->order_by('id', 'DESC');
        return $this->db->get('articles')->result();
    }

    public function get_article_by_slug($slug) {
        return $this->db->get_where('articles', ['slug' => $slug, 'status' => 'published'])->row();
    }
}