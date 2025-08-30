<?php
$id = $id ?? '';
$label = $label ?? '';
$type = $type ?? 'text';
$name = $name ?? '';
$value = $value ?? '';
$error = $error ?? null;
$required = $required ?? false;
$autocomplete = $autocomplete ?? '';
?>

<div>
    <?php if (!empty($label)): ?>
        <label for="<?= $id ?? $name ?>" class="block text-sm font-medium text-gray-900">
            <?= htmlspecialchars($label) ?>
        </label>
    <?php endif; ?>

    <div class="mt-2">
        <input 
            id="<?= $id ?? $name ?>" 
            type="<?= $type ?? 'text' ?>" 
            name="<?= $name ?>"
            value="<?= htmlspecialchars($value ?? '') ?>"
            <?= !empty($required) ? 'required' : '' ?>
            <?= !empty($autocomplete) ? 'autocomplete="'.$autocomplete.'"' : '' ?>
            class="custom-input"
        />
    </div>

    <?php if (!empty($errors[$name])): ?>
        <p class="text-red-500 text-xs mt-2">
            <?= htmlspecialchars($errors[$name]) ?>
        </p>
    <?php endif; ?>
</div>
