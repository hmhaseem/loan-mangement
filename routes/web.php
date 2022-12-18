<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.loan-applications.index')->with('status', session('status'));
    }

    return redirect()->route('admin.loan-applications.index');
});

Auth::routes();
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Statuses
    Route::delete('statuses/destroy', 'StatusesController@massDestroy')->name('statuses.massDestroy');
    Route::resource('statuses', 'StatusesController');

    // Loan Applications
    Route::delete('loan-applications/destroy', 'LoanApplicationsController@massDestroy')->name('loan-applications.massDestroy');
    Route::get('loan-applications/{loan_application}/analyze', 'LoanApplicationsController@showAnalyze')->name('loan-applications.showAnalyze');
    Route::post('loan-applications/{loan_application}/analyze', 'LoanApplicationsController@analyze')->name('loan-applications.analyze');
    Route::get('loan-applications/{loan_application}/send', 'LoanApplicationsController@showSend')->name('loan-applications.showSend');
    Route::post('loan-applications/{loan_application}/send', 'LoanApplicationsController@send')->name('loan-applications.send');
    Route::resource('loan-applications', 'LoanApplicationsController');
    Route::post('loan-applications-find', 'LoanApplicationsController@retriveCustomerApplicationByNic')->name('customer-applications.find');



    // Customer Applications
    Route::resource('customer-applications', 'CustomerApplicationsController');

    //Accounts
    Route::resource('accounts', 'AccountsController');
    Route::get('accounts-history', 'AccountsController@history')->name('accounts.history');

    //Expensive
    Route::resource('expensive', 'ExpensiveController');


    // Expensive Type
    Route::resource('expensive-type', 'ExpensiveTypeController');

    //Payment
    Route::resource('payments', 'PaymentsController');
    Route::post('paymentsfind', 'PaymentsController@getDetailsByNic')->name('payments.find');
    Route::get('payments/history/{id}', 'PaymentsController@history')->name('payments.history');

    // Comments
    Route::delete('comments/destroy', 'CommentsController@massDestroy')->name('comments.massDestroy');
    Route::resource('comments', 'CommentsController');

    //Settings
    Route::get('settings', 'SettingsController@index')->name('settings.index');
    Route::post('settings', 'SettingsController@store')->name('settings.store');
    Route::get('settings-income-type', 'SettingsController@income')->name('settings.income');
    Route::post('settings-income-type', 'SettingsController@incomeStore')->name('settings.income.store');
    Route::get('charges', 'SettingsController@charges')->name('settings.charges');
    Route::put('charges', 'SettingsController@chargesStore')->name('settings.charges.store');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});
