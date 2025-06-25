<?php

namespace Datapec\Taxonomy\Commands;

use Illuminate\Console\Command;

class TaxonomyCommand extends Command
{
    public $signature = 'taxonomy';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
