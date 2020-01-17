<?php

namespace App\boardcreation;


class Tile
{
    private $status = [];
    private $monster;


    /**
     * tile constructor.
     * @param bool $obstacle
     * @param bool $dungeon
     * @param string $status
     * @param bool $monster
     */
    public function __construct($obstacle, $dungeon, $status, &$monster = null)
    {

        $temp = func_get_args();
        if (isset($temp)) {
            $this->setStatus($temp);
        }

        $this->checkMonster($monster);
    }

    /**
     * @param $conditions
     */
    private function setStatus($conditions)
    {
        foreach ($conditions as $key => $condition) {
            array_push($this->status, [$key => $condition]);
        }
    }

    public function checkMonster(&$monster)
    {
        if (isset($monster)) {
            $this->monster = $monster;
        }
    }
}