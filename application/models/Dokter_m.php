<?php 

    class Dokter_m extends CI_Model
    {
        private $table = 'dokter';
        
        public function index()
        {
            return $this->db->get('dokter')->result();
        }

        public function show($id, $table)
        {
            return $this->db->where('id', $id)->get($table)->row();
        }

        public function count()
        {
            return $this->db->from("dokter")->count_all_results();
        }
    
        public function store($data, $table)
        {
            $this->db->insert($table, $data);
        }
        
        public function edit($where, $table)
        {
            return $this->db->get_where($table, $where);
        }

        public function update($where, $data, $table)
        {
            $this->db->where($where);
            $this->db->update($table, $data);
        }

        public function destroy($where, $table)
        {
            $this->db->where($where);
            $this->db->delete($table);
        }
    }

?>