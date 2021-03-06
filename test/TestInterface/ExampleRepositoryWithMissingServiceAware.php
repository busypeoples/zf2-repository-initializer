<?php

namespace TwentyFifth\Zf2RepositoryInitializer\TestInterface;

use TwentyFifth\Zf2RepositoryInitializer\RepositoryAware;

interface ExampleRepositoryWithMissingServiceAware extends RepositoryAware
{
	public function setExampleRepository($example);
	public function getExampleRepository();
}
