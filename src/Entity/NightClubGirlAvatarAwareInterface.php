<?php
namespace Strapieno\NightClubGirlAvatar\Model;

/**
 * Interface NightClubGirlAvatarAwareInterface
 */
interface NightClubGirlAvatarAwareInterface
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