# Online Bus Ticket Reservation System 🚍

This project is an **Online Bus Ticket Reservation System** built using **PHP**, **MySQL**, **HTML**, **CSS**, and **JavaScript**, with the **XAMPP** server. It enables users to book bus tickets, make payments, and view their bookings efficiently.

## Features

1. **User Authentication**:
   - Secure login and registration for users.
2. **Bus Selection**:
   - View available buses and their details.
3. **Seat Selection**:
   - Choose seats from the available ones on the selected bus.
4. **Payment Processing**:
   - Input payment details (card number, phone number, and UPI ID) and confirm booking.
5. **View Bookings**:
   - View all booked tickets along with bus details.
6. **Cancel Tickets**:
   - Cancel booked tickets and make the seats available for future bookings.

---

## Technologies Used

- **Frontend**: HTML, CSS, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Server**: XAMPP (Apache & MySQL)

---

## Installation and Setup

1. **Download and Install XAMPP**:
   - Download XAMPP from [Apache Friends](https://www.apachefriends.org/) and install it.

2. **Clone the Repository**:
   - Clone this project or download the ZIP and extract it to the `htdocs` directory inside your XAMPP installation folder.

3. **Import Database**:
   - Open **phpMyAdmin** via `http://localhost/phpmyadmin`.
   - Create a database named `final`.
   - Import the `final.sql` file from the project directory to the `final` database.

4. **Update Database Configuration**:
   - Open the `db.php` file and ensure the database credentials match your XAMPP setup:
     ```php
     $servername = "localhost";
     $username = "root"; // Default XAMPP username
     $password = ""; // Default XAMPP password is empty
     $dbname = "final";
     ```

5. **Run the Project**:
   - Start Apache and MySQL from the XAMPP control panel.
   - Access the project in your browser at `http://localhost/final`.

---

## Project Workflow

1. **Homepage**:
   - Users can log in or register to access the system.
2. **Bus Selection**:
   - After logging in, users can view available buses and select one.
3. **Seat Selection**:
   - Select the desired seats for the chosen bus.
4. **Payment**:
   - Enter payment details and confirm the booking.
5. **View Bookings**:
   - Users can view all their bookings along with seat details and ticket ID.
6. **Cancel Booking**:
   - Users can cancel tickets, which will make the seats available for others.

---

## File Structure

```plaintext
/final
├── db.php                 # Database connection file
├── header.php             # Header template
├── footer.php             # Footer template
├── index.php              # Homepage for login/registration
├── register.php           # User registration page
├── login.php              # User login page
├── buses.php              # Bus selection page
├── seat_selection.php     # Seat selection page
├── payment.php            # Payment processing page
├── view_booked.php        # View booked tickets page
├── cancel_ticket.php      # Cancel tickets functionality
├── css/
│   └── styles.css         # CSS styles
├── sql/
│   └── final.sql          # Database dump file
```

---

## Database Schema

### Tables:

1. **users**:
   - Stores user credentials (ID, username, email, password).

2. **buses**:
   - Stores bus details (ID, name, departure/arrival time, route, etc.).

3. **seats**:
   - Manages seat availability for each bus.

4. **tickets**:
   - Stores ticket booking details (ID, user ID, bus ID, seat number, booking date).

---

## Future Enhancements

- Add email notifications for ticket confirmation and cancellations.
- Introduce dynamic pricing based on seat demand.
- Enhance the UI with a responsive design.
- Integrate online payment gateways for real transactions.

---

## License

This project is licensed under the [MIT License](LICENSE).

---

## Author

- **Subramanian V**
- Email: vsubramanianofficial@gmail.com
- LinkedIn: https://www.linkedin.com/in/subramanian-v-a93089255/

---

This README should guide users through setting up and using your system effectively. Let me know if you need further customization!
