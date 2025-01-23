<?php
class Mlogin extends CI_Model
{
    public function cek_admin($u, $p)
    {
        return $this->db->get_where('user', array(
            'username' => $username,
            'password' => $password
        ));
    }
}
?>