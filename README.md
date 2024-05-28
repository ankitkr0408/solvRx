# **SolvRx - Doctor Appointment Booking System**

**SolvRx** is a web-based application designed to streamline the process of booking doctor appointments. With an intuitive interface and robust features, **SolvRx** aims to simplify the patient experience while offering efficient management for healthcare providers.



## **Features**

- **User-friendly Interface**: Simple and intuitive design for easy navigation.
- **Appointment Booking**: Allows patients to book appointments with their preferred doctors.
- **Doctor Management**: Enables doctors to manage their schedules and appointments efficiently.
- **Patient Records**: Secure storage and access to patient records for healthcare providers.
- **Notification System**: Email or SMS reminders for upcoming appointments.
- **Responsive Design**: Accessible across multiple devices for convenience.

## **Tech Stack**

- **Frontend**: HTML, CSS, JavaScript, Bootstrap
- **Backend**: PHP
- **Database**: XAMPP (MySQL)
- **Design**: Basic designs created using Figma

## **Installation**

1. Clone the repository:

```bash
git clone https://github.com/your-username/solvRx.git
```
2. Navigate to the project directory:
```bash
cd solvRx
```
3. Set up the database:

- Start XAMPP and ensure that Apache and MySQL are running.
- Open phpMyAdmin and create a new database named solvrx.
- Import the database schema from database/solvrx.sql.
  
4. Configure the backend:
- Open php file and update the database credentials:
```php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'your-username');
define('DB_PASSWORD', 'your-password');
define('DB_NAME', 'solvrx');
```
Start the development server:

Move the project directory to the XAMPP htdocs directory:
sh
Copy code
mv ~/path-to-solvrx /path-to-xampp/htdocs/solvrx
Open a web browser and navigate to http://localhost/solvrx.
Usage
Running the Application
Open your web browser and go to http://localhost/solvrx.
Use the application to manage doctor appointments and patient records.
Admin Access
To access the admin panel, navigate to http://localhost/solvrx/admin.
Use the default admin credentials:
Username: admin
Password: admin123
Contributing
We welcome contributions to SolvRx! Please follow these steps to contribute:

Fork the repository.
Create a new branch:
sh
Copy code
git checkout -b feature/your-feature-name
Make your changes.
Commit your changes:
sh
Copy code
git commit -m 'Add some feature'
Push to the branch:
sh
Copy code
git push origin feature/your-feature-name
Create a new Pull Request.
License
This project is licensed under the MIT License. See the LICENSE file for details.

Contact
For any inquiries or feedback, please reach out to us at:

Email: support@solvrx.com
Twitter: @solvRx
