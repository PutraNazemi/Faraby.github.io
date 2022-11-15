<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
	{
		parent::__construct();
		$this->load->model('m_sistem');
		$this->load->library('session');
	}

    public function Home()
	{
		$this->load->view('Head');
		$this->load->view('Home');
	}

	public function Login()
	{
		$this->load->view('Head');
		$this->load->view('Login');
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('Home/Login', 'refresh');
	}

	public function Bahasa()
	{
		$r1 = $this->m_sistem->getDataBahasaArief(); $r10 = $this->m_sistem->getDataBahasaLana();
		$r2 = $this->m_sistem->getDataBahasaWildan(); $r11 = $this->m_sistem->getDataBahasaEzad();
		$r3 = $this->m_sistem->getDataBahasaDiva(); $r12 = $this->m_sistem->getDataBahasaAkbar();
		$r4 = $this->m_sistem->getDataBahasaTajul(); $r13 = $this->m_sistem->getDataBahasaRomzi();
		$r5 = $this->m_sistem->getDataBahasaAlfa(); $r14 = $this->m_sistem->getDataBahasaAndika();
		$r6 = $this->m_sistem->getDataBahasaIfan(); $r15 = $this->m_sistem->getDataBahasaRaihan();
		$r7 = $this->m_sistem->getDataBahasaHasan(); $r16 = $this->m_sistem->getDataBahasaFirdaus();
		$r8 = $this->m_sistem->getDataBahasaSurya(); $r17 = $this->m_sistem->getDataBahasaRamzi();
		$r9 = $this->m_sistem->getDataBahasaAdit(); $r18 = $this->m_sistem->getDataBahasaGandrung();
		$this->load->view('Head');
		$DATA = array('k1' => $r1, 'k2' => $r2, 'k3' => $r3, 'k4' => $r4, 'k5' => $r5, 'k6' => $r6,
		'k7' => $r7, 'k8' => $r8, 'k9' => $r9, 'k10' => $r10, 'k11' => $r11, 'k12' => $r12, 'k13' => $r13,
		'k14' => $r14, 'k15' => $r15, 'k16' => $r16, 'k17' => $r17, 'k18' => $r18);
		$this->load->view('Bahasa', $DATA);
	}

	public function Malam()
	{
		$this->load->view('Head');
		$this->load->view('Malam');
	}

	public function Shalat()
	{
		$this->load->view('Head');
		$this->load->view('Shalat');
	}

	public function Tadarus()
	{
		$this->load->view('Head');
		$this->load->view('Tadarus');
	}

	function ProsesLogin()
	{
		$kode = $this->input->post('kode');
		$password = ($this->input->post('password'));

		$cekuserdaftar = $this->m_sistem->cekuserdaftar($kode);
		if ($cekuserdaftar) {

			$ceklogin = $this->m_sistem->ceklogin($kode, $password);
			
			if ($ceklogin) {

				foreach($ceklogin as $row);

				if($row->status == "Aktif"){
					$this->session->set_userdata('kode', $row->kode);
					$this->session->set_userdata('nmLengkap', $row->nmLengkap);
					$this->session->set_userdata('password', $row->password);
					$this->session->set_userdata('level', $row->level);

					if(($this->session->userdata('level')=="Admin")){
						redirect('Home/Home', 'refresh');
					} else {
						echo "<script>alert('Mohon Maaf anda tidak memiliki hak akses');</script>";
						redirect('Home/Login', 'refresh');
					}

				} else {
					echo "<script>alert('Mohon Maaf username belum aktif');</script>";
					redirect('Home/Login', 'refresh');
				}

			} else {
				echo "<script>alert('Mohon Maaf username atau password salah');</script>";
				redirect('Home/Login', 'refresh');
			}

		} else { 
			echo "<script>alert('Mohon Maaf username belum terdaftar');</script>";
			redirect('Home/Login', 'refresh');
		}
	}
}