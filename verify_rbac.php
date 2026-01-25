<?php

require __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

use App\Models\User;
use Illuminate\Support\Facades\Gate;

echo "Verifying RBAC Permissions...\n";
echo "--------------------------------------------------\n";

// 1. Verify Admin User
$admin = User::where('name', 'Administrador')->first();
if ($admin) {
    echo "User: " . $admin->name . " (Role: " . $admin->role . ")\n";
    echo "  - isAdmin(): " . ($admin->isAdmin() ? 'YES' : 'NO') . "\n";

    // Test 'manage-products' Gate
    echo "  - Can 'manage-products'?: " . (Gate::forUser($admin)->allows('manage-products') ? 'YES' : 'NO') . "\n";
} else {
    echo "Admin user not found.\n";
}

echo "--------------------------------------------------\n";

// 2. Verify Standard User
$user = User::where('name', '!=', 'Administrador')->first();
if ($user) {
    echo "User: " . $user->name . " (Role: " . $user->role . ")\n";
    echo "  - isAdmin(): " . ($user->isAdmin() ? 'YES' : 'NO') . "\n";

    // Test 'manage-products' Gate
    echo "  - Can 'manage-products'?: " . (Gate::forUser($user)->allows('manage-products') ? 'YES' : 'NO') . "\n";
} else {
    echo "Standard user not found.\n";
}
echo "--------------------------------------------------\n";
