<?php

namespace Laranext\Generator\Console;

use Illuminate\Filesystem\Filesystem;

class PurgeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laranext:purgecss';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'PurgeCss for laranext packages';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        (new Filesystem)->copyDirectory(
            __DIR__.'/purge-stubs',
            base_path('laranext-purge')
        );

        $this->replace(
            '{{ folders }}',
            '[\''.implode('\', \'', $this->folders()).'\']',
            base_path('laranext-purge').'/webpack.mix.js'
        );
    }

    /**
     * Get the array of stubs that need PHP file extensions.
     *
     * @return array
     */
    protected function folders()
    {
        $packages = [
            '../vendor/laranext/laranext/resources/views/' . config('laranext.theme'),
            '../vendor/laranext/laranext/resources/js/components/' . config('laranext.theme'),
        ];

        foreach (config('laranext.providers') as $key => $value) {
            $packages[] = '../vendor/laranext/' . $key . '/resources/views/' . config('laranext.theme');
            $packages[] = '../vendor/laranext/' . $key . '/resources/js/components/' . config('laranext.theme');
        }

        return $packages;
    }
}
