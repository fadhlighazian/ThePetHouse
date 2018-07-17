<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('upload/Upload_Form.php', array('error' => ' ' ));
        }

        public function do_upload()
        {
                $config['upload_path']          = './assets/UserImage';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 10000000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7608;

                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload/Upload_Form.php', $error);
                        //echo base_url() . 'assets/UserImage';
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        ///$this->load->view('upload/Upload_Success.php', $data);
                        foreach ($data as $item ):
                                echo $files = $item['full_path'] . '<br>';
                                echo substr_replace($files, "", -1);
                        endforeach;
                }
        }
}
?>