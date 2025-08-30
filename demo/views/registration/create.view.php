<?php ob_start(); ?>

<div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company"
            class="mx-auto h-10 w-auto" />
        <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">
            Register for a new account
        </h2>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form action="/register" method="POST" class="space-y-6">
            <div>
                <?php input([
                    'id' => 'email',
                    'label' => 'Email address',
                    'type' => 'email',
                    'name' => 'email',
                    'value' => old('email'),
                    'error' => $errors['email'] ?? null,
                    'required' => true,
                    'autocomplete' => 'email',
                ]); ?>

            </div>
            <div>
                <?php input([
                    'id' => 'password',
                    'label' => 'Password',
                    'type' => 'password',
                    'name' => 'password',
                    'value' => old('password'),
                    'error' => $errors['password'] ?? null,
                    'required' => true,
                    'autocomplete' => 'current-password',
                ]); ?>

            </div>

            <div>
                <?php button('Register', [
                    'type' => 'submit',
                    'class' => 'btn btn-primary w-full'
                ]) ?>
            </div>
        </form>
    </div>
</div>

<?php
$slot = ob_get_clean();
require base_path('views/layout.view.php');