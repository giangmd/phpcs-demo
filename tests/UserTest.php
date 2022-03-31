<?php


class UserTest
{
	protected $url = 'http://example.com';
	public function setUp(){
		parent::__construct();
	}

	public function test_show_login_page() {
		return $this->assertSame($this->url.'/login');
	}

}