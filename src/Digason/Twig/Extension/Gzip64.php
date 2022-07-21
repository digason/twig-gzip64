<?php

namespace Digason\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Gzip64 extends AbstractExtension
{
	public function getFilters() {
		return [
		new TwigFilter('gzip64', [$this, 'gzip64']),
		new TwigFilter('gunzip64', [$this, 'gunzip64']),
		];
	}

	public function gzip64($input) {
		return base64_encode(gzcompress($input, 9));
	}

	public function gunzip64($input) {
		return gzuncompress(base64_decode($input));
	}


	public function getName()
	{
		return 'gzip64';
	}
}
