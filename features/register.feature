Feature: register
    In order to login
    As a customer
    I want to have an account

    Scenario: register
        Given I am on "register/"
        When I fill in "Họ" with "Sample"
        And I fill in "last_name" with "Customer"
        And I fill in "email" with "sampleemail@example.com"
        # And I fill in "Số Điện Thoại" with "0132323232322"
        And I fill in "Mật khẩu" with "123456"
        And I fill in "Xác nhận mật khẩu" with "123456"
        # And I fill in "Địa chỉ" with "Bưởi"
        And I check "Tôi đồng ý"
        And I press "registerbutton"
        Then I should be on "login/"
        # Cần xóa tài khoản trước khi test