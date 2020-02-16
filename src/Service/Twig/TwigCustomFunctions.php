<?php
/**
 * Created by PhpStorm.
 * Author: mickael-dev
 * File: TwigCustomFunctions.php
 * Created: 13/02/2020 16:06
 */

declare(strict_types=1);

namespace App\Service\Twig;

use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;

class TwigCustomFunctions extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('dateInterval', [$this, 'dateIntervaleFunction'])
        ];
    }

    /**
     * @param string $interval_spec
     *
     * @return \DateInterval
     */
    public function dateIntervaleFunction($interval_spec): \DateInterval
    {
        return \DateInterval::createFromDateString($interval_spec);
    }
}