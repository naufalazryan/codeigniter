<?php


class Auth_model extends CI_Model {

    private $_table = "user";
    const SESSION_KEY = 'user_id';

       
    public function rules()
    {
    return 
    [
        [
            'field'=> 'username',
            'label'=> 'Username',
            'rules'=> 'required'
        ],

        [
            'field'=> 'password',
            'label'=> 'Password',
            'rules'=> 'required'
        ]
    ];
    }

    function cek($username, $password){
        
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        return $this->db->get('user');
    }

// public function login($username, $password)
// {
//     $this->db->where('username', $username);
//     $query = $this->db->get($this->_table);
//     $user = $query->row();

//     // mengecek apakah user nya sudah terdaftar?
//     if (!$user) 
//     {
//         return FALSE;
//     }

//     // mengecek apakah password sudah benar?
//     if (!password_verify($password, $user->$password)) 
//     {
//         return FALSE;
//     }

//     // membuat session baru
//     $this->session->set_userdata([self::SESSION_KEY=>$user->id]);
    
//     return $this->session->has_userdata(self::SESSION_KEY);
// }

public function current_user()
{
    if (!$this->session->has_userdata(self::SESSION_KEY)) {
        return null;
    }
    $user_id = $this->session->userdata(self::SESSION_KEY);
    $query = $this->db->get_where($this->_table, ['id' => $user_id]);
    return $query->row();
}

public function logout()
{
    $this->session->    unset_userdata(self::SESSION_KEY);
    return !$this->session->has_userdata(self::SESSION_KEY);
}

public function _update_last_login($id)
{
    $data = ['last_login' => date("d-m-Y H:i:s")];

    return $this->db->update($this->_table, $data, ['id' => $id]);
}

}

?>