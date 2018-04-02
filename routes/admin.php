<?php

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

Route::get('/', 'Dashboard@index')->name('admin_dashboard');

Route::get('/events', function (){
    return 'Admin Events';
})->name('admin_events');

Route::post('/events/create', function (){
    return 'Event created!';
});

Route::catch(function (){
    throw new NotFoundHttpException;
});

/*Route::any('{any}', function (){
    throw new NotFoundHttpException('Página no encontrada');


})->where('any', '.*');*/

/*Route::fallback(function (){

    throw new NotFoundHttpException('Página no encontrada');
    //return response()->view('errors/404',[], 404);
});*/

