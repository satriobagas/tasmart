<?php
class History_model extends CI_Model
{
    function device_history()
    {
        $query = $this->db->query("SELECT * FROM kondisi_alat ORDER BY no DESC LIMIT 2000");
        return $query->result();
    }

    function delete($no)
    {
        $this->db->where('no', $no);
        $this->db->delete('kondisi_alat');
    }
}
