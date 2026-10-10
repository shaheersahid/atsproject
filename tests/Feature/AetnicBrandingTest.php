<?php

test('the aetnic page renders the AETNIC brand name', function () {
    $response = $this->get(route('atnic'));

    $response->assertOk();
    $response->assertSee('AETNIC', false);
    $response->assertDontSee('>ATNIC<', false);
});

test('the home page renders the AETNIC brand name', function () {
    $response = $this->get(route('home'));

    $response->assertOk();
    $response->assertSee('AETNIC — Our Flagship Intelligence Platform', false);
    $response->assertDontSee('ATNIC — Our Flagship Intelligence Platform', false);
});

test('the legacy atnic path redirects to aetnic', function () {
    $response = $this->get('/atnic');

    $response->assertRedirect('/aetnic');
});
