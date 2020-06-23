<?php

namespace DingTalkRobot;

/**
 * Class GroupChat
 * @package DingTalkRobot
 */
class GroupChat
{
    /**
     * @var string $token 要发送的钉钉群的token
     */
    private $token;

    /**
     * GroupChat constructor.
     * @param string $name 钉钉群名
     */
    public function __construct($name = 'default')
    {
        $this->setToken($name);
    }

    /**
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * @param string $param
     */
    private function setToken($param)
    {
        $this->token = isset(Config::$groups[$param]) ? Config::$groups[$param] : $param;
    }
}
