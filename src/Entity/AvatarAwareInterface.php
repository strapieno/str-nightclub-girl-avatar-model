<?php
namespace Strapieno\NightClubGirlAvatar\Model\Entity;

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