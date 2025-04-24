
<!DOCTYPE html>
<html lang="tr">
<head>
  <meta charset="UTF-8">
  <title>Ziyaret Düzenle</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Ziyareti Düzenle</h2>
  <form action="dashboard.php" method="get">
    <label>Tarih: <input type="date" value="2025-04-01" required></label><br>
    <label>Ziyaretçi Adı: <input type="text" value="Ali Veli" required></label><br>
    <label>Notlar: <textarea rows="4">Misafir toplantıya katıldı.</textarea></label><br>
    <button type="submit">Güncelle</button>
  </form>
</body>
</html>
