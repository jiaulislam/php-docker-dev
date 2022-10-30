<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(["util"]);
        $this->load->library("session");
        $this->load->library('Server', null, 'server');
        $this->load->library('AuthValidation', null, 'av');
        $this->load->model('UserModel');
    }

    public function index()
    {
        $this->login();
    }

    public function login()
    {
        if ($this->server->requestMethod() === POST) {
            $userName = $this->input->post('userName');
            $password = $this->input->post('password');
            if (trim($userName) != '' && $password != '') {
                try {
                    $currentUser = $this->UserModel->getUserByName($userName);
                } catch (UserNotFoundException $e) {
                    $this->session->set_flashdata('error', $e->getMessage());
                    redirect('/');
                }
                try {
                    $this->av->userIsValid($password, $currentUser->password);
                    $this->session->set_userdata('currentUser', $currentUser);
                    redirect('home/');
                } catch (InvalidCredentialException $e) {
                    $this->session->set_flashdata('error', $e->getMessage());
                    redirect('/');
                }
            } else {
                redirect('/');
            }
        } else {
            $this->load->view('auth_views/index');
        }
    }

    public function logout()
    {
        unset($_SESSION['currentUser']);
        $_SESSION = array();
        redirect('/');
    }

    public function createUser()
    {

    }

    public function updateUser()
    {

    }

    public function removeUser()
    {

    }
}
