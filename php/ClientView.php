<?php

	class ClientView {
		
		public function showHeader($pageTitle = '') {
			include "views/header.inc";
		}
		public function showFooter(){
			include "views/footer.inc";
		}
		public function showLatest($rows){
			include "views/client-list.inc";
		}
		public function showDetails($rows){
			include "views/client-details.inc";
		}
	}
?>