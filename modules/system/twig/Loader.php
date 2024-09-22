<?php namespace System\Twig;

use App;
use File;
use Twig\Source as TwigSource;
use Twig\Loader\LoaderInterface as TwigLoaderInterface;
use Exception;
use Cms\Classes\Theme;

/**
 * This class implements a Twig template loader for the core system and backend.
 *
 * @package october\system
 * @author Alexey Bobkov, Samuel Georges
 */
class Loader implements TwigLoaderInterface
{
    /**
     * @var bool Allow any local file
     */
    public static $allowInclude = false;

    /**
     * @var array Cache
     */
    protected $cache = [];

    /**
     * Gets the path of a view file
     * @param  string $name
     * @return string
     */
    protected function findTemplate($name)
    {
        $finder = App::make('view')->getFinder();

        $activeTheme = Theme::getActiveTheme()->getDirName();
        $themePath = themes_path($activeTheme . '/pages');
        
        if (!in_array($themePath, $finder->getPaths())) {
            $finder->addLocation($themePath);
        }

        if (isset($this->cache[$name])) {
            return $this->cache[$name];
        }

        if (static::$allowInclude === true && File::isFile($name)) {
            return $this->cache[$name] = $name;
        }

        $path = $finder->find($name);
        return $this->cache[$name] = $path;
    }

    public function getSourceContext(string $name): TwigSource
    {
        return new TwigSource(File::get($this->findTemplate($name)), $name);
    }

    public function getCacheKey(string $name): string
    {
        return $this->findTemplate($name);
    }

    public function isFresh(string $name, int $time): bool
    {
        return File::lastModified($this->findTemplate($name)) <= $time;
    }

    public function getFilename($name)
    {
        return $this->findTemplate($name);
    }

    public function exists($name)
    {
        try {
            $this->findTemplate($name);
            return true;
        }
        catch (Exception $exception) {
            return false;
        }
    }
}
