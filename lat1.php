<?php

class bio
{
	public $nama,$alamat,$hoby,$sekolah;

	public function __construct($nama,$alamat,$hoby,$sekolah)
	{
		$this->nama=$nama;
		$this->alamat=$alamat;
		$this->hoby=$hoby;
		$this->sekolah=$sekolah;
	}
	public function get_nama(){
		return $this->nama;
	}
		public function get_alamat(){
		return $this->alamat;
	}
		public function get_hoby(){
		return $this->hoby;
	}
		public function get_sekolah(){
		return $this->sekolah;
	}
}

?>