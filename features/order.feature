# @javascript
Feature: Order
    In order to order drinks
    As a customer
    I want to view all the drinks that I can order

    Scenario: order
        Given I am on homepage
        When I press "abc"
        Then the cart should have 1
 
    Scenario: checkout
        Given I am on homepage
        When I follow "checkout"
        Then I should be on "/checkout/"

# cụ thể hóa:
# (1)requirements -> user story -> testcases
#                     <Feature>    <Scenario>
# (2)cài đặt(implementation)
#    V
# (3)Engineering  => chất lượng
#                     /    \
#             test tay      
#             SaaS -> yêu cầu vá ngay ->test tự động cho nhanh                
