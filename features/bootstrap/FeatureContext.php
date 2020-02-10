<?php

use Behat\Behat\Context\Context;
use Kata\Fibonacci;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    /**
     * @var Fibonacci
     */
    protected $fibonacci;
    protected $index;

    /**
     * @Given A Fibonacci sequence algorithm
     */
    public function aFibonacciSequenceAlgorithm()
    {
        $this->fibonacci = new Fibonacci();
    }

    /**
     * @When I pass the index :index
     */
    public function iPassTheIndex($index)
    {
        $this->index = $index;
    }

    /**
     * @Then I get the value :expected
     */
    public function iGetTheValue($expected)
    {
        $response = $this->fibonacci->getValue($this->index);
        if ($response != $expected) {
            throw new Exception("Getted non valid result. Expected $expected, returned $response");
        }
    }
}
