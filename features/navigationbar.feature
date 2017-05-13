Feature: Navigating
    In order to navigate around the website
    As a customer
    I want the navigation bar works correctly

    Scenario: to the mainpage
        Given I am on the homepage
        When I follow "BETEZ Café"
        Then I should be on homepage
        # doc test deploy azure