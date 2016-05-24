<?php
namespace Strapieno\NightClubGirlAvatar\Model;

/**
 * Interface AvatarAwareInterface
 */
interface AvatarAwareInterface
{
    /**
     * @return string
     */
    public function getAvatar();

    /**
     * @param string $avatar
     * @return $this
     */
    public function setAvatar($avatar);
}