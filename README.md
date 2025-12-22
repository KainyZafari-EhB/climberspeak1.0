# ClimbConnect

A social platform built for the climbing community. Connect with local climbers, discover events, share knowledge in forums, and stay updated with the latest climbing news.

---

##  Features

###  Community Hub
A central space for climbers to connect and share.

- **Forum & Discussions** — Create posts, share tips, ask questions, and engage with the community through comments
- **News Feed** — Curated articles covering local send reports, gym openings, gear reviews, and community updates
- **FAQ Section** — Comprehensive answers to common questions about gear, safety, and climbing etiquette

###  Events System
Find climbing partners and never climb alone.

- **Discover Events** — Browse upcoming meetups, workshops, outdoor trips, and competitions
- **Join & RSVP** — One-click registration to let others know you're attending
- **Create Events** — Host your own sessions, from casual gym meetups to guided outdoor trips
- **Attendee Management** — Track who's joining your events

###  User Profiles
Build your climbing identity.

- **Profile Management** — Customize your bio and climbing preferences
- **Activity History** — View events you've joined or hosted
- **Community Recognition** — Connect with other climbers in your area

###  Admin Dashboard
Site administration tools (admin accounts only).

- **Content Management** — Create, edit, and publish news articles and FAQ items
- **Forum Moderation** — Manage discussions and comments to maintain community standards
- **Event Oversight** — Review and moderate user-created events
- **User Management** — View and manage registered accounts

###  Contact & Support
- **Contact Form** — Reach out to the community organizers with questions or suggestions
- **About Page** — Learn more about ClimbConnect and its mission

---

##  Tech Stack

| Component | Technology |
|-----------|------------|
| **Backend** | Laravel 11.x (PHP 8.2+) |
| **Frontend** | Blade Templates + Tailwind CSS 3.x |
| **Database** | SQLite (default) / MySQL compatible |
| **Build Tools** | Vite, NPM |

---

##  Default Credentials

The database seeder creates test accounts for development:

| Role | Email | Password |
|------|-------|----------|
| **Admin** | `admin@ehb.be` | `Password!321` |
| **Test Users** | 10 randomly generated | `password` |

---

##  Installation

### Prerequisites
- PHP 8.2 or higher
- Composer
- Node.js & NPM

### Setup Steps

1. **Clone the repository**
   ```bash
   git clone https://github.com/KainyZafari-EhB/climberspeak1.0.git
   cd climberspeak1.0
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Create database** (SQLite)
   ```bash
   # Windows PowerShell
   New-Item -Path database/database.sqlite -ItemType File
   
   # Mac/Linux
   touch database/database.sqlite
   ```

5. **Run migrations & seed data**
   ```bash
   php artisan migrate:fresh --seed
   ```

6. **Build assets & start server**
   ```bash
   npm run build
   php artisan serve
   ```

7. **Access the application**  
   Open `http://localhost:8000` in your browser

---

##  Project Structure

```
climberspeak1.0/
├── app/                    # Application logic (Models, Controllers)
├── database/
│   ├── factories/          # Test data factories
│   ├── migrations/         # Database schema
│   └── seeders/            # Demo data seeders
├── public/
│   └── images/
│       ├── backgrounds/    # Page background images (4)
│       └── news/           # News article images (5)
├── resources/
│   ├── css/                # Stylesheets
│   ├── js/                 # JavaScript
│   └── views/              # Blade templates
└── routes/                 # Application routes
```

---
