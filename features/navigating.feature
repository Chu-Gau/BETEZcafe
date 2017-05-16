Feature: Navigating
    In order to navigate around the website
    As a customer
    I want the navigation bar works correctly

    Scenario: to the mainpage
        Given I am on the homepage
        When I follow "BETEZ Café"
        Then I should be on homepage
    Scenario: to the mainpage 2
        Given I am on the homepage
        When I follow "Home"
        Then I should be on homepage
    Scenario: go to login
        Given I am on the homepage
        When I follow "Đăng nhập"
        Then I should be on "login/"
    Scenario: go to register
        Given I am on the homepage
        When I follow "Đăng kí"
        Then I should be on "register/"
    Scenario: discover offers
        Given I am on the homepage
        When I follow "Khuyến mãi"
        Then I should be on "khuyen_mai/"
    Scenario: how to contact
        Given I am on the homepage
        When I follow "Liên hệ "
        Then I should see "Vài nét về BETEZ Café"

    