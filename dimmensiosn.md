# CT Group Landing Page - Image Dimensions Guide

## 📐 Complete Image Specifications for All Components

### 🎯 **Hero Banner Section** (`hero-banner.php`)

#### Desktop Hero Images
- **Primary Size:** `1920x1080px` (16:9 aspect ratio)
- **Format:** JPG/WebP
- **Quality:** 85-90%
- **File Size:** Max 800KB

#### Responsive Breakpoints
```
Desktop (1920px+):    1920x1080px
Large Laptop (1440px): 1440x810px  
Laptop (1200px):      1200x675px
Tablet (768px):       768x432px
Mobile (375px):       375x667px (Portrait)
```

#### Required Files
- `shahpur-hero.jpg` - 1920x1080px
- `maqsudan-hero.jpg` - 1920x1080px

---

### 🏫 **Campus Section** (`campus-section.php`)

#### Campus Card Images
- **Desktop:** `500x280px` (16:9 aspect ratio)
- **Format:** JPG/WebP
- **Quality:** 80-85%
- **File Size:** Max 300KB

#### Responsive Sizes
```
Desktop (1200px+):    500x280px
Tablet (768px):       450x253px
Mobile (480px):       375x211px
Small Mobile (320px): 320x180px
```

#### Required Files
- `assets/images/campuses/shahpur.jpg` - 500x280px
- `assets/images/campuses/maqsudan.jpg` - 500x280px

---

### 🏛️ **Institutions Section** (`institutions.php`)

#### Institution Card Images
- **Desktop:** `400x250px` (8:5 aspect ratio)
- **Format:** JPG/WebP
- **Quality:** 80-85%
- **File Size:** Max 250KB

#### Responsive Sizes
```
Desktop (1200px+):    400x250px
Laptop (992px):       350x219px
Tablet (768px):       320x200px
Mobile (480px):       300x188px
```

#### Required Files
- `ct-university.jpg` - 400x250px
- `ct-world-school.jpg` - 400x250px
- `ct-public-school.jpg` - 400x250px
- `ct-global-education.jpg` - 400x250px

---

### 🏆 **Certifications Section** (`certifications.php`)

#### Certification Images (Bento Grid)
- **Desktop:** `300x200px` (3:2 aspect ratio)
- **Format:** JPG/WebP
- **Quality:** 75-80%
- **File Size:** Max 150KB

#### Grid Layout Sizes
```
Desktop 4-column:     300x200px
Tablet 2-column:      280x187px
Mobile 1-column:      335x223px
```

#### Required Files
- `assets/Images/proud1.jpg` - 300x200px
- `assets/Images/proud2.jpg` - 300x200px
- `assets/Images/proud3.jpg` - 300x200px
- `assets/Images/proud4.jpg` - 300x200px
- `assets/Images/proud5.jpg` - 300x200px
- `assets/Images/proud6.jpg` - 300x200px
- `assets/Images/proud7.jpg` - 300x200px
- `assets/Images/proud8.jpg` - 300x200px

---

### 👥 **Testimonials Section** (`testimonials.php`)

#### Student Profile Images
- **Desktop:** `150x150px` (1:1 square)
- **Format:** JPG/WebP
- **Quality:** 75-80%
- **File Size:** Max 50KB

#### Responsive Sizes
```
Desktop:              150x150px
Tablet:               120x120px
Mobile:               100x100px
```

#### Required Files (Minimum 6-8 images)
- `student1.jpg` - 150x150px
- `student2.jpg` - 150x150px
- `student3.jpg` - 150x150px
- `student4.jpg` - 150x150px
- `student5.jpg` - 150x150px
- `student6.jpg` - 150x150px

---

### 🏢 **Stats Section** (`stats-section.php`)

#### Background Images (Optional)
- **Desktop:** `1920x600px` (Background overlay)
- **Format:** JPG with low opacity overlay
- **Quality:** 70-75%
- **File Size:** Max 400KB

---

### 📱 **Navigation & Branding**

#### Logo Specifications
- **Desktop:** `200x60px` (10:3 aspect ratio)
- **Format:** PNG/SVG (with transparency)
- **Quality:** 100% (PNG) / Vector (SVG)

#### Logo Responsive Sizes
```
Desktop:              200x60px (50px height max)
Tablet:               160x48px (40px height max)
Mobile:               120x36px (30px height max)
```

#### Required Files
- `logo.webp` - 200x60px
- `logo-light.png` - 200x60px (for dark backgrounds)
- `logo.svg` - Vector format

---

## 📊 **Complete Specifications Table**

