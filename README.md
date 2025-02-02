# User Profile Manager

## Description
User Profile Manager is a simple web application that allows users to register, log in, and view their profile details. Upon registration, the user's data is stored in a CSV file. After logging in, users are redirected to their profile page, and they can log out when desired. The focus of the project is on securing the application and managing data with CSV files for storage instead of using a database.

## Features
- User registration and login
- Profile page with user details
- Logout functionality
- Data stored in a CSV file
- Error page (404)
- Session and validation checks for secure user navigation

## Technologies Used
- PHP for backend logic
- CSV for data storage
- HTML & CSS for frontend design

## Security Measures
- **Validation & Sanitization**: Ensured that all user input is valid and secure to prevent attacks such as SQL Injection.
- **CSRF Protection**: Implemented protection against Cross-Site Request Forgery to safeguard server-side operations.
- **URL Jumping Attack Prevention**: Prevented unauthorized access to pages (e.g., accessing the profile page without logging in) by checking session status and displaying clear error messages when necessary.
- **Request Method Handling**: Handled different request methods and prevented unauthorized POST requests from being processed.


