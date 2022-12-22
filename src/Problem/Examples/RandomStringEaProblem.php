<?php

namespace FloatingBits\ExampleEaProblemsBundle\Problem\Examples;


use Floatingbits\EvolutionaryAlgorithmBundle\Problem\PersistableProblemInterface;
use FloatingBits\ExampleEaProblemsBundle\Form\RandomStringEaProblemType;
use FloatingBits\RandomStringEaProblem\Problem\AbstractProblem;
use FloatingBits\RandomStringEaProblem\Problem\RandomStringProblem;

class RandomStringEaProblem extends AbstractProblem implements PersistableProblemInterface
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
        return RandomStringEaProblemType::class;
    }

    /**
     * @return string
     */
    public function getFormTemplate(): string
    {
        return '@EvolutionaryAlgorithm/problem_instance/_form.html.twig';
    }


}