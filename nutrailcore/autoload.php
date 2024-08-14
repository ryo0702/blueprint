<?php if (!defined('ABSPATH')) {
    die;
} // Cannot access pages directly.

class Nutrail_Autoload
{
    private $prefix;

    private $folder;

    public function __construct($prefix, $folder)
    {
        $this->prefix = ltrim($prefix, '\\');
        $this->folder = $folder;

        spl_autoload_register([$this, 'autoload']);
    }

    /**
     * Include a class file.
     *
     * @param string $path File path.
     * @return bool Successful or not.
     */
    private function load_file($path)
    {
        if ($path && is_readable($path)) {
            include_once $path;
            return true;
        }
        return false;
    }

    public function autoload($class)
    {
        $namespace = $this->prefix.'\\';

        if (!str_starts_with($class, $namespace)) {
            return;
        }

        $filename = str_replace([$namespace, '\\'], ['', '/'], $class);
        $filename = str_replace('_', '-', $filename);
        $path     = strtolower($this->folder.'/'.$filename.'.php');

        if (file_exists($path) || !$this->load_file($path)) {
            $this->load_file($path);
        }
    }
}

new Nutrail_Autoload('Nutrail', NUTRAIL_CORE_PATH.'vendor');