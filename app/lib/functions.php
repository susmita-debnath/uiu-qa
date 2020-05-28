<?php

function base_url() {
	return BASE_URL;
}

function base_path() {
	return BASE_PATH;
}

function get_current_slug() {
	return isset( $_REQUEST['page'] ) && $_REQUEST['page'] != '' ? $_REQUEST['page'] : 'home';
}

function get_page_file_path( $path ) {
	return BASE_PATH . '/app/pages/' . $path . '.php';
}

function is_home() {
	return get_current_slug() == 'home';
}