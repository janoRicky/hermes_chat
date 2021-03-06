<?php

session_start();

class config {

	function __construct() {
		$this->page_limit = 10;
		$this->notif_timeout = 10000;

		$this->base_url = "http://". $_SERVER["SERVER_NAME"] . "/hermes_chat/";
		$this->index = "login";
		$this->routes = array(
			"login" => "main/view_login",
			"registration" => "main/view_registration",

			"conversations" => "main/view_conversations",

			"messaging" => "main/view_messaging",

			// FUNCTIONS
			"login_v" => "login/verify_login",
			"account_register" => "add/add_account",
			"account_update" => "edit/edit_account",
			"logout" => "main/logout",

			"request_conversation" => "add/conversation_request",
			"request_conversation_accept" => "add/conversation_request_accept",
			"message_send" => "add/add_message",

			"ajax_user_log_in_check" => "edit/ajax_edit_user_login"
		);
	}

	public function page_limit() {
		return $this->page_limit;
	}
	public function notif_timeout() {
		return $this->notif_timeout;
	}
	public function base_url() {
		return $this->base_url;
	}
	public function index() {
		return $this->index;
	}
	public function routes() {
		return $this->routes;
	}
}