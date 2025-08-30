<?php ob_start(); ?>

<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form method="POST" action="/note">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $note['id'] ?>">


                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                                <?php
                                textarea([
                                    'name' => 'body',
                                    'label' => 'Body',
                                    'value' => $note['body'],
                                    'class' => 'form-textarea',
                                    'placeholder' => "Here's an idea for a note...",
                                    'rows' => 3,
                                    'error' => $errors['body'] ?? null,
                                ]);
                                ?>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 flex gap-x-4 justify-end sm:px-6">
                        <a href="/notes"
                           class="btn btn-secondary">
                           Cancel
                        </a>
                        
                       <?php button('Update', ['type' => 'submit', 'class' => 'btn btn-primary']); ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$slot = ob_get_clean();
require base_path('views/layout.view.php');