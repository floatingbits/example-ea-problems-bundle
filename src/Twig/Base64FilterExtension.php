<?php

namespace FloatingBits\ExampleEaProblemsBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class Base64FilterExtension extends AbstractExtension
{
    /**
     * @return TwigFilter[]
     */
    public function getFilters(): array
    {
        return [
            new TwigFilter('base64', [$this, 'twig_base64_filter']),
        ];
    }

    function twig_base64_filter($source): string
    {
        if ( $source != null) {
            if (is_resource($source)) {
                $source = stream_get_contents($source);
            }
            return base64_encode($source);
        }
        return '';
    }

}