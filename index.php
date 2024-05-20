<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Daftar Buku</h1>
    <a href="add_book.php">Tambah Buku Baru</a>
    <table border="1">
        <tr>
            <th>Judul</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?php
        $books = json_decode(file_get_contents('books.json'), true);
        foreach ($books as $index => $book) {
            echo "<tr>";
            echo "<td>{$book['judul']}</td>";
            echo "<td>{$book['pengarang']}</td>";
            echo "<td>{$book['tahun']}</td>";
            echo "<td><a href='delete_book.php?id={$index}'>Hapus</a></td>";
            echo "<td><a href='add_book.php?edit={$index}'>Edit</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
