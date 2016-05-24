<?php
namespace Strapieno\NightClubGirlAvatar\Model;

/**
 * Class AvatarAwareTrait
 */
trait AvatarAwareTrait
{
    /**
     * @var string
     */
    protected $avatar;

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     * @return $this
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;
        return $this;
    }
}