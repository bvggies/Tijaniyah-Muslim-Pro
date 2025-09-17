# Tijaniyah Muslim Pro

A production-ready Muslim/Islamic web application built with Laravel 11 and Filament Admin v4.

## Features

- **Prayer Times**: Accurate prayer time calculations with caching
- **Quran**: Complete Quran with Arabic text, translation, and transliteration
- **Daily Adhkār**: Rotating daily Islamic quotes and remembrances
- **Sermons & Lessons**: Audio/video content management with S3 storage
- **Community Forum**: Discussion platform with posts and replies
- **Donations & Campaigns**: Paystack integration for fundraising
- **Admin Dashboard**: Comprehensive Filament admin panel

## Tech Stack

- **Backend**: Laravel 11 + PHP 8.3
- **Frontend**: Blade + Tailwind CSS
- **Admin Panel**: Filament v4
- **Authentication**: Laravel Breeze + Socialite (Google)
- **RBAC**: Spatie Laravel Permission
- **Database**: MySQL/PostgreSQL
- **Cache/Queue**: Redis + Horizon
- **Storage**: S3/Wasabi
- **Payments**: Paystack
- **Mail**: SES/Mailgun/Resend
- **Testing**: Pest (when compatible)

## Installation

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd tijaniyahmuslimpro
   ```

2. **Install dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configure database**
   Update `.env` with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=tijaniyah_muslim_pro
   DB_USERNAME=root
   DB_PASSWORD=your_password
   ```

5. **Run migrations and seeders**
   ```bash
   php artisan migrate --seed
   ```

6. **Build assets**
   ```bash
   npm run build
   ```

7. **Start the application**
   ```bash
   php artisan serve
   ```

## Configuration

### Paystack Setup
1. Get your API keys from [Paystack Dashboard](https://dashboard.paystack.com)
2. Update `.env`:
   ```env
   PAYSTACK_PUBLIC_KEY=pk_test_your_public_key
   PAYSTACK_SECRET_KEY=sk_test_your_secret_key
   PAYSTACK_WEBHOOK_SECRET=your_webhook_secret
   ```

### Google OAuth Setup
1. Create a project in [Google Cloud Console](https://console.cloud.google.com)
2. Enable Google+ API
3. Create OAuth 2.0 credentials
4. Update `.env`:
   ```env
   GOOGLE_CLIENT_ID=your_google_client_id
   GOOGLE_CLIENT_SECRET=your_google_client_secret
   GOOGLE_REDIRECT_URI=http://localhost/auth/google/callback
   ```

### AWS S3 Setup
1. Create an S3 bucket
2. Generate access keys
3. Update `.env`:
   ```env
   AWS_ACCESS_KEY_ID=your_access_key
   AWS_SECRET_ACCESS_KEY=your_secret_key
   AWS_DEFAULT_REGION=us-east-1
   AWS_BUCKET=your_bucket_name
   ```

## Admin Access

After running migrations and seeders, you can access the admin panel at `/admin` with:
- **Email**: admin@tijaniyahmuslimpro.com
- **Password**: password

## API Endpoints

### Prayer Times
- `POST /api/prayer/compute` - Calculate prayer times for a specific day
- `GET /api/prayer/week` - Get prayer times for a week

### Donations
- `POST /api/donations/paystack/initialize` - Initialize a donation
- `POST /api/donations/paystack/webhook` - Paystack webhook
- `POST /api/donations/verify` - Verify a donation

## Deployment

### Laravel Forge
1. Create a new site
2. Set up database (MySQL/PostgreSQL)
3. Configure Redis for cache and queues
4. Set up S3 for file storage
5. Configure environment variables
6. Deploy using Git

### Laravel Vapor
1. Install Vapor CLI: `composer global require laravel/vapor-cli`
2. Initialize: `vapor init`
3. Configure `vapor.yml`
4. Deploy: `vapor deploy production`

## Queue Configuration

For production, set up queue workers:
```bash
php artisan horizon
```

Or use supervisor for queue workers:
```ini
[program:laravel-worker]
process_name=%(program_name)s_%(process_num)02d
command=php /path/to/artisan queue:work redis --sleep=3 --tries=3 --max-time=3600
autostart=true
autorestart=true
stopasgroup=true
killasgroup=true
user=www-data
numprocs=8
redirect_stderr=true
stdout_logfile=/path/to/worker.log
stopwaitsecs=3600
```

## Cron Jobs

Add to your crontab:
```bash
* * * * * cd /path/to/project && php artisan schedule:run >> /dev/null 2>&1
```

## License

This project is licensed under the MIT License.

## Support

For support and questions, please contact the development team.