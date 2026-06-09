
Movie & Series Catalog Web Application
Overview

A web application built with Laravel 12 that allows users to browse movies and TV series, create accounts, manage favorites, and provides administrators with content management capabilities.

Features
User Features
User registration and login
Secure authentication system
Browse movies and TV series
Personalized favorites list
Home page with randomly recommended content
Responsive content catalog
Admin Features
Admin-only dashboard
Create new content entries
Edit existing content
Delete content
Content management system with role-based access control
Content Management
Movie catalog
TV series catalog
Genre categorization
Image support for content items
Random content recommendations
Technologies Used
Backend: Laravel 12
Language: PHP 8.2+
Database: MySQL / SQLite
Frontend: Blade Templates
Authentication: Laravel Auth
Containerization: Docker Compose
Project Structure
app/
├── Http/
│   ├── Controllers/
│   └── Middleware/
├── Models/
├── resources/
├── routes/
└── database/
Installation
Prerequisites
PHP 8.2+
Composer
Node.js & NPM
Database (MySQL or SQLite)

Docker Deployment

The project includes an automated deployment script (run.sh) that:

Installs Docker (if missing)
Installs Docker Compose
Clones the project repository
Generates the Laravel .env configuration
Starts application containers
Installs Composer dependencies
Runs database migrations
Seeds initial data
Quick Start
chmod +x run.sh
./run.sh

Available Routes
Authentication
/signup
/login
/logout
User Pages
/home
/movies
/series
/favorites
Admin Pages
/admin
/admin/create
/admin/edit/{id}
Database Models
User
Username
Email
Password
Role
Content
Title
Image URL
Type (Movie/Series)
Genre
Favorite
User ID
Content ID
Security Features
Authentication middleware
Admin authorization middleware
Form validation
Password hashing
Protected routes
