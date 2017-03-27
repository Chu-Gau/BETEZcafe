Feature: xem mặt hàng
    As a customer
    I want to view all the drink that I can order
    In order to order a drink

    Scenario: view the menu
        Given I'm in the Home page
        Then I shoud see a list of drink that I can order
    
    Scenario: order a drink
        Given I'm reading the menu
        Then I can order some drinks
        And I should be given a sign so that I know that I have ordered successful

Feature: checkout
    In order to checkout
    As a customer
    I want to see and edit my cart 

    Scenario: check the cart out
        Given I have ordered all I need
        And I click on checkout button
        Then I should see all drinks in my cart
        And I can edit my cart then checkout

Feature: login
    In order to simplify the procedure of order
    As a customer
    I want to use my old info

    Scenario: register an account
        Given I don't have any account
        And I want to create an account
        Then I should be able to create my own account

    Scenario: login
        Given I have an account
        And I want to reuse my info
        Then I should be able to login

    Scenario: login with facebook or google
        Given I don't have an account
        And I don't want to create an account
        And I want to reuse my info
        And I already have an Fb or Google account
        Then I should be able to login
        
    Scenario: forgot password
        Given I already have an account
        But I forgot my password
        Then I should be able to restore my account

Feature: What did they order
    In order to serve the customers
    As a salesman
    I want to know what they ordered

    Scenario: title
    Given A customer have taken an order
    Then I should see what they ordered

Feature: Add a product
    In order to sale more drinks
    As a salesman 
    I want to add products to menu

    Scenario: add products
        Given I'm at the management page
        Then I should be able to add products to menu

Feature: Your time is up
    As a customer   
    I want to know when the store is closed

    Scenario: closed
        Given Its time to close the store
        Then I should see a notification


    

    
    

    
    
    


    