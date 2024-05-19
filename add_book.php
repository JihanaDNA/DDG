<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku Baru</title>
</head>
<body>
    <h1>Tambah Buku Baru</h1>
    <form method="POST" action="add_book.php">
        <label>Judul:</label>
        <input type="text" name="judul" required><br>
        <label>Pengarang:</label>
        <input type="text" name="pengarang" required><br>
        <label>Tahun Terbit:</label>
        <input type="number" name="tahun" required><br>
        <input type="submit" name="submit" value="Tambah">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $newBook = [
            'judul' => $_POST['judul'],
            'pengarang' => $_POST['pengarang'],
            'tahun' => $_POST['tahun']
        ];

        $books = json_decode(file_get_contents('books.json'), true);
        $books[] = $newBook;
        file_put_contents('books.json', json_encode($books));

        echo "Buku berhasil ditambahkan!";
        header("Location: index.php");
    }
    ?>
</body>
</html>
