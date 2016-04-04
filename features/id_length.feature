Feature: Testing validator with different personal id lengths
  In order to see if id length validator works
  As an any user
  I want to submit different id's

  Scenario: Inserting correct id
    Given I have a value "38912045225"
    When I use num_count function
    Then I should get "True"

  Scenario: Inserting wrong id
    Given I have a value "389120452256"
    When I use num_count function
    Then I should get "False"


