# 🚀 Complete Heroku Deployment Guide for Tijaniyah Muslim Pro

## Prerequisites
- GitHub account
- Heroku account (free at heroku.com)
- Your OpenAI API key
- Your Google Maps API key

---

## Step 1: Prepare Your Local Project

### 1.1 Verify Heroku CLI Installation
```bash
heroku --version
```

### 1.2 Create Heroku Configuration
The `Procfile` has been created with the correct configuration for Laravel.

---

## Step 2: Deploy to Heroku

### 2.1 Login to Heroku
```bash
heroku login
```

### 2.2 Create Heroku App
```bash
# Create Heroku app
heroku create tijaniyah-muslim-pro

# Add PostgreSQL database
heroku addons:create heroku-postgresql:mini
```

### 2.3 Deploy Your App
```bash
# Deploy to Heroku
git push heroku main
```

---

## Step 3: Configure Environment Variables

### 3.1 Access Heroku Dashboard
1. Go to [dashboard.heroku.com](https://dashboard.heroku.com)
2. Click on your app
3. Go to "Settings" → "Config Vars"

### 3.2 Add Required Variables
Click "Reveal Config Vars" and add each of these:

```env
APP_NAME=Tijaniyah Muslim Pro
APP_ENV=production
APP_DEBUG=false
APP_URL=https://tijaniyah-muslim-pro.herokuapp.com

# Database (Heroku will provide this automatically)
DB_CONNECTION=pgsql

# Cache and Session
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_CONNECTION=sync

# Your API Keys
OPENAI_API_KEY=your-openai-api-key-here
GOOGLE_MAPS_API_KEY=your-google-maps-api-key-here

# Mail
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=hello@tijaniyahmuslimpro.com
MAIL_FROM_NAME=Tijaniyah Muslim Pro
```

---

## Step 4: Run Database Migrations

### 4.1 Access Heroku Console
```bash
heroku run php artisan migrate
```

### 4.2 Seed Database (Optional)
```bash
heroku run php artisan db:seed
```

---

## Step 5: Test Your Deployment

### 5.1 Check Your App
1. Visit your app URL: `https://tijaniyah-muslim-pro.herokuapp.com`
2. Test the main features:
   - ✅ Homepage loads
   - ✅ User registration/login
   - ✅ Prayer times
   - ✅ Qibla direction
   - ✅ AI Noor chatbot
   - ✅ Admin dashboard

### 5.2 Health Check
Visit: `https://tijaniyah-muslim-pro.herokuapp.com/health`

---

## Step 6: Custom Domain (Optional)

### 6.1 Add Custom Domain
1. In Heroku dashboard → Your app
2. Go to "Settings" → "Domains"
3. Add your custom domain
4. Update DNS records as instructed

### 6.2 Update APP_URL
Update the `APP_URL` environment variable to your custom domain.

---

## Step 7: Production Optimization

### 7.1 Enable Caching
In Heroku dashboard → Settings → Config Vars:
```env
CACHE_DRIVER=redis
SESSION_DRIVER=redis
```

### 7.2 Add Redis (Optional)
```bash
heroku addons:create heroku-redis:mini
```

---

## Step 8: Final Checklist

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
- Check Heroku logs: `heroku logs --tail`
- Verify environment variables
- Check database connection

**Slow Performance:**
- Enable caching
- Optimize database queries
- Check for memory leaks

### Useful Commands

```bash
# Check app status
heroku ps

# View logs
heroku logs --tail

# Access console
heroku run bash

# Restart app
heroku restart

# Check environment variables
heroku config
```

---

## Cost Information

### Heroku Pricing
- **Free Tier**: $0/month (limited hours, sleeps after 30 min)
- **Basic**: $7/month (always-on, 512MB RAM)
- **Standard**: $25/month (better performance, 1GB RAM)
- **Database**: $0-5/month (depending on plan)

### Estimated Monthly Cost
- **Small app**: $7-12 (Basic plan)
- **Medium app**: $25-35 (Standard plan)
- **Large app**: $50-100+ (Professional plan)

---

## Support

If you encounter issues:
1. Check Heroku documentation
2. Check Laravel documentation
3. Check Heroku community forums
4. Check your app logs: `heroku logs --tail`

---

## 🎉 Congratulations!

Your Tijaniyah Muslim Pro app is now live on Heroku! 

**Your app URL**: `https://tijaniyah-muslim-pro.herokuapp.com`

Share it with the world and help Muslims around the globe with their daily Islamic needs! 🌍🤲
