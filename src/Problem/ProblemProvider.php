<?php

namespace FloatingBits\ExampleEaProblemsBundle\Problem;

use Floatingbits\EvolutionaryAlgorithmBundle\Entity\Problem;
use Floatingbits\EvolutionaryAlgorithmBundle\Problem\PersistableProblemProviderInterface;
use FloatingBits\ExampleEaProblemsBundle\Problem\Examples\RandomEvaluatorImageProblem;
use FloatingBits\ExampleEaProblemsBundle\Problem\Examples\RandomStringEaProblem;
use Floatingbits\ImageProcessingEaProblems\Problem\RandomEvaluator\Problem as RandomImageProblem;
class ProblemProvider implements PersistableProblemProviderInterface
{
    /**
     * @return array|Problem[]
     */
    public function getPersistableProblems(): array
    {
        $problem1 = new Problem();
        $problem1->setInstanceClass(RandomStringEaProblem::class);
        $problem1->setDescription('An example problem in which a target string needs to be found using the ea algorithm and starting at random strings ');
        $problem1->setName('Random String Example');
        $problem2 = new Problem();
        $problem2->setInstanceClass(RandomEvaluatorImageProblem::class);
        $problem2->setDescription('An example problem in which an image is "optimized" to a random evaluation. (Lacking of proper image evaluation yet)');
        $problem2->setName('Random Image Evaluator Example');
        return [
            $problem1,
            $problem2
        ];
    }

}