| **Component** | **Desktop** | **Tablet** | **Mobile** | **Aspect Ratio** | **Format** | **Max Size** |
|---------------|-------------|------------|------------|------------------|------------|--------------|
| **Hero Banners** | 1920x1080px | 768x432px | 375x667px | 16:9 / 9:16 | JPG/WebP | 800KB |
| **Campus Cards** | 500x280px | 450x253px | 375x211px | 16:9 | JPG/WebP | 300KB |
| **Institution Cards** | 400x250px | 350x219px | 300x188px | 8:5 | JPG/WebP | 250KB |
| **Certifications** | 300x200px | 280x187px | 335x223px | 3:2 | JPG/WebP | 150KB |
| **Profile Images** | 150x150px | 120x120px | 100x100px | 1:1 | JPG/WebP | 50KB |
| **Logo** | 200x60px | 160x48px | 120x36px | 10:3 | PNG/SVG | 20KB |

---

## 📁 **Folder Structure for Designer**

```
assets/
├── images/
│   ├── logo.webp (200x60px)
│   ├── logo-light.png (200x60px)
│   ├── logo.svg (vector)
│   ├── campuses/
│   │   ├── shahpur-hero.jpg (1920x1080px)
│   │   ├── maqsudan-hero.jpg (1920x1080px)
│   │   ├── shahpur.jpg (500x280px)
│   │   └── maqsudan.jpg (500x280px)
│   ├── institutions/
│   │   ├── ct-university.jpg (400x250px)
│   │   ├── ct-world-school.jpg (400x250px)
│   │   ├── ct-public-school.jpg (400x250px)
│   │   └── ct-global-education.jpg (400x250px)
│   ├── certifications/ (Note: Capital 'I' in path)
│   │   ├── proud1.jpg (300x200px)
│   │   ├── proud2.jpg (300x200px)
│   │   ├── proud3.jpg (300x200px)
│   │   ├── proud4.jpg (300x200px)
│   │   ├── proud5.jpg (300x200px)
│   │   ├── proud6.jpg (300x200px)
│   │   ├── proud7.jpg (300x200px)
│   │   └── proud8.jpg (300x200px)
│   ├── testimonials/
│   │   ├── student1.jpg (150x150px)
│   │   ├── student2.jpg (150x150px)
│   │   ├── student3.jpg (150x150px)
│   │   ├── student4.jpg (150x150px)
│   │   ├── student5.jpg (150x150px)
│   │   └── student6.jpg (150x150px)
│   └── backgrounds/
│       ├── stats-bg.jpg (1920x600px)
│       └── pattern-overlay.png (400x400px)
```

---

## 🎨 **Design Guidelines for Graphic Designer**

### **Image Quality Standards**
- **Resolution:** Minimum 72 DPI for web, 150 DPI for retina displays
- **Compression:** 75-90% quality depending on image type
- **Color Space:** sRGB color profile
- **Format Priority:** WebP > JPG > PNG

### **Visual Style Requirements**
- **Hero Images:** High-impact, professional campus photography
- **Campus Cards:** Clean, well-lit exterior/interior shots
- **Institution Cards:** Modern, welcoming educational environments
- **Certifications:** Clean, readable certificate/award images
- **Profiles:** Professional headshots with consistent lighting

### **Technical Requirements**
- Provide 2x resolution versions for retina displays (optional)
- Ensure consistent color temperature across all images
- Include fallback JPG format for WebP images
- Maintain consistent visual style and CT Group branding
- Optimize images for web loading speed

### **Content Guidelines**
- **Campus Images:** Show modern facilities, students, greenery
- **Institution Images:** Highlight unique features of each institution
- **Certification Images:** Clear, readable certificates/awards
- **Profile Images:** Diverse student representation, professional quality

---



---



### **File Size Targets**
- **Hero Images:** < 800KB
- **Campus Images:** < 300KB
- **Institution Images:** < 250KB
- **Certification Images:** < 150KB
- **Profile Images:** < 50KB
- **Logo:** < 20KB

### **Loading Strategy**
- Use `loading="lazy"` attribute for all images except hero
- Implement WebP format with JPG fallback
- Consider using CSS `object-fit: cover` for responsive scaling
- Preload critical above-the-fold images

---

## ✅ **Delivery Checklist for Designer**

- [ ] All images in correct dimensions
- [ ] WebP and JPG formats provided
- [ ] File sizes within specified limits
- [ ] Consistent visual style across all images
- [ ] Professional quality and composition
- [ ] Proper folder structure maintained
- [ ] 2x retina versions (optional)
- [ ] Color profile set to sRGB
- [ ] Images optimized for web

---

*Last Updated: December 2024*
*Project: CT Group Landing Page*
*Developer: GitHub Copilot*