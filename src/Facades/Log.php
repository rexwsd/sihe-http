<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * 创建人：Rex.栗田庆
 * 创建时间：2019-05-13 19:48
 * Class HTTP 服务 Facade
 * @method static \Sihe\Http\Request\SiheRequest get($url, $queryParams = [])
 * @method static \Sihe\Http\Request\SiheRequest with($driver)
 * @method static \Sihe\Http\Request\SiheRequest post($url, $params = [])
 * @method static \Sihe\Http\Request\SiheRequest patch($url, $params = [])
 * @method static \Sihe\Http\Request\SiheRequest put($url, $params = [])
 * @method static \Sihe\Http\Request\SiheRequest delete($url, $params = [])
 * @method static \Sihe\Http\Request\SiheRequest asJson()
 * @method static \Sihe\Http\Request\SiheRequest asFormParams()
 * @method static \Sihe\Http\Request\SiheRequest contentType($contentType)
 * @method static \Sihe\Http\Request\SiheRequest withOptions($options)
 * @method static \Sihe\Http\Request\SiheRequest withCookie(array $cookie)
 * @method static \Sihe\Http\Request\SiheRequest withHeaders($headers)
 * @method static \Sihe\Http\Request\SiheRequest timeout($seconds)
 * @method static \Sihe\Http\Request\SiheRequest retry($retry)
 * @method static \Sihe\Http\Request\SiheRequest sleep($sleep)
 * @method static \Sihe\Http\Request\SiheRequest send($method, $url, $options)
 * @method static array getOptions()
 * @method static \GuzzleHttp\Cookie\CookieJar getCookies()
 * @see \Sihe\Http\Request\SiheRequest
 */
class Http extends Facade
{
    /**
     * @return string
     * @author chenpeng1@guahao.com
     */
    protected static function getFacadeAccessor()
    {
        return 'http';
    }
}
