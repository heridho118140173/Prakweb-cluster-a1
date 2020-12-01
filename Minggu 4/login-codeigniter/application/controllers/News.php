<?php
class News extends CI_Controller {
 
    public function __construct()
    {
        parent::__construct();
        $this->load->model('news_model');
        $this->load->helper('url_helper');
        $this->load->library('session');
        $this->load->library('pagination');
    }
 
    public function index()
    {
        $data['news'] = $this->news_model->get_news();
        $data['title'] = 'Artikel';
 
        $this->load->view('template/header', $data);
        $this->load->view('news/index', $data);
        $this->load->view('template/footer');
    }
    
    public function create()
    {
        if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } else {
            $data['user_id'] = $this->session->userdata('user_id');
        }
        
        $this->load->helper('form');
        $this->load->library('form_validation');
 
        $data['title'] = 'Membuat Artikel Baru';
 
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('news/create');
            $this->load->view('template/footer');
        } else {            
            $this->news_model->set_news();
            $this->load->view('template/header', $data);
            $this->load->view('news/success');
            $this->load->view('template/footer');
        }
    }
    
    public function edit()
    {
        if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } else {
            $data['user_id'] = $this->session->userdata('user_id');
        }
        
        $id = $this->uri->segment(3);
        
        if (empty($id)) {
            show_404();
        }        
        
        $this->load->helper('form');
        $this->load->library('form_validation');
        
        $data['title'] = 'Mengedit Artikel';        
        $data['news_item'] = $this->news_model->get_news_by_id($id);
        
        if ($data['news_item']['user_id'] != $this->session->userdata('user_id')) {
            $currentClass = $this->router->fetch_class(); // class = controller
            redirect(site_url($currentClass));
        }
        
        $this->form_validation->set_rules('title', 'Title', 'required');
        $this->form_validation->set_rules('content', 'Text', 'required');
 
        if ($this->form_validation->run() === FALSE) {
            $this->load->view('template/header', $data);
            $this->load->view('news/edit', $data);
            $this->load->view('template/footer');
        } else {
            $this->news_model->set_news($id);
            //$this->load->view('news/success');
            redirect( site_url('news') );
        }
    }
    
    public function delete()
    {
        if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        }
        
        $id = $this->uri->segment(3);
        
        if (empty($id)) {
            show_404();
        }
                
        $news_item = $this->news_model->get_news_by_id($id);
        
        if ($news_item['user_id'] != $this->session->userdata('user_id')) {
            $currentClass = $this->router->fetch_class(); // class = controller
            redirect(site_url($currentClass));
        }
        
        $this->news_model->delete_news($id);        
        redirect( base_url() . 'index.php/news');        
    }
}