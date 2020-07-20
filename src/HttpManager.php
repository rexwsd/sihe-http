<?php

namespace Sihe\Http;


use Sihe\Http\Contracts\Http\Factory;
use Illuminate\Support\Manager;
use Sihe\Http\Request\SiheRequest;

/**
 * Class HttpManager
 *
 * @package App\Library\Http
 */
class HttpManager extends Manager implements Factory
{
    /**
     * The application instance.
     *
     * @var
     */
    protected $app;

    /**
     * 选择服务
     *
     * @param null $name
     *
     * @return mixed
     * @author chenpeng1@guahao.com
     */
    public function with($name = null)
    {
        return $this->driver($name);
    }

    /**
     * Notes: 示例 创建一个java HTTP请求服务
     * @return SiheRequest Java
     * @author: Rex.栗田庆
     * @Date: 2020-07-20
     * @Time: 11:24
        public function createJavaDriver()
        {
            return new Java($this->app, $this->getConfig('java'));
        }
    */


    /**
     *  获取默认驱动
     *
     * @return mixed
     * @author chenpeng1@guahao.com
     */
    public function getDefaultDriver()
    {
        return 'default';
    }

    /**
     * 获取驱动对应的配置
     *
     * @param $name
     *
     * @return mixed
     * @author chenpeng1@guahao.com
     */
    protected function getConfig($name)
    {
        return $this->app['config']['http'][$name];
    }


}
