<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create the database specified in the .env file';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $database = env('DB_DATABASE');
        $this->info("DB_DATABASE: " . $database);
        $charset = config('database.connections.mysql.charset');
        $collation = config('database.connections.mysql.collation');

        if (!$database) {
            $this->error('Database name not specified in .env file');
            return 1;
        }

        try {
            $query = "CREATE DATABASE IF NOT EXISTS `$database` CHARACTER SET $charset COLLATE $collation;";
            DB::statement($query);

            $this->info("Database '$database' created successfully.");
        } catch (\Exception $e) {
            $this->error($e->getMessage());
            return 1;
        }

        return 0;
    }
}
