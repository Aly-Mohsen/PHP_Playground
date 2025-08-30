<?php ob_start(); ?>



<div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="mt-5 md:col-span-2 md:mt-0">
            <form method="POST" action="/notes">
                <div class="shadow sm:overflow-hidden sm:rounded-md">
                    <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                        <?php
                        textarea([
                            'name' => 'body',
                            'label' => 'Body',
                            'value' => $_POST['body'] ?? '',
                            'placeholder' => "Here's an idea for a note...",
                            'rows' => 3,
                            'class' => 'form-textarea',
                            'error' => $errors['body'] ?? null,
                        ]);
                        ?>
                    </div>

                    <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                        <?php button('Save'  , ['type' => 'submit', 'class' => 'btn btn-primary']); ?>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
$slot = ob_get_clean();
require base_path('views/layout.view.php');
