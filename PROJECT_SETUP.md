# Dimgent Technologies Website - Setup Guide

## ✅ Project Status
The website has been successfully developed and is ready to use!

## 🎨 Features Implemented

### Frontend Stack
- **Tailwind CSS v4** - Modern utility-first CSS framework (as a module)
- **Alpine.js** - Lightweight JavaScript for interactivity (as a module)
- **Vite** - Fast build tool for modern web development

### Pages Created
1. **Home** - Company overview, featured product, development areas
2. **Products** - Garand 101 magnetometer-gradiometer with photo gallery
3. **Services** - Complete service offerings and advantages
4. **Projects** - Showcase of completed project categories
5. **Contacts** - Contact form and company information
6. **About** - Company history, expertise, and philosophy

### Design Features
- Modern, responsive design
- Mobile-friendly navigation with Alpine.js
- Professional color scheme (blue gradient)
- Interactive image gallery on Products page
- Smooth transitions and hover effects
- Clean typography using Instrument Sans font

## 📁 Project Structure

```
resources/
├── views/
│   ├── layouts/
│   │   └── app.blade.php          # Main layout with navigation & footer
│   ├── home.blade.php             # Home page
│   ├── products.blade.php         # Products page
│   ├── services.blade.php         # Services page
│   ├── projects.blade.php         # Projects page
│   ├── contacts.blade.php         # Contacts page
│   └── about.blade.php            # About page
├── css/
│   └── app.css                    # Tailwind CSS configuration
└── js/
    └── app.js                     # Alpine.js setup

public/
└── images/
    ├── logo.png                   # Company logo
    └── products/                  # Garand 101 product images

routes/
└── web.php                        # All page routes configured
```

## 🚀 How to Run the Website

### Option 1: Using PHP's Built-in Server
```bash
php artisan serve
```
Then visit: http://127.0.0.1:8000

### Option 2: Using Laragon/XAMPP/WAMP
1. Configure your virtual host to point to the `public` directory
2. Access via your configured domain (e.g., http://laravel_dimgent_com.test)

### Option 3: Development with Hot Reload
For development with Vite hot module replacement:
```bash
# Terminal 1 - Start Laravel server
php artisan serve

# Terminal 2 - Start Vite dev server
npm run dev
```

## 🛠️ Build Commands

### Development
```bash
npm run dev
```
Starts Vite development server with hot module replacement.

### Production
```bash
npm run build
```
Builds optimized assets for production (already done).

## 📸 Assets Information

All images have been copied from `drafts/pics/` to `public/images/`:
- Company logo: `public/images/logo.png`
- Product images: `public/images/products/` (9 Garand 101 images)

## 🎯 Content Source

All content was sourced from:
- `drafts/content/home_page_content.txt`
- `drafts/content/products_page_content.txt`
- `drafts/content/services_page_content.txt`
- `drafts/content/projects_page_content.txt`
- `drafts/content/contacts_page_content.txt`
- `drafts/content/about_us_page_content.txt`

## 🌐 Website Pages & Routes

| Page     | URL         | Route Name  |
|----------|-------------|-------------|
| Home     | /           | home        |
| Products | /products   | products    |
| Services | /services   | services    |
| Projects | /projects   | projects    |
| Contacts | /contacts   | contacts    |
| About    | /about      | about       |

## ⚙️ Technical Details

### Tailwind CSS v4
- Configured via `@tailwindcss/vite` plugin in `vite.config.js`
- Using `@source` directives in `app.css` for content scanning
- Custom font: Instrument Sans
- Production build includes purged CSS for optimal performance

### Alpine.js
- Imported as ES module in `app.js`
- Used for mobile menu toggle
- Used for product image gallery on Products page

## 🎨 Design Highlights

- **Color Scheme**: Blue gradient theme (#3B82F6 to #1E40AF)
- **Typography**: Instrument Sans for headings and body text
- **Responsive**: Mobile-first design, works on all screen sizes
- **Interactive Elements**:
  - Mobile menu with slide-in animation
  - Product image gallery with thumbnail selection
  - Hover effects on cards and buttons
  - Smooth transitions throughout

## 📝 Notes

- The contact form is currently a static form (no backend processing configured)
- Node.js version warning can be ignored if the build works correctly
- All routes use named routes for easy URL management
- Images are optimized but may need further compression for production

## 🎉 Ready to Deploy

The website is production-ready. You can deploy it to:
- Shared hosting (upload files, point to public directory)
- VPS/Cloud servers (Laravel Forge, DigitalOcean, AWS, etc.)
- Platform-as-a-Service (Laravel Vapor, Heroku, etc.)

---

**Developed for Dimgent Technologies - Electronics Development**
