# The rules (catatan)

1. Selalu set error_reporting ke E_ALL untuk development dan
1. Set ini_set() value diawal
2. Selalu membuat komentar diawal untuk memperjelas tujuan file dibuat
3. Setiap penamaan variabel harus jelas dan sesuai konteks
4. Menulis tag php hanya dengan <?php // code; ?> atau shorthand <?= untuk echo
5. Selalu menulis bolean dalam huruf kecil (true dan false)
6. Parsing text dengan single quotes, "[Escaped characters](https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.single)" dengan dobelquote, dan parsing variabel dengan dobelquote dengan {$variabel}
7. Selalu menggunakan CRSF pada form
8. Selalu escaping html input value
9. Informasi sesnsitive ditempatkan pada file ENV (.env)
10. Tab selalu set ke 4 spasi
11. Selalu menulis variabel konstan dengan huruf kapital
