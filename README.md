# Laravel Dynamic Form Builder

A modern, open-source Laravel application for building dynamic forms, inspired by Google Forms. Admins can create forms, and users can fill them via shareable links. Built with Laravel 12, Tailwind CSS, and Alpine.js for a beautiful, responsive UI.

## Features
- **Admin Panel:** Create, edit, and manage dynamic forms and fields
- **User Access:** Share forms via unique links for users to fill out
- **Authentication:** Secure login/register for admins and users
- **Dashboard:** Overview of forms and submissions
- **Modern UI:** Built with Tailwind CSS and Alpine.js
- **Extensible:** Clean architecture for easy customization

## Project Structure

```
app/
   Http/
      Controllers/         # Route controllers (auth, dashboard, forms, etc.)
      Requests/            # Form Request classes for validation/authorization
   Models/                # Eloquent models (User, Form, Field, Submission, etc.)
   Policies/              # Authorization policies
   Providers/             # Service providers
   Repositories/
      Contracts/           # Repository interfaces
      Eloquent/            # Eloquent repository implementations
   Services/              # Business logic services
      Auth/                # Auth-related services
      ...                  # Other domain services
   Events/                # Domain events (for notifications, etc.)
   Notifications/         # Notification classes
   Jobs/                  # Queue jobs for async processing
   View/Components/       # Blade components
config/                  # App configuration
resources/
   views/                 # Blade templates (auth, dashboard, forms, etc.)
routes/
   web.php                # Web routes
database/
   migrations/            # Database schema
   seeders/               # Seed data
public/                  # Entry point and assets
tests/                   # Feature and unit tests
```

## Getting Started

### Prerequisites
- PHP >= 8.2
- Composer
- Node.js & npm
- A database (MySQL, SQLite, etc.)

### Installation
1. **Clone the repository:**
   ```bash
   git clone https://github.com/yourusername/laravel-dynamic-form-tailwind.git
   cd laravel-dynamic-form-tailwind
   ```
2. **Install PHP dependencies:**
   ```bash
   composer install
   ```
3. **Install JS dependencies:**
   ```bash
   npm install
   ```
4. **Copy and configure environment:**
   ```bash
   cp .env.example .env
   # Edit .env for your DB and mail settings
   php artisan key:generate
   ```
5. **Run migrations:**
   ```bash
   php artisan migrate
   ```
6. **Build assets:**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```
7. **Start the server:**
   ```bash
   php artisan serve
   ```

## Usage
- Visit `/register` to create an admin account
- Log in and access the dashboard
- Create forms and share links with users
- Users fill forms via the provided links

## Tech Stack
- **Backend:** Laravel 12
- **Frontend:** Blade, Tailwind CSS, Alpine.js, Vite
- **Testing:** PestPHP

## Contributing
Pull requests are welcome! For major changes, please open an issue first to discuss what you would like to change.

## License
[MIT](LICENSE)

---

*Happy form building!*