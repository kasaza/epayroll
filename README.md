# Electronic Payroll Management System

## Overview

The Electronic Payroll Management System is designed to streamline payroll processing and management within an organization. Built using PHP, JavaScript, and MySQL, this system provides an efficient, user-friendly interface for managing employee payroll details.

## Features

- Secure and efficient payroll processing
- User-friendly interface for easy management
- Comprehensive employee records management
- Automated payroll calculations

## Prerequisites

- PHP (version 5.0.0 or higher)
- MySQL (version 5.7 or higher)
- Web server (e.g., Apache, Nginx)

## Installation

1. **Clone the Repository**
   ```sh
   git clone https://github.com/kasaza/epayroll.git
   ```
   
2. **Navigate to the Project Directory**
   ```sh
   cd epayroll
   ```

3. **Create Database**
   - Open your MySQL client (e.g., phpMyAdmin, MySQL Workbench).
   - Create a new database named `hrm`.
     ```sql
     CREATE DATABASE hrm;
     ```

4. **Import Database Schema**
   - Import the `hrm.sql` file into the `hrm` database you just created.
     - If using the command line, you can run:
       ```sh
       mysql -u [username] -p hrm < hrm.sql
       ```
     - Replace `[username]` with your MySQL username.

5. **Configure Database Connection**
   - Open the `config.php` file located in the project directory.
   - Update the database connection settings:
     ```php
     <?php
     $servername = "localhost";
     $username = "your_username";
     $password = "your_password";
     $dbname = "hrm";
     ?>
     ```

6. **Set Up Web Server**
   - Ensure your web server's document root is set to the project directory.
   - For Apache, you might need to configure the virtual host.
   - For Nginx, update the server block configuration accordingly.

## Usage

1. **Access the Application**
   - Open your web browser and navigate to `http://localhost/epayroll` (or your server's domain).

2. **Admin Login**
   - Username: `11111111`
   - Password: `11111111`

## Contributing

Contributions are welcome! Please fork the repository and submit a pull request for any enhancements or bug fixes.

## License

This project is licensed under the MIT License.

## Contact

Developed by Sylvester Kasaza  
For inquiries, please contact: kasazax@gmail.com
Supported by: BitDefence Labs and Syncrovate Technologies
Nairobi - Kenya.

---

Thank you for using the Electronic Payroll Management System! If you have any questions or need further assistance, please don't hesitate to reach out.
