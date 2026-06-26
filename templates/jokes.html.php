    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>List of jokes</title>
    </head>
    <body>

    <?php if (isset($error)): ?>

        <p><?= $error ?></p>

    <?php else: ?>
        <p><?= $totalJokes?> jokes have been submitted to the Internet Joke Database.</p>
        <table border="2px">
            <thead>
                <tr>
                    <th>Joke Title</th>
                    <th>Joke Date</th>
                    <th>Image</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
            </thead>
            
            <?php foreach ($jokes as $joke): ?>
                <tr>
                    <td width="300px">
                        <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?>
                    </td>

                    <td width="150px">
                        <?php
                            $display_date = date('D d M Y', strtotime($joke['jokedate']));
                        ?>
                        <?= htmlspecialchars($display_date, ENT_QUOTES, 'UTF-8') ?>
                    </td>

                    <td width="150px">
                        <img height="100px" src="images/<?= htmlspecialchars($joke['jokeimage'], ENT_QUOTES, 'UTF-8') ?>" />
                    </td>

                    <td width="150px">
                        <?= htmlspecialchars($joke['category_name'], ENT_QUOTES, 'UTF-8') ?>
                    </td>

                    
                    <td width="50px">
                        by <a href="mailto:<?= htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8') ?>">
                            <?= htmlspecialchars($joke['author_name'], ENT_QUOTES, 'UTF-8') ?>
                    </td>

                    <td width="50px">
                        <div class="actions">
                            <form action="editjoke.php">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($joke['id'], ENT_QUOTES, 'UTF-8')?>">
                                <input type="submit" value="Edit">
                            </form>

                            <form action="deletejoke.php" method="post">
                                <input type="hidden" name="id" value="<?= htmlspecialchars($joke['id'], ENT_QUOTES, 'UTF-8')?>">
                                <input type="submit" value="Delete">
                            </form>
                        </div>
                    </td>

                </tr>
            <?php endforeach; ?>
        </table>

    <?php endif; ?>

    </body>
    </html>
                