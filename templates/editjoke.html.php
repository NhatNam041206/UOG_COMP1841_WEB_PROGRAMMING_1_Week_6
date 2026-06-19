<form action="" method="post" class="add-joke-form">
    <input type="hidden" name="id" value="<?= htmlspecialchars($joke['id'], ENT_QUOTES, 'UTF-8')?>">

    <div class="form-row">
        <div class="form-field joke-field">
            <label for="joketext">Edit your joke here:</label>
            <textarea name="joketext" id="joketext" rows="3" cols="40" required><?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?></textarea>
        </div>

        <div class="form-field">
            <label for="jokedate">Choose a date:</label>
            <input type="date" name="jokedate" id="jokedate" value="<?= htmlspecialchars($joke['jokedate'], ENT_QUOTES, 'UTF-8') ?>" required>
        </div>

        <div class="form-field">
            <label for="jokeimage">Type image file name:</label>
            <input type="text" name="jokeimage" id="jokeimage" value="<?= htmlspecialchars($joke['jokeimage'], ENT_QUOTES, 'UTF-8') ?>" required>
        </div>
    </div>

    <div class="form-row">
        <div class="form-field">
            <label for="authorid">Choose an author:</label>
            <select name="authorid" id="authorid" required>
                <option value="">Select an author</option>
                <?php foreach ($authors as $author): ?>
                    <option value="<?= htmlspecialchars($author['id'], ENT_QUOTES, 'UTF-8') ?>"
                        <?= $author['id'] == $joke['authorid'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($author['name'], ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="form-field">
            <label for="categoryid">Choose a category:</label>
            <select name="categoryid" id="categoryid" required>
                <option value="">Select a category</option>
                <?php foreach ($categories as $category): ?>
                    <option value="<?= htmlspecialchars($category['id'], ENT_QUOTES, 'UTF-8') ?>"
                        <?= $category['id'] == $joke['categoryid'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($category['name'], ENT_QUOTES, 'UTF-8') ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </div>

        <input type="submit" name="submit" value="Save">
    </div>
</form>
