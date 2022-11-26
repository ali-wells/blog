<?php

namespace App\Console\Commands;

use App\ConvertKit\Client;
use App\Models\Subscriber;
use Illuminate\Support\Carbon;
use Illuminate\Console\Command;

class ConvertKitFetchCommand extends Command
{
    protected $signature = 'convertkit:fetch';

    protected $description = 'Fetch subscriber from ConvertKit';

    public function handle(Client $client) : int
    {
        $client->subscribers()->each(function (array $subscriber) {
            $subscriber = Subscriber::firstOrCreate([
                'email' => $subscriber['email_address'],
                'created_at' => Carbon::parse($subscriber['created_at']),
            ]);

            if ($subscriber->wasRecentlyCreated) {
                $this->info("Imported {$subscriber->email}");
            }
        });

        return Command::SUCCESS;
    }
}
