<?php

namespace App\Helpers;

use Throwable;
use DOMDocument;
use Carbon\Carbon;
use App\Models\Blog;
use App\Models\Country;
use App\Models\Category;
use App\Models\SystemSetting;
use App\Services\NotificationService;
use Illuminate\Support\Facades\Storage;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class Helper
{
    // return assets path (like http://localhost/project/public/css or js or static images)
    public static function assets($path, $secure = null)
    {
        if (config('app.env') == "local") {
            return app('url')->asset($path, $secure);
        } else if (config('app.env') == "staging") {
            return app('url')->asset($path, $secure);
        } else if (config('app.env') == "production") {
            return app('url')->asset($path, $secure);
        }
        return app('url')->asset("public/" . $path, $secure);
    }

    // return media (storage disk) relative path (like http://localhost/project/public/storage/)
    public static function media($path, $secure = null)
    {
        if (config('app.env') == "local") {
            return app('url')->asset("storage" . $path, $secure);
        } else if (config('app.env') == "staging") {
            return app('url')->asset("storage" . $path, $secure);
        } else if (config('app.env') == "production") {
            return app('url')->asset("storage" . $path, $secure);
        }
        return app('url')->asset("storage/public" . $path, $secure);
    }

    // Upload Images, Document
    public static function uploadFile($fileData = Null, $path = Null, $filename = Null, $oldFilename = null)
    {
        if (!is_null($fileData)) {
            if (config('app.env') == "local") {
                /** @var Illuminate\Filesystem\FilesystemAdapter */
                $filesystem = Storage::disk('public');
                $filesystem->putFileAs('', $fileData, $path . $filename);

                if (!is_null($oldFilename) && Storage::disk('public')->exists($path . $oldFilename)) {
                    Storage::disk('public')->delete($path . $oldFilename);
                }
            } else if (config('app.env') == "staging") {
                /** @var Illuminate\Filesystem\FilesystemAdapter */
                $filesystem = Storage::disk('public');
                $filesystem->putFileAs('', $fileData, $path . $filename);

                if (!is_null($oldFilename) && Storage::disk('public')->exists($path . $oldFilename)) {
                    Storage::disk('public')->delete($path . $oldFilename);
                }
            } else if (config('app.env') == "production") {
                /** @var Illuminate\Filesystem\FilesystemAdapter */
                $filesystem = Storage::disk('public');
                $filesystem->putFileAs('', $fileData, $path . $filename);

                if (!is_null($oldFilename) && Storage::disk('public')->exists($path . $oldFilename)) {
                    Storage::disk('public')->delete($path . $oldFilename);
                }
            }

            self::optimizeImage($path, $filename);

            return self::media($path . $filename);
        }
        return false;
    }

    // Delete a File
    public static function deleteFile($path = Null, $filename = Null)
    {
        if (!is_null($filename) && !empty($filename)) {
            if (config('app.env') == "local") {
                if (Storage::disk('public')->exists($path . $filename)) {
                    Storage::disk('public')->delete($path . $filename);
                }
            } else if (config('app.env') == "staging") {
                if (Storage::disk('public')->exists($path . $filename)) {
                    Storage::disk('public')->delete($path . $filename);
                }
            } else if (config('app.env') == "production") {
                if (Storage::disk('public')->exists($path . $filename)) {
                    Storage::disk('public')->delete($path . $filename);
                }
            }
        }
        return true;
    }

    // Delete a Directory
    public static function deleteDirectory($path = Null)
    {
        if (!is_null($path)) {
            if (config('app.env') == "local") {
                /** @var Illuminate\Filesystem\FilesystemAdapter */
                $filesystem = Storage::disk('public');
                if ($filesystem->exists($path)) {
                    $filesystem->deleteDirectory($path);
                }
            } else if (config('app.env') == "staging") {
                /** @var Illuminate\Filesystem\FilesystemAdapter */
                $filesystem = Storage::disk('public');
                if ($filesystem->exists($path)) {
                    $filesystem->deleteDirectory($path);
                }
            } else if (config('app.env') == "production") {
                /** @var Illuminate\Filesystem\FilesystemAdapter */
                $filesystem = Storage::disk('public');
                if ($filesystem->exists($path)) {
                    $filesystem->deleteDirectory($path);
                }
            }
        }
        return true;
    }

    // Check file exists or not - return absolute path (Full path like - var/www/html/project/public) with filename
    public static function checkFileExists($path, $filename, $returnOnlyPath = false)
    {
        if (config('app.env') == "local") {
            if (Storage::disk('public')->exists($path . $filename)) {
                /** @var Illuminate\Filesystem\FilesystemAdapter */
                $filesystem = Storage::disk('public');
                return $filesystem->path($path . $filename);
            } else if ($returnOnlyPath) {
                return Storage::disk('public')->path($path . $filename);
            }
        } else if (config('app.env') == "staging") {
            if (Storage::disk('public')->exists($path . $filename)) {
                /** @var Illuminate\Filesystem\FilesystemAdapter */
                $filesystem = Storage::disk('public');
                return $filesystem->path($path . $filename);
            } else if ($returnOnlyPath) {
                return Storage::disk('public')->path($path . $filename);
            }
        } else if (config('app.env') == "production") {
            if (Storage::disk('public')->exists($path . $filename)) {
                /** @var Illuminate\Filesystem\FilesystemAdapter */
                $filesystem = Storage::disk('public');
                return $filesystem->path($path . $filename);
            } else if ($returnOnlyPath) {
                return Storage::disk('public')->path($path . $filename);
            }
        }
        return "";
    }

    // Copy file from one location to another location
    public static function copyFile($sourceFilepath = Null, $destinationFilepath = null, $filename = null, $is_delete_source_file = true, $newFilename = null)
    {
        if (!is_null($sourceFilepath) && !is_null($destinationFilepath) && !is_null($filename)) {
            if (config('app.env') == "local") {
                if (Storage::disk('public')->exists($sourceFilepath . $filename)) {
                    Storage::disk('public')->copy($sourceFilepath . $filename, $destinationFilepath . ($newFilename ?? $filename));
                    if ($is_delete_source_file) {
                        Storage::disk('public')->delete($sourceFilepath . $filename);
                    }
                }
            } else if (config('app.env') == "staging") {
                if (Storage::disk('public')->exists($sourceFilepath . $filename)) {
                    Storage::disk('public')->copy($sourceFilepath . $filename, $destinationFilepath . ($newFilename ?? $filename));
                    if ($is_delete_source_file) {
                        Storage::disk('public')->delete($sourceFilepath . $filename);
                    }
                }
            } else if (config('app.env') == "production") {
                if (Storage::disk('public')->exists($sourceFilepath . $filename)) {
                    Storage::disk('public')->copy($sourceFilepath . $filename, $destinationFilepath . ($newFilename ?? $filename));
                    if ($is_delete_source_file) {
                        Storage::disk('public')->delete($sourceFilepath . $filename);
                    }
                }
            }
        }
        return true;
    }

    /**
     * Save base64 encoded image to storage
     *
     * @param string $base64Image The base64 encoded image
     * @param string $folder The folder where the image will be saved, default is 'uploads/temp'
     * @param string $extension The file extension of the image, default is 'png'
     * @return array|null The path and name of the saved image, or null if an error occurs
     */
    public static function saveBase64Image($base64Image, $folder = 'uploads/temp', $extension = 'png')
    {
        try {
            if (preg_match('/^data:image\/(\w+);base64,/', $base64Image, $type)) {
                $base64Image = substr($base64Image, strpos($base64Image, ',') + 1);
                $extension = strtolower($type[1]); // jpg, png, gif
            }

            $base64Image = str_replace(' ', '+', $base64Image);
            $imageData = base64_decode($base64Image);
            if ($imageData === false) {
                return null;
            }
            $fileName = uniqid('img_') . '.' . $extension;
            $filePath = $folder . $fileName;
            Storage::disk('public')->put($filePath, $imageData);
            return ['path' => Helper::media($filePath), 'name' => $fileName];
        } catch (Throwable $e) {
            report($e);
            return null;
        }
    }

    /**
     * Generates a filename based on the original file name,
     * sanitized with dashes and with a timestamp and random number
     * appended to it.
     *
     * @param  \Illuminate\Http\UploadedFile  $file
     * @return string
     */
    public static function getFilename($file)
    {
        $originalName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $sanitized = \Illuminate\Support\Str::slug($originalName, '-');
        $ext = $file->getClientOriginalExtension();
        return $sanitized . '-' . Carbon::now()->timestamp . '-' . mt_rand(1, 100) . '.' . $ext;
    }

    // Optimize image size
    public static function optimizeImage($path, $filename)
    {
        try {
            if ($pathToImage = self::checkFileExists($path, $filename)) {
                $optimizerChain = OptimizerChainFactory::create();
                $optimizerChain->optimize($pathToImage);
            }
        } catch (Throwable $e) {
            report('Helper ' . $e);
        }
    }

    // Create image thumbnail
    public static function createThumbnail($path, $filename)
    {
        try {
            if ($pathToImage = self::checkFileExists($path, $filename)) {
                $filePath = self::assets($path . $filename);
                $ext =  pathinfo(parse_url($filePath, PHP_URL_PATH), PATHINFO_EXTENSION);
                $width = 60;
                $height = 60;

                list($width_orig, $height_orig) = getimagesize($filePath);

                $new_width  =   $width;
                $new_height =   floor($height_orig * ($new_width / $width_orig));
                $crop_x     =   0;
                $crop_y     =   ceil(($height - $width) / 2);
                $ratio_orig = $width_orig / $height_orig;
                $height = $height;
                $width = $width;

                $image_p = imagecreatetruecolor($width, $height);

                if ($ext == 'jpeg' || $ext == 'jpg' || exif_imagetype($filePath) === 2) {
                    $image = imagecreatefromjpeg($filePath);
                } else if ($ext == 'png' || exif_imagetype($filePath) === 3) {
                    $image = imagecreatefrompng($filePath);
                } else if ($ext == 'webp' || exif_imagetype($filePath) === 18) {
                    $image = imagecreatefromwebp($filePath);
                }

                imagecopyresampled($image_p, $image, 0, 0, $crop_x, $crop_y, $new_width, $new_height, $width_orig, $height_orig);

                $thumbPath = $path . 'thumb/' . $filename;
                if ($ext == 'jpeg' || $ext == 'jpg' || exif_imagetype($filePath) === 2) {
                    ob_start();
                    imagejpeg($image_p, null, 100);
                    $imageData = ob_get_clean();
                    Storage::disk('public')->put($thumbPath, $imageData);
                } else if ($ext == 'png' || exif_imagetype($filePath) === 3) {
                    ob_start();
                    imagepng($image_p, null, 9);
                    $imageData = ob_get_clean();
                    Storage::disk('public')->put($thumbPath, $imageData);
                } else if ($ext == 'webp' || exif_imagetype($filePath) === 18) {
                    ob_start();
                    imagewebp($image_p, null, 9);
                    $imageData = ob_get_clean();
                    Storage::disk('public')->put($thumbPath, $imageData);
                }
            }
        } catch (Throwable $e) {
            report('Helper ' . $e);
        }
    }

    public static function replaceImagePath($text = "", $path)
    {
        $htmlDom = new DOMDocument();
        $htmlDom->loadHTML($text);
        $imageTags = $htmlDom->getElementsByTagName('img');
        $pattern = '/data:image\/(png|jpeg|jpg|gif|webp);base64,([A-Za-z0-9+\/=]+)/';
        if (!empty($imageTags)) {
            foreach ($imageTags as $imageTag) {
                $imgSrc = $imageTag->getAttribute('src');
                if ($imgSrc) {
                    if (preg_match($pattern, $imgSrc, $matches)) {
                        $image = explode(';base64,', $matches[0]);
                        if (count($image) === 2) {
                            $extension = 'png';
                            if (preg_match('/^data:image\/(\w+)/', $image[0], $type) && array_key_exists(1, $type)) {
                                $extension = strtolower($type[1]);
                            }
                            $img_response = Helper::saveBase64Image($image[1], $path, $extension);
                            if ($img_response && isset($img_response['path'])) {
                                $text = str_replace($imgSrc, $img_response['path'], $text);
                            }
                        }
                    } else {
                        $file = pathinfo($imgSrc);
                        $filename = $file['basename'];
                        self::copyFile(config('constant.paths.temp_file_url'), $path, $filename);
                    }
                }
            }
            $text = str_replace(config('constant.paths.temp_file_url'), $path, $text);
        }

        $inputTags = $htmlDom->getElementsByTagName('input');
        if (!empty($inputTags)) {
            foreach ($inputTags as $inputTag) {
                $imgType = $inputTag->getAttribute('type');
                if ($imgType == "image") {
                    $imgSrc = $inputTag->getAttribute('src');
                    if ($imgSrc) {
                        $file = pathinfo($imgSrc);
                        $filename = $file['basename'];
                        self::copyFile(config('constant.paths.temp_file_url'), $path, $filename);
                    }
                }
            }
            $text = str_replace(config('constant.paths.temp_file_url'), $path, $text);
        }

        return $text;
    }

    public static function getHumanReadableFormat($datetime, $format = "")
    {
        $datetime = Carbon::createFromTimeStamp(strtotime($datetime));
        if ($format != "") {
            return $datetime->format($format);
        }
        if ($datetime->isToday()) {
            return 'Today';
        } else if ($datetime->isYesterday()) {
            return 'Yesterday';
        } else if ($datetime->diffInDays(Carbon::now()) < 7) {
            return $datetime->diffForHumans();
        }
        return $datetime->format('d/m/Y');
    }

    // Get all Settings
    public static function getSetting($id = 1)
    {
        $Setting = SystemSetting::select('*');
        if (!is_null($id)) {
            $Setting->where('id', $id);
        }
        return $Setting->first();
    }

    // Get all countries
    public static function getCountry($params = [])
    {
        $records = Country::select('*')
            ->when((isset($params['status'])), function ($query) use ($params) {
                $query->where('status', $params['status']);
            }, function ($query) {
                $query->where('status', 1);
            })->when((isset($params['isd_code'])), function ($query) use ($params) {
                $query->orderBy('isd_code', $params['isd_code']);
            });

        if (isset($params['id']) && !empty($params['id'])) {
            return $records->where('id', $params['id'])->first();
        }
        return $records->get();
    }

    // Get all categories
    public static function getCategory($params = [])
    {
        $categories = Category::select('*');
        if (isset($params['id']) && !empty($params['id'])) {
            return $categories->where('id', $params['id'])->first();
        }
        return $categories->get();
    }

    // Create slug for url
    public static function createSlug($title, $id = null, $type = "blog")
    {
        // Normalize the title
        $slug = $title;

        $i = 1;
        $new_slug = $slug;

        while (self::getRelatedSlugs($new_slug, $id, $type)) {
            $new_slug = $slug . '-' . $i;
            $i++;
        }

        return $new_slug;
    }

    // check slug already exists
    public static function getRelatedSlugs($slug, $id = null, $type = "blog")
    {
        if ($type == "blog") {
            $data = Blog::select('slug');
        } else {
            $data = null;
        }
        if ($data != null) {
            $data->where('slug', 'like', $slug . '%');
            if ($id != null) {
                $data->where('id', '<>', $id);
            }
            return $data->exists();
        }
        return false;
    }

    /**
     * Convert In Html
     *
     * @param  mixed $msg
     * @return void
     */
    public static function convertInHtml($msg = "")
    {
        $url = '@(http(s)?)?(://)?(([a-zA-Z])([-\w]+\.)+([^\s\.]+[^\s]*)+[^,.\s])@';
        $msg = preg_replace(
            $url,
            '<a href="http$2://$4" target="_blank">$0</a>',
            $msg
        );
        $msg = str_ireplace(
            array("\r\n\t", '\r\n\t', "\r\n", '\r\n', "\n", '\n', "\t", '\t'),
            '<br/>',
            $msg
        );
        return $msg;
    }

    /**
     * Get Prefix Based On Extension
     *
     * @param  mixed $ext
     * @return void
     */
    public static function getPrefixBasedOnExtension($ext = "")
    {
        $prefix = "";
        if (in_array($ext, ['png', 'jpeg', 'jpg', 'svg', 'gif'])) {
            $prefix = "IMG";
        } else if (in_array($ext, ['mp4', 'mkv', 'webm', 'mov'])) {
            $prefix = "VID";
        } else if (in_array($ext, ['pdf'])) {
            $prefix = "PDF";
        } else if (in_array($ext, ['doc', 'docx'])) {
            $prefix = "DOC";
        } else if (in_array($ext, ['xls', 'xlsx'])) {
            $prefix = "EXL";
        }
        return $prefix;
    }

    /**
     * Find Distance
     *
     * @param  mixed $latitude
     * @param  mixed $longitude
     * @return void
     */
    public static function findDistance($latitude, $longitude)
    {
        return "(6371 * acos(cos(radians($latitude))
        * cos(radians(latitude))
        * cos(radians(longitude)
        - radians($longitude))
        + sin(radians($latitude))
        * sin(radians(latitude))))";
    }

    /**
     * Social Media Share Url
     *
     * @param  mixed $type
     * @param  mixed $link
     * @param  mixed $message
     * @param  mixed $param
     * @return void
     */
    public static function socialMediaShareUrl($type, $link, $message, $param = '')
    {
        $url = '';
        switch ($type) {
            case 'fb':
                $url = config('constant.facebook_share_url');
                $url = str_replace('{href}', $link, $url);
                $url = str_replace('{redirect_uri}', $link, $url);
                $url = str_replace('{quote}', $message, $url);
                break;
            case 'twit':
                $url = config('constant.twitter_share_url');
                $url = str_replace('{url}', $link, $url);
                $url = str_replace('{text}', $message, $url);
                break;

            default:
                break;
        }
        return $url;
    }

    /**
     * groupByDate
     *
     * @param  mixed $records
     * @return void
     */
    public static function groupByDate($records)
    {
        return $records->groupBy(function ($item) {
            $createdAt = Carbon::parse($item->created_at);
            if ($createdAt->isToday()) {
                return 'TODAY';
            } elseif ($createdAt->isYesterday()) {
                return 'YESTERDAY';
            } elseif ($createdAt->isCurrentWeek()) {
                return 'THIS WEEK';
            } elseif ($createdAt->format('W') == Carbon::now()->subWeek()->format('W')) {
                return 'LAST WEEK';
            } elseif ($createdAt->isCurrentMonth()) {
                return 'THIS MONTH';
            } elseif ($createdAt->format('m-Y') == Carbon::now()->subMonth()->format('m-Y')) {
                return 'LAST MONTH';
            } else {
                return 'OLDER';
            }
        });
    }

    /**
     * getFileSize
     *
     * @param  mixed $attachment
     * @return void
     */
    public static function getFileSize($attachment)
    {
        return self::convertToReadableSize(filesize($attachment));
    }

    /**
     * convertToReadableSize
     *
     * @param  mixed $size
     * @return void
     */
    public static function convertToReadableSize($size)
    {
        $base = log($size) / log(1024);
        $suffix = array("", "KB", "MB", "GB", "TB");
        $f_base = floor($base);
        return round(pow(1024, $base - floor($base)), 1) . $suffix[$f_base];
    }

    /**
     * get notifications
     *
     * @param  mixed $size
     * @return void
     */
    public static function getNotification($params = array())
    {
        try {
            return NotificationService::getNotification($params);
        } catch (Throwable $e) {
            report($e);
            return "";
        }
    }

    /**
     * Encrypted ID
     *
     * @param  mixed $id
     * @return mixed
     */
    public static function getEncryptedId($id)
    {
        $encrypted_string = openssl_encrypt($id, config('services.encryption.type'), config('services.encryption.secret'), 0, config('services.encryption.encryption_iv'));
        return base64_encode($encrypted_string);
    }

    /**
     * Decrypt Encrypted ID
     *
     * @param  mixed $id
     * @return mixed
     */
    public static function getDecryptedId($secret)
    {
        return openssl_decrypt(base64_decode($secret), config('services.encryption.type'), config('services.encryption.secret'), 0, config('services.encryption.encryption_iv'));
    }

    public static function countBusinessDays($startDate, $endDate)
    {
        $start = Carbon::parse($startDate)->startOfDay();
        $end = Carbon::parse($endDate)->startOfDay();

        if ($end->lt($start)) {
            return 0;
        }

        $businessDays = 0;
        $cursor = $start->copy()->addDay();

        while ($cursor->lte($end)) {
            if ($cursor->isWeekday()) {
                $businessDays++;
            }
            $cursor->addDay();
        }

        return $businessDays;
    }
}
