Feature: Testing validator with different personal id months
  In order to see if id month validator works
  As an any user
  I want to submit different id's

  Scenario: Inserting correct id
    Given I have a value "38912045225"
    When I use month_val function
    Then I should get "True"

  Scenario: Inserting wrong id
    Given I have a value "38913045225"
    When I use month_val function
    Then I should get "False"


