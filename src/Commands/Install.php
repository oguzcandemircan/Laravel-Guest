<?php

namespace OguzcanDemircan\LaravelGuest\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command {

    protected $signature = 'laravelguest:create';

    protected $description = 'Create guest user';

    public function __construct()
    {
        parent::__construct();
        $model = config('auth.providers.users.model');
        $this->user = new $model;
    }

    public function handle()
    {
        if($this->user->find(config('laravelguest.guest.id'))) {
            $this->info('Guest user already created');
        }
        $this->user->insert($this->getData());
        $this->info('Guest user successfully created !');
    }

    public function getData()
    {
        $data = config('laravelguest.guest');
        $data['password'] = bcrypt($data['password']);
        return $data;
    }
}