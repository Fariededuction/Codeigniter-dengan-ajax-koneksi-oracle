<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_skpdkb extends CI_Model
{

   

  
    var $tabel_skpdkb = 'SURVEYAPP.SKPDKB';
    var $column_order = array( 'NO_FORMULIR','KODE_OBYEK',
                                'TGL_PENETAPAN','NILAI_PAJAK','NILAI_DENDA_PAJAK','DENDA_PERSEN',
                                 'CATATAN','OPR_CETAK','TGL_EDIT'); //set column field database for datatable orderable
    var $column_search = array('NO_FORMULIR', 'TGL_PENETAPAN'); //set column field database for datatable searchable just firstname , lastname , address are searchable
    var $order = array('NO_SKPDKB' => 'desc'); // default order 

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
   
    private function _get_datatables_query()
    {
        //add custom filter here
       
       
        $this->db->from($this->tabel_skpdkb);
       
        $i = 0;

        foreach ($this->column_search as $item) // loop column 
        {
            if ($_POST['search']['value']) // if datatable send POST for search
            {

                if ($i === 0) // first loop
                {
                    $this->db->group_start(); // open bracket. query Where with OR clause better with bracket. because maybe can combine with other WHERE with AND.
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like($item, $_POST['search']['value']);
                }

                if (count($this->column_search) - 1 == $i) //last loop
                   $this->db->group_end(); //close bracket
            }
            $i++;
        }

        if (isset($_POST['order'])) // here order processing
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else if (isset($this->order)) {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }

    function get_datatables()
    {
        $this->_get_datatables_query();
        if ($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }

   public function count_filtered()
    {
        $this->_get_datatables_query();     
        $query = $this->db->get();
        return $query->num_rows();
    }

  

    public function count_all()
    {
        $this->db->from($this->tabel_skpdkb);
        return $this->db->count_all_results();
    }


    public function save($data)
    {
        $this->db->insert($this->tabel_skpdkb, $data);
        return $this->db->insert_id();
    }

    public function updateskpdkb($where, $data) { 
        $this->db->update($this->tabel_skpdkb, $data, $where);
        return $this->db->affected_rows();
    }   

    public function get_by_id($NO_SKPDKB)
    {
        $this->db->from($this->tabel_skpdkb);
        $this->db->where('NO_SKPDKB',$NO_SKPDKB);
        $query = $this->db->get();
 
        return $query->row();
    }
}
