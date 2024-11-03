<?php

namespace App\Console\Commands;

use App\Events\TestingReverbEvent;
use Illuminate\Console\Command;

class Test extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        foreach (range(1, 100) as $i) {
            TestingReverbEvent::dispatch();
        }
    }
}
