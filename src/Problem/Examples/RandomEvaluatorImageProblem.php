<?php

namespace FloatingBits\ExampleEaProblemsBundle\Problem\Examples;


use Floatingbits\EvolutionaryAlgorithmBundle\Problem\PersistableProblemInterface;
use FloatingBits\ExampleEaProblemsBundle\Form\RandomImageDummyType;
use Floatingbits\ImageProcessingEaProblems\Problem\RandomEvaluator\Problem;

class RandomEvaluatorImageProblem extends Problem implements PersistableProblemInterface
{
    /**
     * @var string
     */
    private string $targetString = '';

    /**
     * @return string
     */
    public function getTargetString(): string
    {
        return $this->targetString;
    }

    /**
     * @param string $targetString
     */
    public function setTargetString(string $targetString): void
    {
        $this->targetString = $targetString;
    }

    /**
     * @return string
     */
    public function getFormClass(): string
    {
        return RandomImageDummyType::class;
    }

    /**
     * @return string
     */
    public function getFormTemplate(): string
    {
        return '@EvolutionaryAlgorithm/problem_instance/_form.html.twig';
    }


}