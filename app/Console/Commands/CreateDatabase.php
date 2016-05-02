<?php

namespace ClevAppBcRestApi\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class CreateDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:create';

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
     *
     * TODO: Improve script
     */
    public function handle()
    {
        // $dbname = $this->ask('Enter database name:');TODO: get database name in app database config
        $uname = $this->ask('Enter database user:');
        // $password = $this->ask('Enter password:');

        $cmd = escapeshellcmd('mysql --user=' . $uname .' -p -e "create database app_clrestapi"');

        $test = shell_exec($cmd);
        
        $this->info('Database successfully created.');
        // return DB::statement('CREATE DATABASE :schema', ['schema' => $dbname]);
    }
}
