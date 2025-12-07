# Climber's Peak 1.0

Climber's Peak is a social platform designed for climbers to connect, share experiences, and join climbing events. Whether you are a beginner or a pro, Climber's Peak helps you stay engaged with the climbing community, local or international.

## Features

-   **Community Hub**: Stay updated with the latest news and announcements.
-   **Events System**:
    -   View upcoming climbing events.
    -   Join events and see who else is attending.
    -   Create and manage your own events (Authenticated users).
-   **User Profiles**: Manage your personal climbing profile and track your joined events.
-   **Admin Dashboard**: comprehensive tools for administrators to manage news, FAQs, events, and users.
-   **Information**: Easy access to FAQs and contact information.

## Technology Stack

-   **Framework**: [Laravel](https://laravel.com)
-   **Styling**: [Tailwind CSS](https://tailwindcss.com)
-   **Database**: SQLite

## Installation

1.  **Clone the repository**
    ```bash
    git clone https://github.com/KainyZafari-EhB/climberspeak1.0.git
    cd climberspeak1.0
    ```

2.  **Install PHP dependencies**
    ```bash
    composer install
    ```

3.  **Install NPM dependencies**
    ```bash
    npm install
    npm run build
    ```

4.  **Environment Setup**
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    *Configure your database settings in the `.env` file.*

5.  **Run Migrations**
    ```bash
    php artisan migrate
    ```

6.  **Serve the Application**
    ```bash
    php artisan serve
    ```
