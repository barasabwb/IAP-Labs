<?php 
interface Crud{
	public function save($conn);
	public function readAll($conn);
	public function readUnique();
	public function search();
	public function update();
	public function removeOnee();
	public function removeAll();
	
}




 ?>