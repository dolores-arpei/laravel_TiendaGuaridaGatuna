<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    $users = \App\Models\User::all();
    if ($users->isEmpty()) {
        echo "No users found.\n";
    } else {
        foreach ($users as $user) {
            echo "ID: " . $user->id . "\n";
            echo "Name: " . $user->name . "\n";
            echo "Email: " . $user->email . "\n";
            echo "Password Hash: " . $user->password . "\n";
            // Check for any potential role attributes
            $attributes = $user->getAttributes();
            foreach ($attributes as $key => $value) {
                if (str_contains($key, 'role') || str_contains($key, 'admin') || str_contains($key, 'type')) {
                    echo "Potential Role ($key): " . $value . "\n";
                }
            }
            echo "--------------------------------------------------\n";
        }
    }
} catch (\Exception $e) {
    echo "Error: " . $e->getMessage();
}
