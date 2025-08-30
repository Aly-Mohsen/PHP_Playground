<?php ob_start(); ?>


<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <p class="mb-6">
        <a href="/notes"
            class="btn btn-primary">
            Back
        </a>
    </p>

    <p><?= htmlspecialchars($note['body']) ?></p>

    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 flex gap-x-4 mt-6 justify-center">
        <a href="/note/edit?id=<?= $note['id'] ?>"
            class="btn btn-warning">
            Edit
        </a>
        <form method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $note['id'] ?> ">
            <?php button('Delete', [
                'type' => 'submit',
                'class' => 'btn btn-danger'
            ]) ?>
        </form>

    </div>

</div>

<?php
$slot = ob_get_clean();
require base_path('views/layout.view.php');