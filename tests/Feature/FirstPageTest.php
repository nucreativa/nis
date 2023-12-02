<?php

it('returns a successful response (redirect to login page)', function () {
    $response = $this->get('/');

    $response->assertStatus(302);
});
