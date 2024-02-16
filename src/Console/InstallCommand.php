<?php

namespace Eky\Tes1\Console;

use Illuminate\Console\Command;
use Illuminate\Contracts\Console\PromptsForMissingInput;

class InstallCommand extends Command implements PromptsForMissingInput
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'eky:install {stack : The development stack that should be installed (blade,livewire,livewire-functional,react,vue,api)}
                            {--dark : Indicate that dark mode support should be installed}
                            {--pest : Indicate that Pest should be installed}
                            {--ssr : Indicates if Inertia SSR support should be installed}
                            {--typescript : Indicates if TypeScript is preferred for the Inertia stack (Experimental)}
                            {--composer=global : Absolute path to the Composer binary which should be used to install packages}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install eky tes stack into your application.';

    /**
     * Execute the console command.
     *
     * @return int|null
     */
    public function handle()
    {
        if ($this->argument('stack') === 'vue') {
            $this->components->info('Installing Vue stack...');
        } elseif ($this->argument('stack') === 'react') {
            $this->components->info('Installing React stack...');
        } elseif ($this->argument('stack') === 'blade') {
            $this->components->info('Installing Blade stack...');
        } 

        $this->components->error('Invalid stack. Supported stacks are [blade], [livewire], [livewire-functional], [react], [vue], and [api].');

        return 1;
    }
}
