# Campaign Feedback Form

## Project overview 
A web application that captures feedback from a web form, stores it in a database, and displays the feedback on a web page for analysis.
## Features

- User-friendly feedback form with fields for Name, Email, Feedback, and Rating (1-5)
- Data storage using MySQL database
- Secure form submission using PHP
- Feedback retrieval and display for analysis
- Styled interface with a background image and party logo


## Tech Stack

**Frontend:** HTML, CSS

**Backend::** PHP

**Database:** MySQL

**Server:** XAMPP
## Installation and setup 
1. Clone the repository:
```bash
git clone https://github.com/your-username/repository-name.git
```

2. Move the project folder to C:\xampp\htdocs\
3. Start Apache and MySQL in XAMPP
4. Create a database named campaign_feedback in phpMyAdmin
5. Run the following SQL query to create the feedback table:
```bash
CREATE TABLE feedback (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100),
    feedback TEXT,
    rating INT,
    submission_date DATETIME DEFAULT CURRENT_TIMESTAMP
);
```

6. Open your browser and go to:
```bash
http://localhost/campaign_feedback/feedback_form.html
```

7. Submit feedback and view the stored responses in view_feedback.php
## License

This project is for educational purposes only.
