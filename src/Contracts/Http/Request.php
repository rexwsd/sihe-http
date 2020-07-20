<?php

namespace Sihe\Http\Contracts\Http;

interface Request
{
	public function get($url, $queryParams = []);
	
	public function post($url, $params = []);
	
	public function patch($url, $params = []);
	
	public function put($url, $params = []);
	
	public function delete($url, $params = []);
}
