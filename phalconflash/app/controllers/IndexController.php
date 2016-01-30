<?php
class IndexController extends ControllerBase {
	public function indexAction() {
		$this->flash->error ( 'Cần mạng để có thể load bootstrap' );
		$this->flash->warning( 'Note: Cẩn thận' );
		$this->flash->success( 'Thành công' );
		$this->flash->notice( 'Note:information' );
		// can using flashSession insteand of flash 
		//$this->flashSession->notice( 'Note:information' );
	}
}

