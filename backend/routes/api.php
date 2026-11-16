
<?php

use Illuminate\Support\Facades\Route;

Route::get('/health', function () {
    return response()->json([
        'success' => true,
        'message' => 'Pickleball Booking API is running.',
        'application' => 'PikolbolApp',
        'status' => 'healthy',
    ]);
});
