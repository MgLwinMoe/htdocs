<?php

Route::get('test',function(){
    dd("Admin Route");
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'App\Http\Controllers\Auth'], function () {
    // Change password
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    // }
});

Route::redirect('/', '/admin/dashboard');

Route::group(['namespace' => 'App\\Http\\Controllers\\Admin'], function () {

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');
});




