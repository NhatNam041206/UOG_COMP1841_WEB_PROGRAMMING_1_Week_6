<form action="" method="post" class="add-joke-form">
    <div class="form-row">
        <div class="form-field joke-field">
            <label for="joketext">Type your joke here:</label>
            <textarea name="joketext" id="joketext" rows="3" cols="40" required></textarea>
        </div>

        <div class="form-field">
            <label for="jokedate">Choose a date:</label>
            <input type="date" name="jokedate" id="jokedate" value="<?= date('Y-m-d') ?>" required>
        </div>

        <div class="form-field">
            <label for="jokeimage">Type image file name:</label>
            <input type="text" name="jokeimage" id="jokeimage" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-field">
            <label for="authorid">Choose an author:</label>
            <select name="authorid" id="authorid" required>
                <option value="" disabled selected hidden>Select an author</option>
                <?php foreach ($authors as $author): ?>
                    <option value="<?= htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-field">
            <label for="categoryid">Choose a category:</label>
            <select name="categoryid" id="categoryid" required>
                <option value="" disabled selected hidden>Select a category</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8') ?>">
                        <?= htmlspecialchars($category['name'], ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <input type="submit" name="submit" value="Add">
    </div>
</form>
