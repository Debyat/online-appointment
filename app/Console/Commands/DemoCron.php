<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Task;

class DemoCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $task = Task::create([
            'name' => 'Alias',
            'access_token' => 'sadsa15d4asd4sda4d5sad',
            'provider' => 'username',
            'type' => 'yelp',
            'depth' => '10000',
            'sort_by' => 'spsa;ldkaskdsa',
        ]);

    }
}
