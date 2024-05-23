<?php

it('hola', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});
