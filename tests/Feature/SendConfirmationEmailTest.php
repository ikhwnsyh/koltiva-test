<?php

namespace Tests\Feature;

use App\Jobs\SendConfirmationToUser;
use App\Models\User;
use Illuminate\Support\Facades\Queue;
use PHPUnit\Framework\TestCase;

class SendConfirmationEmailTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function it_dispatches_send_confirmation_email_job()
    {
        Queue::fake();
        $user = User::factory()->create();
        SendConfirmationToUser::dispatch($user);
        Queue::assertPushed(SendConfirmationToUser::class, function ($job) use ($user) {
            return $job->user->id === $user->id;
        });
    }
}
