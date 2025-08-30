<?php

$type = $type ?? 'button';
$class = $class ?? 'btn';
?>

<button
    type="<?= htmlspecialchars($type) ?? 'button'?>"
    class="<?= htmlspecialchars($class) ?? 'btn'?>"
>
    <?= $slot ?? 'Button' ?>
</button>