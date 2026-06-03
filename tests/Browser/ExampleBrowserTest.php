<?php

it('renders the login page in a real browser', function () {
    $page = visit('/login');

    $page->assertSee('Log in')
        ->assertNoJavaScriptErrors();
})->skip(fn () => ! file_exists(public_path('build/manifest.json')), 'Frontend assets not built');
