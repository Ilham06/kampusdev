<?php

namespace App;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

trait UploadFile
{
    /**
     * Upload file ke storage.
     *
     * @param UploadedFile $file
     * @param string $folder
     * @param string|null $disk
     * @param string|null $filename
     * @return string
     */
    public function uploadFile(UploadedFile $file, $folder = 'uploads', $disk = 'public', $filename = null)
    {
        // Buat nama file jika tidak disediakan
        $name = $filename ?: time() . '_' . $file->getClientOriginalName();

        // Simpan file dan kembalikan path-nya
        return $file->storeAs($folder, $name, $disk);
    }

    /**
     * Hapus file dari storage.
     *
     * @param string $path
     * @param string|null $disk
     * @return bool
     */
    public function deleteFile($path, $disk = 'public')
    {
        return Storage::disk($disk)->delete($path);
    }

    /**
     * Update file dengan menghapus yang lama dan meng-upload yang baru.
     *
     * @param UploadedFile $file
     * @param string $oldPath
     * @param string $folder
     * @param string|null $disk
     * @param string|null $filename
     * @return string
     */
    public function updateFile(UploadedFile $file, $oldPath, $folder = 'uploads', $disk = 'public', $filename = null)
    {
        // Hapus file lama
        $this->deleteFile($oldPath, $disk);

        // Upload file baru dan kembalikan path-nya
        return $this->uploadFile($file, $folder, $disk, $filename);
    }
}
