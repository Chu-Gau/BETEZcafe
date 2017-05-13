Feature: Login
    In order to value
    As a role
    I want feature

    Scenario: login
        Given I am on "/login"
        When I fill in "username" with "sampleuser@example.com"
        And I fill in "password" with "123456"
        Then I should be on homepage
        And I should see "Sample User"