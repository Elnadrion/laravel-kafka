<?php

namespace Junges\Kafka\Tests\Unit\Config;

use Junges\Kafka\Config\Sasl;
use Junges\Kafka\Tests\LaravelKafkaTestCase;

class SaslLaravelKafkaTest extends LaravelKafkaTestCase
{
    public function testGetUsername()
    {
        $sasl = new Sasl(
            username: 'username',
            password: 'password',
            mechanisms: 'mechanisms'
        );

        $this->assertEquals('username', $sasl->getUsername());
    }

    public function testGetPassword()
    {
        $sasl = new Sasl(
            username: 'username',
            password: 'password',
            mechanisms: 'mechanisms'
        );

        $this->assertEquals('password', $sasl->getPassword());
    }

    public function testGetMechanisms()
    {
        $sasl = new Sasl(
            username: 'username',
            password: 'password',
            mechanisms: 'mechanisms'
        );

        $this->assertEquals('mechanisms', $sasl->getMechanisms());
    }
}