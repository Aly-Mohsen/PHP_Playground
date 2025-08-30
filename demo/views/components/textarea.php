<?php
$name        = $name ?? 'textarea';
$label       = $label ?? '';
$value       = $value ?? '';
$placeholder = $placeholder ?? '';
$rows        = $rows ?? 3;
$error       = $error ?? null;
$class       = $class ?? 'form-textarea';
?>
<div>
    <label for="<?= htmlspecialchars($name) ?>" class="block text-sm font-medium text-gray-700">
        <?= htmlspecialchars($label) ?>
    </label>
    <!-- class="mt-1 block w-full rounded-md border-gray-300 shadow-sm 
                   focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" -->
    <div class="mt-1">
        <textarea id="<?= htmlspecialchars($name) ?>" 
            name="<?= htmlspecialchars($name) ?>" 
            rows="<?= (int) $rows ?>"
            class="form-textarea"
            placeholder="<?= htmlspecialchars($placeholder) ?>"><?= htmlspecialchars($value) ?></textarea>

        <?php if (!empty($error)): ?>
            <p role="alert" class="text-red-500 text-xs mt-2"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
    </div>
</div>