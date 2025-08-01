<p align="center"> <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"> </p>
<h1 align="center">🧠 Laravel Resume Builder — Exclusively for MEC</h1>
A custom-built Laravel Resume Builder designed to solve one of the most common frustrations faced by students and placement cells — creating resumes with perfect alignment, spacing, and design consistency.

📌 Why I Built This
Every placement season, hundreds of students struggle with:

Spacing issues in Microsoft Word

Inconsistent font sizes and margins

PDF alignment issues across systems

Last-minute edits without design breakage

Placement cells needing a uniform resume layout

This Laravel project provides an all-in-one structured solution. Built for both students and placement officers.

🌟 Features
🔧 Predefined resume templates with pixel-perfect spacing

📝 Inbuilt Editor – format text, bold, italic, add external links, etc.

🎨 Template-switching support (in progress)

🗂️ Sectioned resume building: Personal Info, Education, Experience, Projects, Skills, etc.

🧠 AI Suggestions (Optional)

🧾 Exports to print-ready PDF

🖥️ Tech Stack
Laravel (PHP) – Backend

Blade – Templating

Bootstrap – Layout styling

MySQL – Data storage

DomPDF – For PDF generation

🚀 Local Setup Instructions
Anyone can run this on their own PC. Here's how:

🔧 Prerequisites
✅ PHP >= 8.1

✅ Composer

✅ XAMPP / WAMP / Laravel preinstalled (PHP + MySQL environment)

✅ Git

🛠 Installation Steps
Clone the repository from GitHub

Open the folder in terminal

Then, do the following:

markdown
Copy
Edit
1. composer install  
2. cp .env.example .env  
3. php artisan key:generate  
4. Edit the `.env` file → configure your DB (MySQL) credentials  
5. php artisan migrate  
6. php artisan serve  
💡 Don't forget to start Apache & MySQL from XAMPP control panel before running!

🗃️ Database Setup
Create a new MySQL database (e.g., resume_builder)

Put the DB name, username, and password inside .env

👨‍💻 How it works
Fill in different sections of your resume

Use rich-text editor to bold/unbold, add external links

Hit "Generate PDF" — ready to download and submit!


🧪 For Deployment
If deploying on shared hosting / cloud, ensure:

PHP version is >= 8.1

storage and bootstrap/cache folders have write permissions

.env is correctly configured

Run php artisan config:cache before final push

💬 Final Note
I made this project to help fellow students and academic institutions ease the resume preparation process. This builder saves time, avoids design headaches, and ensures everyone’s resume follows the same professional layout.

Here are some attached screenshots..
<img width="1836" height="900" alt="Screenshot 2025-07-27 184344" src="https://github.com/user-attachments/assets/f8304c1d-f88e-4c7d-b46e-baa35ec89fc5" />
<img width="1846" height="924" alt="Screenshot 2025-07-27 184603" src="https://github.com/user-attachments/assets/a43185dd-b205-4b72-a4a0-110613407f52" />
<img width="1847" height="923" alt="Screenshot 2025-07-27 190128" src="https://github.com/user-attachments/assets/3ac52f41-df05-4394-82d9-e25ca50b10a7" />
<img width="1847" height="915" alt="Screenshot 2025-07-27 190041" src="https://github.com/user-attachments/assets/03593156-d125-4b19-ac56-9b30aee0de0c" />
<img width="1834" height="924" alt="Screenshot 2025-07-27 190211" src="https://github.com/user-attachments/assets/25df4f12-2d9d-4292-8c04-566086bb7f01" />


