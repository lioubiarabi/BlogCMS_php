# 📝 BlogCMS — PHP Backend & Admin Dashboard

> Full-stack blog CMS built with procedural PHP — role-based authentication, admin dashboard, complete CRUD for articles, categories & comments, and XSS/SQL injection protection.

![PHP](https://img.shields.io/badge/PHP%208-777BB4?style=flat-square&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=flat-square&logo=mysql&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/TailwindCSS-06B6D4?style=flat-square&logo=tailwindcss&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=flat-square&logo=javascript&logoColor=black)

---

## 📄 Pages

| Page | Description |
|---|---|
| 🏠 **Home** (`index.php`) | Landing page with latest published posts |
| 📰 **Blog** (`blog.php`) | All published articles with search & pagination |
| 📂 **Categories** (`categories.php`) | Browse posts by category |
| 📝 **Single Post** (`singleblog.php`) | Full article view with comments section |
| ℹ️ **About** (`about.php`) | About page |
| 📬 **Contact** (`contact.php`) | Contact form |
| 🔐 **Admin Panel** (`admin/`) | Full admin dashboard — protected by role |

---

## ✨ Features

### 🔐 Authentication & Roles
- Secure login with PHP sessions
- Role-based access control: **Admin**, **Editor**, **User**, **Visitor**
- Passwords hashed with `bcrypt`
- Session protection against unauthorized access

### 📊 Admin Dashboard
- Statistics overview (posts, users, comments)
- Full **CRUD for articles** — create, edit, delete, publish/draft
- Full **CRUD for categories**
- **Comment moderation** — approve or delete
- **User management** — view, edit roles, delete

### ✍️ Author Features
- View all published posts
- Create, edit and delete own articles
- Post comments on articles

### 👁️ Visitor Features
- Browse all published articles
- Filter by category
- Post comments

### 🛡️ Security
- PDO with prepared statements (SQL injection protection)
- `htmlspecialchars()` for XSS protection
- Form validation on both client and server side
- Secure PHP sessions

### ➕ Bonus
- Image upload for articles
- Article search
- Pagination on article lists

---

## 🛠 Tech Stack

| Technology | Usage |
|---|---|
| PHP 8 (procedural) | Backend logic, routing, session management |
| MySQL + PDO | Database with prepared statements |
| TailwindCSS | Responsive UI styling |
| JavaScript | Dynamic interactions, form validation |
| HTML5 / CSS3 | Page structure and custom styles |

---

## 📁 Project Structure

```
BlogCMS_php/
├── index.php           # Home page
├── blog.php            # All posts
├── singleblog.php      # Single post + comments
├── categories.php      # Categories list
├── category.php        # Posts by category
├── about.php           # About page
├── contact.php         # Contact form
├── config.php          # DB connection (PDO)
├── admin/              # Admin dashboard (protected)
├── css/                # Custom stylesheets
├── js/                 # JavaScript files
└── images/             # Uploaded images
```

---

## 🚀 Getting Started

```bash
git clone https://github.com/lioubiarabi/BlogCMS_php.git
cd BlogCMS_php
```

1. Import the database from [BlogCMS_sql](https://github.com/lioubiarabi/BlogCMS_sql)
2. Configure your DB credentials in `config.php`
3. Serve with XAMPP/WAMP or any PHP local server
4. Open `http://localhost/BlogCMS_php`

---

## 🎯 Project Context

Built as part of the **[2023] Développeur Web et Web Mobile** curriculum at **Youcode**.

The brief: build the backend and admin dashboard for the BlogCMS database designed in Brief 6 — using procedural PHP with full CRUD, role-based access, and security best practices.

**Duration:** 5 days (Nov 30 — Dec 18, 2025)

> 🔗 Trello planning: [trello.com/b/AoX6pYlp/blogcms](https://trello.com/b/AoX6pYlp/blogcms)

---

## 💡 What I Learned

- Building a full PHP backend with procedural architecture
- Implementing role-based authentication with PHP sessions
- Securing database queries with PDO and prepared statements
- Protecting against XSS with `htmlspecialchars()`
- Structuring a multi-page PHP application cleanly
- Managing file uploads and image handling in PHP

---

## 👤 Author

**Lioubi Arabi** — Youcode Web Development Student  
[![GitHub](https://img.shields.io/badge/GitHub-lioubiarabi-181717?style=flat-square&logo=github)](https://github.com/lioubiarabi)

---

*Backend development — making data come alive through clean, secure PHP 📝*
