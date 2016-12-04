<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     * @group failing
     * @return void
     */
    public function testBasicExample()
    {
        //mostra els todos del usuari logat
        $user= factory (\App\User::class)->make();
        $task= factory (\App\Task::class);

        $user->addTask($task);
        $this->actingAs($user);
        $this->visit('/tasks')
             ->see('Laravel');
    }
}
