<?php declare(strict_types = 1);

namespace Tlapnet\Datus\Bridges\Symfony\Validation\Builder\Impl;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\Constraints\Range;

class RangeConstraintBuilder extends AbstractConstraintBuilder
{

	/**
	 * @param mixed[] $params
	 */
	public function create(array $params): Constraint
	{
		return new Range();
	}

}
