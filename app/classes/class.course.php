<?php

if( ! class_exists( 'Course' ) ) {
	class Course{
		
		public $id;
		public $name;
		public $question_ids = array();
		public $questions = array();
		
		public function __construct( $id = '' ) {
			if( $id != '' ) {
				$this->id = $id;
				$this->name = 'Data Analysis - 101';
				$this->question_ids = array( 5, 8 );
				$this->questions = array( 
										new Question( 5 ),
										new Question( 8 )
									);
			}
		}
		
		public function get_name() {
			return $this->name;
		}
		
	}
}