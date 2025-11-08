# Image Setup Instructions

To complete the website setup, please copy the following images from `drafts/pics` to `public/images`:

1. `logo.png` → `public/images/logo.png`
2. `main_photo_of_garand101.jpg` → `public/images/main_photo_of_garand101.jpg`

You can copy these images manually or use the following PowerShell command:

```powershell
Copy-Item -Path "drafts\pics\logo.png" -Destination "public\images\logo.png"
Copy-Item -Path "drafts\pics\main_photo_of_garand101.jpg" -Destination "public\images\main_photo_of_garand101.jpg"
```

Or if you have additional product images in `drafts/pics`, copy them to `public/images` as well.
