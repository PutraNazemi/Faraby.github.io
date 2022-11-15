<?php

defined('BASEPATH') or exit('No direct script access allowed');

class m_sistem extends CI_Model
{
    function cekuserdaftar($kode)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE kode = '$kode' ");
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    function ceklogin($kode, $password)
    {
        $query = $this->db->query("SELECT * FROM admin WHERE kode = '$kode' and password = '$password' ");
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }

    public function getDataBahasaArief()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Muhammad Arief Hakim P.');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaWildan()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Wildan Arief Firdaus');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaDiva()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Muhammad Diva Yoga P.');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaTajul()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Mokhammad Tajul Muluk R.');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaAlfa()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Mohamad Badrus Syarof A.');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaIfan()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Ifan Rafly Ramadhani');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaHasan()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Moh Hasan Ainul Muluk');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaSurya()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Muhammad Nur Surya S.');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaAdit()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Aditya Putra Pratama');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaLana()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Mohamad Ahsin Maulana H.');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaEzad()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Muhammad Noer Ezzad');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaAkbar()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Akbar Fariz Ramzy');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaRomzi()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Moh. Yamiji');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaAndika()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Andhika Dwi Oktavian');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaRaihan()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Raihan Syauqi');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaFirdaus()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Muhammad Firdaus');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaRamzi()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Ramzi Yazin Sulaiman');
        $query = $this->db->get();
        return $query->result();
    }
    public function getDataBahasaGandrung()
    {
        $this->db->select('*');
        $this->db->from('bahasa');
        $this->db->join('user', 'user.idMhs = bahasa.idMhs');
        $this->db->where('nmMhs =', 'Gandrung Margi Gusti');
        $query = $this->db->get();
        return $query->result();
    }
}
