<?php

namespace Modules\Video\Console\Commands;

use Illuminate\Console\Command;

class VideoCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:VideoCommand';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Video Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        return Command::SUCCESS;
    }
}
