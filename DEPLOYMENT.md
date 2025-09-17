# 🚀 Tijaniyah Muslim Pro - Deployment Guide

## Quick Start with Railway (Recommended)

### Step 1: Prepare Your App
```bash
# 1. Ensure all changes are committed
git add .
git commit -m "Prepare for deployment"
git push origin main

# 2. Generate application key
php artisan key:generate

# 3. Optimize for production
composer install --optimize-autoloader --no-dev
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Step 2: Deploy to Railway
1. Go to [railway.app](https://railway.app)
2. Sign up with your GitHub account
3. Click "New Project" → "Deploy from GitHub repo"
4. Select your Tijaniyah Muslim Pro repository
5. Railway will auto-detect Laravel and start building

### Step 3: Configure Environment Variables
In Railway dashboard, go to your project → Variables tab and add:

```env
APP_NAME=Tijaniyah Muslim Pro
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app.railway.app

# Database (Railway will provide these)
DB_CONNECTION=pgsql
DB_HOST=your-railway-db-host
DB_PORT=5432
DB_DATABASE=railway
DB_USERNAME=postgres
DB_PASSWORD=your-railway-db-password

# Your API Keys
OPENAI_API_KEY=your-openai-api-key
GOOGLE_MAPS_API_KEY=your-google-maps-api-key
```

### Step 4: Add Database
1. In Railway dashboard, click "New" → "Database" → "PostgreSQL"
2. Railway will automatically connect it to your app
3. The database credentials will be available as environment variables

### Step 5: Run Database Migrations
In Railway dashboard, go to your app → Deployments → View Logs, then run:
```bash
php artisan migrate
php artisan db:seed
```

## Alternative Hosting Options

### 1. Laravel Vapor (Serverless)
```bash
# Install Vapor CLI
composer global require laravel/vapor-cli

# Initialize
vapor init

# Deploy
vapor deploy production
```

### 2. Heroku
```bash
# Install Heroku CLI
# Create Procfile
echo "web: vendor/bin/heroku-php-apache2 public/" > Procfile

# Deploy
git add .
git commit -m "Deploy to Heroku"
git push heroku main
```

### 3. DigitalOcean App Platform
1. Connect GitHub repository
2. Select Laravel framework
3. Configure environment variables
4. Deploy

## Post-Deployment Checklist

### ✅ Test All Features
- [ ] User authentication works
- [ ] Prayer times calculation
- [ ] Qibla direction
- [ ] AI Noor chatbot
- [ ] Admin dashboard
- [ ] All Islamic features

### ✅ Performance Optimization
- [ ] Enable caching
- [ ] Set up CDN for static assets
- [ ] Monitor response times
- [ ] Check database performance

### ✅ Security
- [ ] HTTPS is enabled
- [ ] Environment variables are secure
- [ ] API keys are properly configured
- [ ] No sensitive data in logs

## Troubleshooting

### Common Issues

**500 Internal Server Error:**
```bash
# Check logs
php artisan log:clear
# Check environment variables
php artisan config:clear
```

**Database Connection Issues:**
- Verify database credentials
- Check if database service is running
- Ensure migrations are run

**File Permission Issues:**
```bash
# Set proper permissions
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

### Useful Commands
```bash
# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Check application status
php artisan about

# Optimize for production
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

## Monitoring & Maintenance

### Recommended Tools
- **Error Tracking**: Sentry
- **Performance**: New Relic or DataDog
- **Uptime**: UptimeRobot
- **Logs**: Railway provides built-in logging

### Regular Maintenance
- Monitor error logs
- Check database performance
- Update dependencies regularly
- Backup database regularly
- Monitor API usage and costs

## Cost Estimation

### Railway
- **Free Tier**: $5/month credit
- **Pro Plan**: $20/month
- **Database**: Included

### Heroku
- **Basic**: $7/month
- **Database**: $9/month (PostgreSQL)

### Vapor
- **Pay per use**: ~$10-50/month depending on traffic

## Support

If you encounter any issues:
1. Check the deployment logs
2. Verify environment variables
3. Test locally first
4. Check Laravel documentation
5. Contact support for your hosting provider

---

**Ready to deploy?** Start with Railway for the easiest experience! 🚀
