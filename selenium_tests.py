#! /usr/bin/env python

from selenium import webdriver
from selenium.webdriver.common.by import By

def test_main_page_load(driver):
    print "testing that main page loads"
    driver.get('http://127.0.0.1:5000')
    if driver.title == "Rideshare":
        print "\tPASS"
        return True
    print "\tFAIL"
    return False

def test_user_profile_load(driver):
    print "test that user profile loads"
    driver.get('http://127.0.0.1:5000/users/me/')
    if driver.title == "Rideshare": # it loaded...
        print "\tPASS"
        return True
    print "\tFAIL"
    return False

def test_matchmaking_page_load(driver):
    print "test that the matchmaking page loads"
    driver.get('http://127.0.0.1:5000/matchmaking/')
    if driver.title == "Rideshare": # it loaded...
        print "\tPASS"
        return True
    print "\tFAIL"
    return False

def run_test(t):
    driver = webdriver.Firefox()
    t(driver)
    driver.quit()

def main():
    print "Make sure the server is running!"
    run_test(test_main_page_load)
    run_test(test_user_profile_load)
    run_test(test_matchmaking_page_load)

if __name__ == '__main__':
    main()
"""
driver = webdriver.Firefox()
driver.get("http://www.google.com")
inputElement = driver.find_element_by_name("q")
inputElement.send_keys("Cheese!")
inputElement.submit()
print driver.title
try:
    WebDriverWait(driver, 10).until(EC.title_contains("cheese!"))
    print driver.title
finally:
    driver.quit()
"""
