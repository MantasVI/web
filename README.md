# League of Legends Information Portal

## Overview

A Laravel-based web application that provides League of Legends players with access to champion information, skins, items, and runes using Riot Games' Data Dragon API. The platform includes user authentication and dynamic content retrieval from external APIs.

## Features

### User Features

* User registration and login
* Secure authentication system
* Browse League of Legends champions
* View champion details and statistics
* Explore champion skins
* Browse in-game items
* View rune information and descriptions

### API Integration

* Real-time data retrieval from Riot Data Dragon API
* Champion data synchronization
* Item database integration
* Rune information retrieval
* Dynamic skin catalog generation

### Content Sections

* Champions
* Champion Details
* Skins
* Items
* Runes

## Technologies Used

* Backend: Laravel 12
* Language: PHP 8.2+
* Frontend: Blade Templates
* Authentication: Laravel Auth
* API Integration: Riot Games Data Dragon API
* Database: MySQL / SQLite

## Installation

### Prerequisites

* PHP 8.2+
* Composer
* Node.js & NPM
* MySQL or SQLite

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

## Available Routes

### Authentication

* /Sign
* /Login
* /Logout

### League Content

* /Champions
* /Champion/{id}
* /Skins
* /Skin/{name}
* /Items
* /Runes
* /Rune/{name}

## Security Features

* Password hashing
* Form validation
* Session-based authentication
* CSRF protection
* Secure login/logout workflow

## Architecture

The application follows Laravel's MVC architecture:

* Controllers handle API communication and business logic
* Models manage application data
* Blade templates render dynamic views
* Routes map user requests to controllers

## External API

The application integrates with Riot Games Data Dragon API to retrieve:

* Champion information
* Champion skins
* Item data
* Rune configurations

