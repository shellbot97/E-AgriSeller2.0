<?php 

	/**
	 * 
	 */
	require_once APPPATH . "controllers/secure_area.php";
	class User extends secure_area
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('User_model', 'user_model');
		}

		public function login()
		{
			$username = $this->input->post('username');
			$password = md5($this->input->post('password'));

			$user_data = $this->user_model->is_login_valid($username, $password);

			print_r($this->session->all_userdata());die;

			if ($is_valid_username && $is_valid_password) {
				echo "valid";
			}elseif ($is_valid_username) {
				echo "wrong password";
			}else{
				echo "invalid";
			}
		}

		public function register()
		{
			$this->form_validation->set_rules('username', 'username', 'callback_check_repeated_username');
			$this->form_validation->set_rules('phone_number', 'phone number', 'callback_check_repeated_phone_number');
			$this->form_validation->set_rules('email', 'email', 'callback_check_repeated_email');

			if($this->form_validation->run() == FALSE) {
	            http_response_code(422);
	            echo validation_errors();

			}else{

				$user_data['user']['username'] = $this->input->post('username');
				$user_data['user']['password'] = md5($this->input->post('password'));
				$user_data['people']['name'] = $this->input->post('name');
				$user_data['people']['phone_number'] = $this->input->post('phone_number');
				$user_data['people']['email'] = $this->input->post('email');
				$user_data['people']['address'] = $this->input->post('address');
				$user_data['people']['role'] = $this->input->post('role');

				$responce = $this->user_model->register_user($user_data);

				if ($responce) {
					$user_created = $this->user_model->getInfoByUserId($responce);
					echo $user_created;
				}else{
					echo "Not Registered";
				}
			}

		}

		public function check_repeated_username($username='')
		{
			$responce = $this->user_model->check_repeated_value($username, 'username', 'user_login');
			if ($responce){
                $this->form_validation->set_message('check_repeated_username', 'username already registered, try registering with another username');
                return FALSE;
            }
            else{
                return TRUE;
            }
		}

		public function check_repeated_phone_number($phone_number='')
		{
			$responce = $this->user_model->check_repeated_value($phone_number, 'phone_number', 'people');
			if ($responce){
                $this->form_validation->set_message('check_repeated_phone_number', 'phone number already registered, try registering with another phone number');
                return FALSE;
            }
            else{
                return TRUE;
            }
		}

		public function check_repeated_email($email='')
		{
			$responce = $this->user_model->check_repeated_value($email, 'email', 'people');
			if ($responce){
                $this->form_validation->set_message('check_repeated_email', 'email already registered, try registering with another email');
                return FALSE;
            }
            else{
                return TRUE;
            }
		}

	}

?>