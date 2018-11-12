<?php 
	if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	/**
	 * 
	 */
	class User_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function is_login_valid($username, $password)
		{
			$this->db->select('login_id');
			$this->db->where('username', $username);
			$this->db->where('password', $password);
			$this->db->from('user_login');
			$login_id = $this->db->get()->row_array();

			$user_data = $this->getInfoByUserId($login_id['login_id']);
			return $user_data;
		}

		public function register_user($value='')
		{
			if ($value != '') {
				$this->db->insert('people', $value['people']);
				$value['user']['people_id'] = $this->db->insert_id();
				$this->db->insert('user_login', $value['user']);
				$insert_id = $this->db->insert_id();
				return $insert_id;
			}
		}

		public function getInfoByUserId($value='')
		{
			$this->db->select('*');
			$this->db->from('user_login as u');
			$this->db->join('people as p', 'p.people_id = u.people_id', 'LEFT');
			$this->db->where('u.login_id', $value);
			$data = $this->db->get()->row_array();
			return $data;

		}

		public function check_repeated_value($value='', $field, $table)
		{
			$this->db->where($field, $value);
			$this->db->from($table);
			$is_valid = $this->db->count_all_results();

			return $is_valid;
		}
	}

?>