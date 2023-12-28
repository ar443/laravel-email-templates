<?php
namespace ar443\LaravelEmailTemplate;

use Illuminate\Support\Facades\File;

class PackageCleanup
{
    public static function handle()
    {
        self::cleanupMigrations();

        self::cleanupViews();

        self::cleanupPublicAssets();
    }

    protected static function cleanupMigrations()
    {
        $migrationFilePath = database_path('migrations/2023_11_14_071549_create_email_templates_table.php');

        if (File::exists($migrationFilePath)) {
            File::delete($migrationFilePath);
        }
    }

    protected static function cleanupViews()
    {
        self::deleteDirectory(resource_path('views/LaravelEmailTemplate'));
    }

    protected static function cleanupPublicAssets()
    {
        self::deleteDirectory(public_path('LaravelEmailTemplate'));
    }

    protected static function deleteDirectory($path)
    {
        if (File::exists($path)) {
            File::deleteDirectory($path);
        }
    }
}


?>