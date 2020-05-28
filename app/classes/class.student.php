<?php

if( ! class_exists( 'Student' ) ) {
	class Student{
		public $name;
		public $id;
		public $email;
		
		public function __construct( $id = '' ) {
			if( $id != '' ) {
				// Will fetch the data from database
				// SELECT * FROM STUDENT WHERE `ID` = $id;
				// Get values of that student 
				$this->name = 'Alex';
				$this->email = 'alex@gmail.com';
				$this->id = $id;
			}
		}
		
		public function get_name() {
			return $this->name;
		}
		
		public function get_email() {
			return $this->email;
		}
	}
}
