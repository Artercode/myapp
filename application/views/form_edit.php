<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit Artikel</h1>
    <form method="POST">
        <div>
            <label for="">Judul</label>
            <input type="text" name="title" value="<?php echo $blog['title']; ?>">
        </div>
        <div>
            <label for="">URL</label>
            <input type="text" name="url" value="<?php echo $blog['url']; ?>">
        </div>
        <div>
            <label for="">Konten</label>
            <textarea name="content" id="" cols="30" rows="10"><?php echo $blog['content']; ?></textarea>
        </div>

        <button type="submit">Simpan Artikel</button>
    </form>
</body>

</html>