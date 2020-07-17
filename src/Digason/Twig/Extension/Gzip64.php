<?php

namespace Digason\Twig\Extension;

use Twig_Extension;
use Twig_SimpleFunction;

class Gzip64 extends Twig_Extension
{
	public function getFilters() {
		return [
		new \Twig_SimpleFilter('gzip64', [$this, 'gzip64']),
		new \Twig_SimpleFilter('gunzip64', [$this, 'gunzip64']),
		];
	}

	public function gzip64($input) {
		return base64_encode(gzcompress($input, 9));
	}

	public function gunzip64($input) {
		return gzuncompress(base64_dencode($input));
	}


	public function getName()
	{
		return 'gzip64';
	}
}
