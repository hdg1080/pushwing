<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pushwing_test extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $this->load->library('pushwing');

        echo 'pushwing�� ��ġ�� ����Ʈ������ push�� ���� �մϴ�.';
        $this->pushwing->send_push('0101234567', 'Test push', '�����ٶ󸶹ٻ�', 'http://www.cikorea.net');
	}
}

/* End of file pushwing_test.php */
/* Location: ./application/controllers/pushwing_test.php */