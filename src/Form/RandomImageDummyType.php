<?php

namespace FloatingBits\ExampleEaProblemsBundle\Form;

use Floatingbits\EvolutionaryAlgorithmBundle\Form\Example\AddJobsToMachinesExample\JobType;
use Floatingbits\EvolutionaryAlgorithmBundle\Problem\Example\AssignJobToMachinesExample\PersistableProblem;
use FloatingBits\ExampleEaProblemsBundle\Problem\Examples\RandomEvaluatorImageProblem;
use FloatingBits\ExampleEaProblemsBundle\Problem\Examples\RandomStringEaProblem;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RandomImageDummyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder->add('targetString');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => RandomEvaluatorImageProblem::class,
        ]);
    }
}