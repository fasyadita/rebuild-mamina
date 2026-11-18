<?php

if (!function_exists('cdn_asset')) {
    /**
     * Generate an asset path for the dedicated asset CDN subdomain.
     *
     * @param string $path
     * @param bool|null $secure
     * @return string
     */
    function cdn_asset(string $path, ?bool $secure = null): string
    {
        if (empty($path)) {
            return '';
        }

        // Return untouched if already a full URL
        if (str_starts_with($path, 'http://') || str_starts_with($path, 'https://') || str_starts_with($path, '//')) {
            return $path;
        }

        $cdnUrl = rtrim(config('app.asset_cdn_url', env('ASSET_CDN_URL', config('app.url', 'http://localhost'))), '/');
        return $cdnUrl . '/' . ltrim($path, '/');
    }
}
