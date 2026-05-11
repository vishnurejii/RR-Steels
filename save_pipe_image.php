<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

use App\Models\Category;
use App\Models\Product;

// Base64 image data (steel pipe)
$base64 = '/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMSEhUTExMWFhUXFxoaGBgYGRseGhkgGh0XHx0gHR8dHSggHR0lHxggIjEhJSkrLi4uGh8zODMtNygtLisBCgoKDg0NFQ8PFSsZFRkrLS0tKysrKysrKysrLTctLS0tLTc3NzctKy0rNy0rLTcrKy0tKysrKysrLSsrLSsrK//AABEIAK8BIAMBIgACEQEDEQH/xAAcAAACAwEBAQEAAAAAAAAAAAAFBgMEBwIBCAD/xABLEAACAQIDBQUEBwUGBAQHAQABAgMAEQQSIQUGMUFREyJhcYEyQpGhByNSYoKxwRRyktHhFTNTorLwJENjwhZzo9I0NVRkdIOzF//EABYBAQEBAAAAAAAAAAAAAAAAAAABAv/EABkRAQEBAAMAAAAAAAAAAAAAAAARASExQf/aAAwDAQACEQMRAD8AhxeGxcc7YmDFPmdizLoCCehtlYcrEDzotHvmJPqdo4VZR1y5ZPML73mhIouz4eYd4di3VRdPVeK/hPpVLaGxiE76LLF9od5Pja6nzsaqOI9gwz9/Z2MuRr2UpOYeAa4dfW48K8O8mNwR7PFxkpw+ssUPlIBlI/eC0AxOwCDmhchhqAWJI8nHfHrmFXMFvpi8MBHiVE0Z0tKBr+6/sN62PhUU3bK29hpD9XK2Gc+62sbehutvIiiJiZTmMZH/AFcKdPxR/wBDSdFg9m424gkODmOpjYdwk/dbunzGtRy4XaOz+8AzRj34runqpOdfQt5UQ3yQrOCGSLFKeJWyS/iQ6NalHae4GFlY/s8phl+xJdWB9SL+RQDZ2wCDmhchhqAWJI8nHfHrmFXMFvpi8MBHiVE0Z0tKBr+6/sN62PhUU3bK29hpD9XK2Gc+62sbehutvIiiJiZTmMZH/AFcKdPxR/wBDSdFg9m424gkODmOpjYdwk/dbunzGtRy4XaOz+8AzRj34runqpOdfQt5UQ3yQrOCGSLFKeJWyS/iQ6NalHae4GFlY/s8phl+xJdWB9SL+Rsg==';

// Ensure the assets/images directory exists
$dir = public_path('assets/images');
if (!file_exists($dir)) {
    mkdir($dir, 0755, true);
}

// Decode and save the image
$imageData = base64_decode($base64);
$filePath = $dir . '/steel-pipe.jpg';
file_put_contents($filePath, $imageData);

// Update all Steel Pipes products in DB
$cat = Category::where('slug', 'steel-pipes')->first();
if ($cat) {
    $count = Product::where('category_id', $cat->id)
        ->update(['image' => '/assets/images/steel-pipe.jpg']);
    echo "Updated {$count} Steel Pipes products to use local image.\n";
} else {
    echo "Category 'steel-pipes' not found.\n";
}

echo "Image saved to: {$filePath}\n";
echo "Done!\n";
