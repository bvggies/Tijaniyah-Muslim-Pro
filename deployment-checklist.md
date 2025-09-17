# Tijaniyah Muslim Pro - Deployment Checklist

## Pre-Deployment Setup

### 1. Environment Configuration
- [ ] Copy `.env.example` to `.env`
- [ ] Set `APP_ENV=production`
- [ ] Set `APP_DEBUG=false`
- [ ] Generate application key: `php artisan key:generate`
- [ ] Configure database credentials
- [ ] Set up OpenAI API key
- [ ] Configure Google Maps API key

### 2. Database Setup
- [ ] Run migrations: `php artisan migrate`
- [ ] Seed initial data: `php artisan db:seed`
- [ ] Set up database indexes

### 3. File Storage
- [ ] Configure file storage (local/s3)
- [ ] Set up file permissions
- [ ] Upload any required assets

### 4. Security
- [ ] Enable HTTPS
- [ ] Configure CORS if needed
- [ ] Set up rate limiting
- [ ] Review security headers

### 5. Performance
- [ ] Enable caching: `php artisan config:cache`
- [ ] Optimize autoloader: `composer install --optimize-autoloader --no-dev`
- [ ] Set up queue workers for background jobs
- [ ] Configure CDN for static assets

## Railway Deployment Steps

### 1. Prepare Repository
```bash
# Ensure all files are committed
git add .
git commit -m "Prepare for deployment"
git push origin main
```

### 2. Railway Setup
1. Go to https://railway.app
2. Sign up with GitHub
3. Click "New Project"
4. Select "Deploy from GitHub repo"
5. Choose your Tijaniyah Muslim Pro repository

### 3. Environment Variables
Set these in Railway dashboard:
```
APP_NAME="Tijaniyah Muslim Pro"
APP_ENV=production
APP_KEY=base64:your-generated-key
APP_DEBUG=false
APP_URL=https://your-app.railway.app

DB_CONNECTION=pgsql
DB_HOST=your-railway-db-host
DB_PORT=5432
DB_DATABASE=railway
DB_USERNAME=postgres
DB_PASSWORD=your-railway-db-password

OPENAI_API_KEY=your-openai-key
GOOGLE_MAPS_API_KEY=your-google-maps-key
```

### 4. Database Setup
1. Add PostgreSQL service in Railway
2. Connect to database
3. Run migrations: `php artisan migrate`
4. Seed data: `php artisan db:seed`

### 5. Custom Domain (Optional)
1. Add custom domain in Railway
2. Update DNS records
3. Update APP_URL in environment variables

## Post-Deployment

### 1. Test All Features
- [ ] User authentication
- [ ] Prayer times calculation
- [ ] Qibla direction
- [ ] AI Noor chatbot
- [ ] Admin dashboard
- [ ] All Islamic features

### 2. Performance Monitoring
- [ ] Set up error tracking (Sentry)
- [ ] Monitor response times
- [ ] Check database performance
- [ ] Monitor API usage

### 3. Backup Strategy
- [ ] Set up database backups
- [ ] Backup file uploads
- [ ] Test restore procedures

## Troubleshooting

### Common Issues
1. **500 Errors**: Check logs, verify environment variables
2. **Database Connection**: Verify DB credentials
3. **File Permissions**: Check storage directory permissions
4. **API Keys**: Verify all external API keys are set

### Useful Commands
```bash
# Check application status
php artisan about

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```
