# Product Search Engine

A simple and efficient **Product Search Engine** built with PHP, JavaScript, and MySQL. This project allows users to search for products dynamically with filtering and sorting capabilities.

---

## 🎓 About This Project

This project was developed as part of my **Diploma in Computer Engineering** learning journey, in collaboration with my classmate **Hena Patel**. It serves as a **beginner-level project** designed to understand and practice fundamental concepts of:

- **PHP**: Server-side scripting, handling HTTP requests, and database interactions
- **MySQL**: Database design, SQL queries, and data management
- **AJAX/JavaScript**: Asynchronous data fetching and dynamic DOM manipulation
- **Full-stack Integration**: Connecting frontend and backend components

As a learning project, this implementation focuses on demonstrating core web development concepts rather than production-ready features. It's an excellent starting point for students and beginners who want to understand how PHP and MySQL work together to create dynamic web applications.

---

## 📌 Key Features
- **Live Search**: Instantly search for products in real-time.
- **Filtering & Sorting**: Filter by brand and sort results dynamically.
- **Database Integration**: Fetch data from MySQL using PHP.
- **Responsive UI**: Modern, user-friendly interface with CSS.

---

## 📷 Output Screenshot
![Product Search Engine Screenshot](screenshot.png) 

---

## 📦 Dependencies
- PHP 7.x or higher
- MySQL Database
- Apache Server (XAMPP, WAMP, or MAMP)
- JavaScript (Vanilla JS)

---

## 📂 Project Structure
```
Product-Search-Engine/
│── database.sql           # Database schema
│── db_connect.php         # Database connection script
│── fetch_results.php      # Fetches search results dynamically
│── search.php             # Backend search logic
│── script.js              # JavaScript for live search and filters
│── style.css              # CSS for styling the UI
│── screenshot.png         # Project screenshot (Add this file)
│── .gitignore             # Excludes unnecessary files (optional)
│── README.md              # Project documentation
```

---

## 🛠 Installation
### 1️⃣ Clone the Repository
```sh
git clone https://github.com/beingdhruvv/Product-Search-Engine.git
cd Product-Search-Engine
```

### 2️⃣ Set Up the Database
1. Create a MySQL database.
2. Import `database.sql` into your database.
3. Update `db_connect.php` with your database credentials.

### 3️⃣ Run the Project
- Ensure you have a local server (XAMPP, WAMP, or MAMP) running.
- Place the project folder inside the `htdocs` directory (or equivalent).
- Open `http://localhost/Product-Search-Engine/search.php` in your browser.

---

## 🖥 Usage
1. Enter a keyword in the search box.
2. Use filters and sorting options to refine results.
3. View search results dynamically updated.

---

## 💡 Concepts Learned

Through building this project, I gained hands-on experience with:

- **PHP Fundamentals**: Variables, arrays, functions, and control structures
- **MySQL Database Operations**: Creating tables, INSERT/SELECT queries, and database connections
- **PHP-MySQL Integration**: Using `mysqli` to connect and query databases
- **AJAX Implementation**: Asynchronous HTTP requests using JavaScript's `XMLHttpRequest` or `fetch` API
- **Dynamic Content Loading**: Updating webpage content without page refresh
- **Form Handling**: Processing user input and search queries
- **SQL Query Building**: Constructing dynamic queries based on user filters
- **Frontend-Backend Communication**: Understanding the request-response cycle

This project helped solidify my understanding of how web applications work end-to-end, from user interaction to database retrieval and back to the user interface.

---

## 👥 Contributors

- **Dhruv Suthar** - [@beingdhruvv](https://github.com/beingdhruvv)
- **Hena Patel** - Classmate and collaborator

This project was developed collaboratively as part of our Diploma in Computer Engineering coursework.

---

## 📝 License
This project is licensed under the **MIT License**. Feel free to modify and use it.

---
