<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class makeAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:make-admin {email}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fornisce privilegi admin';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $user = User::where('email', $this->argument('email'))->first();
        if(!$user){
            $this->error('Utente non trovato');
        }else{
            $user->is_admin = true;
            $user->save();
            $this->info("L'utente {$user->name} è diventato admin");
        }
    }
}
