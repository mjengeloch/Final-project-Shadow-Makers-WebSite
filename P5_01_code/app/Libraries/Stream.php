<?php

namespace App\Libraries;

class Stream
{
    private $infoStream;
    private $infoGame;

    /**
     * @return mixed
     */
    public function getInfoStream()
    {
        return $this->infoStream;
    }

    /**
     * @param mixed $infoStream
     */
    public function setInfoStream($infoStream)
    {
        $this->infoStream = $infoStream;
    }

    /**
     * @return mixed
     */
    public function getInfoGame()
    {
        return $this->infoGame;
    }

    /**
     * @param mixed $infoGame
     */
    public function setInfoGame($infoGame)
    {
        $this->infoGame = $infoGame;
    }


}
