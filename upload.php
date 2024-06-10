<?php
$targetDir = "yonetimpaneli\include\uploads"; // Resimlerin yükleneceği klasör
$targetFile = $targetDir . basename($_FILES["file"]["name"]); // Yüklenecek dosyanın hedef yolu

// Dosya yükleme işlemi
if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
    echo "Yükleme başarılı: " . $targetFile;
} else {
    echo "Yükleme hatası.";
}
?>
