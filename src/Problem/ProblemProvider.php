<?php

namespace FloatingBits\ExampleEaProblemsBundle\Problem;

use Floatingbits\EvolutionaryAlgorithmBundle\Entity\Problem;
use Floatingbits\EvolutionaryAlgorithmBundle\Problem\PersistableProblemProviderInterface;
use FloatingBits\ExampleEaProblemsBundle\Problem\Examples\RandomStringEaProblem;

class ProblemProvider implements PersistableProblemProviderInterface
{
    /**
     * @return array|Problem[]
     */
    public function getPersistableProblems(): array
    {
        $problem1 = new Problem();
        $problem1->setInstanceClass(RandomStringEaProblem::class);
        $problem1->setDescription('An example problem in a target string needs to be found using the ea algorithm and starting at random strings ');
        $problem1->setName('Random String Example');
        return [
            $problem1
        ];
    }

}