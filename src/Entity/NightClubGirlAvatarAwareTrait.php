<?php
namespace Strapieno\NightClubGirlAvatar\Model;

/**
 * Class NightClubGirlAvatarAwareTrait
 */
trait NightClubGirlAvatarAwareTrait
{
    /**
     * @var string
     */
    protected $cover;

    /**
     * @return string
     */
    public function getCover()
    {
        return $this->cover;
    }

    /**
     * @param string $cover
     * @return $this
     */
    public function setCover($cover)
    {
        $this->cover = $cover;
        return $this;
    }
}