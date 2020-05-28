<?php

if( ! class_exists( 'Question' ) ) {
	class Question{
		
		public $id;
		public $title;
		public $like_count;
		public $author;
		public $answers = array();
		
		public function __construct( $id = '' ) {
			if( $id != '' ) {
				$this->title = 'How is this done?';
				$this->like_count = 13;
				$this->author = new Student( 10 );
				$this->id = $id;
			}
		}
		
		public function get_title() {
			return $this->title;
		}
		
		public function get_like_count() {
			return $this->like_count;
		}
		
		public function get_author() {
			return $this->author;
		}
	}
}