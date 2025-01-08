<?php namespace PanaKour\Backup;

use Illuminate\Support\Facades\Config;
use League\Flysystem\Filesystem;
use Spatie\Dropbox\Client;
use Spatie\FlysystemDropbox\DropboxAdapter;

class Dropbox
{
    protected $client;

    protected $adapter;

    protected $fileSystem;

    protected $path = '';

    public function __construct()
    {
        $accessToken = Config::get('filesystems.disks.dropbox.authorizationToken') ?: '';
        $this->client = new Client($accessToken);
        $this->adapter = new DropboxAdapter($this->client);
        $this->fileSystem = new Filesystem($this->adapter);
        $contents = $this->fileSystem->listContents('/', false)->toArray();

        if (isset($contents[0])) {
            $this->path = $firstItem['path'] ?? null;
        }
    }

    public function getBackups()
    {
        return $this->fileSystem->listContents($this->path, false)->toArray();
    }

    public function downloadBackup($baseName)
    {
        $file = $this->adapter->read($this->path.'/'.$baseName)['contents'];
        header("Content-Type: application/zip");
        echo $file;
    }
}
