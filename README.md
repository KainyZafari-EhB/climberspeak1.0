# Climber's Peak 1.0

![Climber's Peak Banner](https://via.placeholder.com/1200x400?text=Climber%27s+Peak+Banner)

**Climber's Peak** is a dynamic social platform tailored for the climbing community. It bridges the gap between climbers, gyms, and local crags, offering a centralized hub for events, news, and connection. Whether you're projecting 5.15s or just bought your first pair of shoes, Climber's Peak helps you find your belay partner and your next adventure.

## 🚀 Features

### 🧗 Community Hub
Stay in the loop with what's happening in your local scene.
-   **Forum & Discussions**: A space for climbers to share tips, ask questions, and comment on threads.
-   **News Feed**: Curated articles on local send reports, gym openings, and gear reviews.
-   **Announcements**: Critical updates on crag access, closures, and community meetings.

### 📅 Events System
Never climb alone again.
-   **Discover Events**: Browse a calendar of upcoming meetups, workshops, and competitions.
-   **Join & RSVP**: One-click RSVP to let others know you're attending.
-   **Create Events**: Authenticated users can host their own events, from casual gym sessions to outdoor trips.
-   **Manage Attendees**: Event organizers can track who is coming.

### 👤 User Profiles
Build your climbing identity.
-   **Profile Management**: Update your bio, climbing style, and preferences.
-   **Activity Tracking**: See a history of the events you've joined or hosted.

### 🛠️ Admin Dashboard
*For site administrators only.*
-   **Content Management**: Create, edit, and delete News articles and FAQ items.
-   **Forum Moderation**: Manage discussions and comments to keep the community safe.
-   **Event Oversight**: Moderate user-created events.
-   **User Management**: View and manage registered users.

### ℹ️ Resources
-   **FAQ Section**: extensive library of common questions about gear, safety, and gym etiquette.
-   **Contact**: Direct line to support or community organizers.

---

## 💻 Technology Stack

-   **Backend**: [Laravel 11.x](https://laravel.com)
-   **Frontend**: [Blade Templates](https://laravel.com/docs/blade) with [Tailwind CSS 3.x](https://tailwindcss.com)
-   **Database**: SQLite (Default) / MySQL (Compatible)
-   **Scripting**: PHP 8.2+

---

## 🔑 Default Credentials

For testing purposes, the database seeder creates a default administrator account:

-   **Email**: `admin@ehb.be`
-   **Password**: `Password!321`

*Note: 10 other random users are also generated with the password `password`.*

---

## ⚙️ Installation Guide

Follow these steps to get a local copy running on your machine.

### Prerequisites
-   PHP 8.2 or higher
-   Composer
-   Node.js & NPM

### Steps

1.  **Clone the Repository**
    ```bash
    git clone https://github.com/KainyZafari-EhB/climberspeak1.0.git
    cd climberspeak1.0
    ```

2.  **Install PHP Dependencies**
    ```bash
    composer install
    ```

3.  **Install Frontend Dependencies**
    ```bash
    npm install
    npm run build
    ```

4.  **Environment Configuration**
    Copy the example environment file:
    ```bash
    cp .env.example .env
    ```
    
    Generate the application key:
    ```bash
    php artisan key:generate
    ```

5.  **Database Setup (SQLite)**
    By default, this project is configured for **SQLite**. You need to create the database file manually if it doesn't represent:
    
    *Windows (PowerShell):*
    ```powershell
    New-Item -Path database/database.sqlite -ItemType File
    ```
    *Linux/Mac:*
    ```bash
    touch database/database.sqlite
    ```

6.  **Run Migrations & Seed Data**
    This command will create the tables and populate them with realistic demo data (News, FAQs, Events):
    ```bash
    php artisan migrate:fresh --seed
    ```

7.  **Serve the Application**
    Start the local development server:
    ```bash
    php artisan serve
    ```
    
    Access the site at: `http://localhost:8000`

---
