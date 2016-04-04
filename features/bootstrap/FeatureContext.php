<?php

use Behat\Behat\Context\Context;
use Behat\Behat\Context\SnippetAcceptingContext;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;

/**
 * Defines application features from the specific context.
 */
require_once 'classes/Validator.php';
require_once 'isikukood.php';

class FeatureContext implements Context, SnippetAcceptingContext
{
    private $id;
    private $result;
    /**
     * @Given I have a value :arg1
     */
    public function iHaveAValue($arg1)
    {
        $this->id = $arg1;
    }

    /**
     * @When I use num_count function
     */
    public function iUseNumCountFunction()
    {
        $validator = new Validator();
        $this->result = $validator->num_count($this->id);
    }

    /**
     * @When I use month_val function
     */
    public function iUseMonthValFunction()
    {
        $validator = new Validator();
        $this->result = $validator->month_val($this->id);
    }

    /**
     * @Then I should get :arg1
     */
    public function iShouldGet($arg1)
    {
        if ($this->result != $arg1) {
            throw new Exception("Personal-id: {$this->id} should have returned value ".
                "{$arg1} but instead returned '{$this->result}'");
        }
    }

}
