<?php

namespace App\Console\Commands;

use App\Models\Article;
use Illuminate\Console\Command;

class PostCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'articles:planned_at';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the planned status of the post to published';

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
     * @return string
     */
    public function handle()
    {
        Article::where('planned_at','>=',now())->get()->update(
            [
                'status'=>'Publish',
                'created_at'=>now()
            ]
        );
        return "L'ensemble des articles plannifié à cette date et à une antérieure sont crées";
    }
}
