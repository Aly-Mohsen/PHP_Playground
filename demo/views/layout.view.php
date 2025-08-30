<?php require base_path('views/partials/head.php') ?>
<?php require base_path('views/partials/nav.php') ?>
<?php if (!empty($heading)) : ?>
        <?php require base_path('views/partials/banner.php'); ?>
    <?php endif; ?>

<main class="flex-grow">
    <?= $slot ?>
</main>

<?php require base_path('views/partials/footer.php') ?>