Feature: Login
    In order to reuse my info
    As a customer
    I want to login to my account

    Scenario: login
        Given I am on "/login"
        When I fill in "username" with "sampleuser@example.com"
        And I fill in "password" with "123456"
        And I press "loginbutton"
        And I should see "Sample User"
    Scenario: login to admin
        Given I am on "/login"
        When I fill in "username" with "sampleadmin@example.com"
        And I fill in "password" with "123456"
        And I press "loginbutton"
        Then I should be on "/admin/"
        And I should see "Admin"
    Scenario: login with wrong password
        Given I am on "/login"
        When I fill in "username" with "sampleadmin@example.com"
        And I fill in "password" with "1234567"
        And I press "loginbutton"
        And I should see "Tên đăng nhập hoặc mật khẩu không chính xác"
    Scenario: login with wrong email
        Given I am on "/login"
        When I fill in "username" with "wrongsampleadmin@example.com"
        And I fill in "password" with "123456"
        And I press "loginbutton"
        And I should see "Tên đăng nhập hoặc mật khẩu không chính xác"
    Scenario: login with no password
        Given I am on "/login"
        When I fill in "username" with "sampleadmin@example.com"
        And I press "loginbutton"
        And I should see "Bạn chưa nhập mật khẩu"
    Scenario: login with no email
        Given I am on "/login"
        And I fill in "password" with "1234567"
        And I press "loginbutton"
        And I should see "Bạn chưa nhập email"
    Scenario: login with nothing
        Given I am on "/login"
        And I press "loginbutton"
        And I should see "Bạn chưa điền thông tin để đăng nhập"
    
    