<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class StartApp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:start';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start the application';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting application...');

        // Running migrations
        $this->info('Running migrations...');
        $this->call('migrate:fresh', [
            '--force' => true,
        ]);

        // Running seeders
        $this->info('Seeding database...');
        $this->call('db:seed', [
            '--class' => 'UsersTableSeeder',
            '--force' => true,
        ]);
        $this->call('db:seed', [
            '--class' => 'AdminsTableSeeder',
            '--force' => true,
        ]);

        // Starting the development server
        $this->info('Starting the development server...');
        $this->call('serve');

        $this->info('Application started successfully!');
        return 0;
    }
    
}
