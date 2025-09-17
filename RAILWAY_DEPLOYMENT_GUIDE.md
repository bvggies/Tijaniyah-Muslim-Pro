# 🚀 Complete Railway Deployment Guide for Tijaniyah Muslim Pro

## Prerequisites
- GitHub account
- Railway account (free at railway.app)
- Your OpenAI API key
- Your Google Maps API key

---

## Step 1: Prepare Your Local Project

### 1.1 Initialize Git Repository
```bash
git init
git add .
git commit -m "Initial commit - Tijaniyah Muslim Pro"
```

### 1.2 Create .gitignore (if not exists)
```bash
# Create .gitignore file
echo "node_modules/
vendor/
.env
.env.local
.env.production
.env.staging
storage/logs/*
storage/framework/cache/*
storage/framework/sessions/*
storage/framework/views/*
bootstrap/cache/*
.phpunit.result.cache
Homestead.json
Homestead.yaml
npm-debug.log
yarn-error.log
/public/hot
/public/storage
/storage/*.key
/vendor
.env.backup
.phpunit.result.cache
Homestead.json
Homestead.yaml
auth.json
" > .gitignore
```

### 1.3 Optimize for Production
```bash
# Generate application key
php artisan key:generate

# Optimize composer
composer install --optimize-autoloader --no-dev --ignore-platform-req=ext-intl

# Clear and cache configurations
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan cache:clear
```

---

## Step 2: Push to GitHub

### 2.1 Create GitHub Repository
1. Go to [github.com](https://github.com)
2. Click "New repository"
3. Name it: `tijaniyah-muslim-pro`
4. Make it **Public** (required for Railway free tier)
5. Don't initialize with README (we already have files)

### 2.2 Push Your Code
```bash
# Add GitHub remote (replace YOUR_USERNAME with your GitHub username)
git remote add origin https://github.com/YOUR_USERNAME/tijaniyah-muslim-pro.git

# Push to GitHub
git branch -M main
git push -u origin main
```

---

## Step 3: Deploy to Railway

### 3.1 Create Railway Account
1. Go to [railway.app](https://railway.app)
2. Click "Start a New Project"
3. Sign up with GitHub
4. Authorize Railway to access your repositories

### 3.2 Deploy Your App
1. Click "New Project"
2. Select "Deploy from GitHub repo"
3. Find and select `tijaniyah-muslim-pro`
4. Railway will automatically detect it's a Laravel app
5. Click "Deploy Now"

### 3.3 Wait for Build
- Railway will automatically:
  - Detect Laravel framework
  - Install PHP dependencies
  - Build your application
  - This takes 2-5 minutes

---

## Step 4: Configure Environment Variables

### 4.1 Access Project Settings
1. In Railway dashboard, click on your project
2. Click on your app service (not database)
3. Go to "Variables" tab

### 4.2 Add Required Variables
Click "New Variable" and add each of these:

```env
APP_NAME=Tijaniyah Muslim Pro
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-app-name.railway.app

# Database (we'll add this after creating database)
DB_CONNECTION=pgsql

# Your API Keys
OPENAI_API_KEY=your-openai-api-key-here
GOOGLE_MAPS_API_KEY=your-google-maps-api-key-here

# Cache and Session
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync

# Mail (optional)
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=hello@tijaniyahmuslimpro.com
MAIL_FROM_NAME="Tijaniyah Muslim Pro"
```

---

## Step 5: Add Database

### 5.1 Create PostgreSQL Database
1. In your Railway project dashboard
2. Click "New" → "Database" → "PostgreSQL"
3. Railway will create a new PostgreSQL database
4. It will automatically connect to your app

### 5.2 Get Database Credentials
1. Click on the database service
2. Go to "Variables" tab
3. Copy these values:
   - `PGHOST`
   - `PGPORT`
   - `PGDATABASE`
   - `PGUSER`
   - `PGPASSWORD`

### 5.3 Update App Environment Variables
Go back to your app service → Variables and add:

```env
DB_HOST=your-pghost-value
DB_PORT=your-pgport-value
DB_DATABASE=your-pgdatabase-value
DB_USERNAME=your-pguser-value
DB_PASSWORD=your-pgpassword-value
```

---

## Step 6: Run Database Migrations

### 6.1 Access Railway Console
1. In your app service
2. Go to "Deployments" tab
3. Click on the latest deployment
4. Click "View Logs"
5. Click "Open Console"

### 6.2 Run Migrations
In the console, run:
```bash
php artisan migrate
php artisan db:seed
```

---

## Step 7: Test Your Deployment

### 7.1 Check Your App
1. Go to your app URL (provided by Railway)
2. Test the main features:
   - Homepage loads
   - User registration/login
   - Prayer times
   - Qibla direction
   - AI Noor chatbot
   - Admin dashboard

### 7.2 Common Issues & Solutions

**If you get 500 errors:**
```bash
# In Railway console, run:
php artisan config:clear
php artisan cache:clear
php artisan view:clear
```

**If database connection fails:**
- Check environment variables are correct
- Ensure database service is running
- Verify database credentials

**If static assets don't load:**
```bash
# In Railway console, run:
php artisan storage:link
```

---

## Step 8: Custom Domain (Optional)

### 8.1 Add Custom Domain
1. In Railway dashboard
2. Go to your app service
3. Click "Settings" → "Domains"
4. Add your custom domain
5. Update DNS records as instructed

### 8.2 Update APP_URL
Update the `APP_URL` environment variable to your custom domain.

---

## Step 9: Production Optimization

### 9.1 Enable Caching
In Railway console:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 9.2 Set Up Monitoring
1. Enable Railway's built-in monitoring
2. Set up error tracking (optional)
3. Monitor database performance

---

## Step 10: Final Checklist

### ✅ Verify Everything Works
- [ ] App loads without errors
- [ ] User authentication works
- [ ] Prayer times calculate correctly
- [ ] Qibla direction works
- [ ] AI Noor responds
- [ ] Admin dashboard accessible
- [ ] All Islamic features functional

### ✅ Security Check
- [ ] Environment variables are secure
- [ ] No sensitive data in logs
- [ ] HTTPS is enabled
- [ ] Database is properly configured

### ✅ Performance Check
- [ ] Page load times are acceptable
- [ ] Database queries are optimized
- [ ] Static assets load quickly
- [ ] No memory leaks

---

## Troubleshooting

### Common Issues

**Build Fails:**
- Check PHP version compatibility
- Ensure all dependencies are in composer.json
- Check for syntax errors

**App Crashes:**
- Check logs in Railway dashboard
- Verify environment variables
- Check database connection

**Slow Performance:**
- Enable caching
- Optimize database queries
- Check for memory leaks

### Useful Commands

```bash
# Check app status
php artisan about

# Clear all caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Check logs
tail -f storage/logs/laravel.log

# Restart app
# In Railway dashboard, click "Restart"
```

---

## Cost Information

### Railway Pricing
- **Free Tier**: $5/month credit (usually enough for small apps)
- **Pro Plan**: $20/month (unlimited usage)
- **Database**: Included in both plans

### Estimated Monthly Cost
- **Small app**: $0-5 (free tier)
- **Medium app**: $10-20
- **Large app**: $20-50

---

## Support

If you encounter issues:
1. Check Railway documentation
2. Check Laravel documentation
3. Check Railway community forums
4. Check your app logs in Railway dashboard

---

## 🎉 Congratulations!

Your Tijaniyah Muslim Pro app is now live on Railway! 

**Your app URL**: `https://your-app-name.railway.app`

Share it with the world and help Muslims around the globe with their daily Islamic needs! 🌍🤲
