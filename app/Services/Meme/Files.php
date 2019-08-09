<?php

namespace App\Services\Meme;

use App\Models\Meme\Meme as MemeMemeModel;
use App\Services\Service;
use Exception;
use Illuminate\Filesystem\FilesystemAdapter;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Files extends Service
{
    protected $model = null;

    public function __construct(MemeMemeModel $model)
    {
        $this->model = $model;
    }

    public function buildName(string $path_original): string
    {
        return
            $this->getModel()->getKey() . '.' .
            strtolower(File::extension($path_original));
    }

    public function delete(): bool
    {
        $error = 'Failed to delete %s file';
        $model = $this->getModel();
        switch ($model->type->alias) {
            case 'image':
                if (!$this->deleteFile($model->body, 'images')) {
                    throw new Exception(sprintf($error, 'image'));
                }
                break;
            case 'video':
                if (!$this->deleteFile($model->preview, 'previews')) {
                    throw new Exception(sprintf($error, 'preview'));
                }
                if (!$this->deleteFile($model->body, 'videos')) {
                    throw new Exception(sprintf($error, 'video'));
                }
                break;
        }
        return true;
    }

    public function deleteFile(string $path_original, string $dir): bool
    {
        return
            (bool) $this->getStorage()->delete(
                $dir . '/' . $this->buildName($path_original)
            );
    }

    public function getContents(string $path): string
    {
        return (string) @file_get_contents($path);
    }

    public function getModel(): MemeMemeModel
    {
        return $this->model;
    }

    public function getStorage(): FilesystemAdapter
    {
        return Storage::disk('memes');
    }

    public function store(): bool
    {
        $error = 'Failed to store %s file';
        $model = $this->getModel();
        switch ($model->type->alias) {
            case 'image':
                if (!$this->storeFile($model->body, 'images')) {
                    throw new Exception(sprintf($error, 'image'));
                }
                break;
            case 'video':
                if (!$this->storeFile($model->preview, 'previews')) {
                    throw new Exception(sprintf($error, 'preview'));
                }
                if (!$this->storeFile($model->body, 'videos')) {
                    throw new Exception(sprintf($error, 'video'));
                }
                break;
        }
        return true;
    }

    public function storeFile(string $path_original, string $dir): bool
    {
        return
            (bool) $this->getStorage()->put(
                $dir . '/' . $this->buildName($path_original),
                $this->getContents($path_original)
            );
    }
}
