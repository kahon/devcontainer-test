<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRepository extends Command
{
    protected $signature   = 'make:repository {name}';
    protected $description = 'Create a new repository class';

    public function handle(): void
    {
        $name  = $this->argument('name');
        $parts = explode('/', $name);
        $class = array_pop($parts);

        $subNamespace = count($parts) ? '\\' . implode('\\', $parts) : '';
        $namespace    = 'App\\Repositories' . $subNamespace;

        $dir  = app_path('Repositories/' . implode('/', $parts));
        $path = $dir . '/' . $class . '.php';

        if (File::exists($path)) {
            $this->error("Repository already exists: {$path}");
            return;
        }

        File::ensureDirectoryExists($dir);
        File::put($path, $this->buildStub($namespace, $class));

        $this->info("Repository created successfully: {$path}");
    }

    private function buildStub(string $namespace, string $class): string
    {
        $model = str_replace('Repository', '', $class);

        return <<<PHP
<?php

namespace {$namespace};

use App\Models\\{$model};
use App\Repositories\Repository;

class {$class} extends Repository
{
    public function __construct({$model} \$model)
    {
        parent::__construct(\$model);
    }
}
PHP;
    }
}
