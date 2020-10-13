<?php
class Home_model extends CI_Model
{
    function device_ctrl()
    {
        //bener ngen ga si bang? nk arep njupuk id dr home? sg mbok edit mau halaman telkom e ng home ki sg lab mst, sek mau lg pesen sate wkwk
        // sg diganti telkom_model mbe Telkom.php oh oke2 sk2

        $query = $this->db->query("SELECT * FROM kondisi_alat WHERE id='Lab_MST' ORDER BY waktu DESC");
        return $query->result();
    }

    function update_lampu1($lampu1)
    {
        $hasil = $this->db->query("UPDATE kondisi_alat SET lampu1='$lampu1'");
        return $hasil;
    }

    function update_lampu2($lampu2)
    {
        $hasil = $this->db->query("UPDATE kondisi_alat SET lampu2='$lampu2'");
        return $hasil;
    }

    function update_ac1($ac1)
    {
        $hasil = $this->db->query("UPDATE kondisi_alat SET ac1='$ac1'");
        return $hasil;
    }

    function update_ac2($ac2)
    {
        $hasil = $this->db->query("UPDATE kondisi_alat SET ac2='$ac2'");
        return $hasil;
    }

    function update_projector($projector)
    {
        $hasil = $this->db->query("UPDATE kondisi_alat SET projector='$projector'");
        return $hasil;
    }
    /*  function update_temp($suhu, $kelembapan)
    {
        $hasil = $this->db->query("UPDATE kondisi_alat SET suhu='$suhu', kelembapan='$kelembapan' ");
        return $hasil;
    } */
}
