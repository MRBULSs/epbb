<?php
// Konfigurasi dasar
$domain = 'epbb.cilacapkab.go.id/?buls='; // Ganti dengan domain Anda
$pathToSitemap = 'sitemap.xml'; // Path ke file sitemap.xml


// Baca list brand dari file
$listBrand = file('list.txt', FILE_IGNORE_NEW_LINES);

// Buat string XML
$xml = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
';

// Tambahkan setiap brand sebagai URL dalam sitemap
foreach ($listBrand as $brand) {
    $xml .= '<url>
        <loc>https://' . $domain . $brand . '</loc>
    </url>';
}

$xml .= '</urlset>';

// Simpan XML ke file
file_put_contents($pathToSitemap, $xml);
echo "JADI LA SUDAH SITEMAP KAU JANG!!<br>";

?>