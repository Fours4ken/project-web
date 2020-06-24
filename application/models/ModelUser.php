<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelUser extends CI_Model
{

    public function getUser( $where )
    {
        return $this->db->get_where( 'tb_customer',$where )->row_array();
    }

    public function addUser( $where )
    {
        return $this->db->insert('tb_customer', $where);
    } 

    public function getKategori()
    {
        return $this->db->get('tb_kategori')->result_array();
    }

    public function getSuggest1()
    {
        return $this->db->get_where('tb_kendaraan', ['id_kategori' => 1, 'status' => 'Ready'])->row_array();
    }

    public function getSuggest2()
    {
        return $this->db->get_where('tb_kendaraan', ['id_kategori' => 2, 'status' => 'Ready'])->row_array();
    }

    public function getSuggest3()
    {
        return $this->db->get_where('tb_kendaraan', ['id_kategori' => 3, 'status' => 'Ready'])->row_array();
    }

    public function getSuggest4()
    {
        return $this->db->get_where('tb_kendaraan', ['id_kategori' => 4, 'status' => 'Ready'])->row_array();
    }

    public function getSuggest5()
    {
        return $this->db->get_where('tb_kendaraan', ['id_kategori' => 5, 'status' => 'Ready'])->row_array();
    }

    public function getSuggest6()
    {
        return $this->db->get_where('tb_kendaraan', ['id_kategori' => 6, 'status' => 'Ready'])->row_array();
    }

    public function NKmurah()
    {
        $this->db->order_by('harga_perhari', 'ASC');
        return $this->db->get_where('tb_kendaraan', ['status' => 'ready'])->result_array();
    }

    public function NKmahal()
    {
        $this->db->order_by('harga_perhari', 'DESC');
        return $this->db->get_where('tb_kendaraan', ['status' => 'ready'])->result_array();
    }

    public function NKbaru()
    {
        $this->db->order_by('tahun', 'DESC');
        return $this->db->get_where('tb_kendaraan', ['status' => 'ready'])->result_array();
    }

    public function NKlama()
    {
        $this->db->order_by('tahun', 'ASC');
        return $this->db->get_where('tb_kendaraan', ['status' => 'ready'])->result_array();
    }

    public function WKmurah( $where )
    {
        $this->db->order_by('harga_perhari', 'ASC');
        return $this->db->get_where('tb_kendaraan', ['id_kategori' => $where, 'status' => 'ready'])->result_array();
    }

    public function WKmahal( $where )
    {
        $this->db->order_by('harga_perhari', 'DESC');
        return $this->db->get_where('tb_kendaraan', ['id_kategori' => $where, 'status' => 'ready'])->result_array();
    }

    public function WKbaru( $where )
    {
        $this->db->order_by('tahun', 'DESC');
        return $this->db->get_where('tb_kendaraan', ['id_kategori' => $where, 'status' => 'ready'])->result_array();
    }

    public function WKlama( $where )
    {
        $this->db->order_by('tahun', 'ASC');
        return $this->db->get_where('tb_kendaraan', ['id_kategori' => $where, 'status' => 'ready'])->result_array();
    }

    public function detailKendaraan ( $where )
    {
        return $this->db->get_where('tb_kendaraan', ['id' => $where])->row_array();
    }

    public function booking_tmp( $value )
    {
        $this->db->insert('tb_booking_tmp', $value);
    }

    public function get_booking_tmp ( $where )
    {
        return $this->db->get_where('tb_booking_tmp', ['id_user' => $where])->row_array();
    }

    public function up_st_kendaraan( $where, $id )
    {
        $this->db->set(['status' => $id]);
        $this->db->where(['id' => $where]);
        $this->db->update('tb_kendaraan');
    }

    public function cancel_book( $where )
    {
        $this->db->delete('tb_booking_tmp', ['id' => $where]);
    }

    public function cancel_rent( $where )
    {
        $this->db->delete('tb_booking', ['id' => $where]);
    }

    public function finish_booking( $value )
    {
        $this->db->insert('tb_booking', $value);
    }

    public function get_booking ( $where )
    {
        return $this->db->get_where('tb_booking', ['id_user' => $where])->row_array();
    }

    public function count_booking_tmp ( $where )
    {
        return $this->db->get_where('tb_booking_tmp', ['id_user' => $where])->num_rows();
    }

    public function count_booking ( $where )
    {
        return $this->db->get_where('tb_booking', ['id_user' => $where])->num_rows();
    }

    public function updateprofile( $value, $where )
    {
        $this->db->set( $value );
        $this->db->where( ['id' => $where] );
        $this->db->update('tb_customer');
    }

    public function inser_contact( $value )
    {
        $this->db->insert('tb_contact', $value);
    }

    public function createToken( $value = null )
    {
        $this->db->insert('tb_token', $value);
    }

    public function userToken( $where = null )
    {
        return $this->db->get_where('tb_token', $where)->row_array();
    }

    public function deleteToken( $where = null )
    {
        $this->db->delete('tb_token', ['token' => $where]);
        return $this->db->affected_rows();
    }

    public function up_st_bayar( $where, $status )
    {
        $this->db->set(['status_bayar' => $status]);
        $this->db->where(['id_user' => $where]);
        $this->db->update('tb_booking');
    }

    public function updatePassword( $newPass = null, $where = null )
    {
        $this->db->set(['password' => $newPass]);
        $this->db->where( ['email' => $where]);
        $this->db->update( 'tb_customer' );
        return $this->db->affected_rows();
        
    }

}