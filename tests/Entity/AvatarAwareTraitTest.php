<?php
namespace Strapieno\NightClubCover\ModelTest\Entity;

use Strapieno\NightClubGirlAvatar\Model\Entity\AvatarAwareTrait;
use Strapieno\NightClubGirlAvatar\Model\Entity\AvatarEntity;

/**
 * Class AvatarAwareTraitTest
 */
class AvatarAwareTraitTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var AvatarAwareTrait
     */
    protected $mockTrait;

    public function setUp()
    {
        $this->mockTrait = $this->getMockForTrait('Strapieno\NightClubGirlAvatar\Model\Entity\AvatarAwareTrait');
    }

    public function testGetterSetter()
    {
        $input = 'test';
        $this->mockTrait->setAvatar($input);
        $this->assertSame($input, $this->mockTrait->getAvatar() );
    }
}