<?php
namespace Strapieno\NightClubGirlAvatar\Model;

/**
 * Interface AvatarAwareInterface
 */
interface AvatarAwareInterface
{
    /**
     * return string
     */
    public function getCover();

    /**
     * @param $cover string
     * @return mixed
     */
    public function setCover($cover);
}