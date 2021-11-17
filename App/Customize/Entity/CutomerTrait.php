<?php

namespace Customize\Entity;

use Doctrine\ORM\Mapping as ORM;
use Eccube\Annotation as Eccube;

/**
 * @Eccube\EntityExtension("Eccube\Entity\Customer")
 */
trait CustomerTrait
{

  /**
   * @var Shop
   *
   * @ORM\ManyToOne(targetEntity="Plugin\ShoppingMall\Entity\Shop")
   * @ORM\JoinColumns({
   *   @ORM\JoinColumn(name="shop_id", referencedColumnName="id")
   * })
   */
  private $Shop;
  /**
   *
   * @var string
   *
   * @ORM\Column(name="address", type="string", length=255)
   */
  private $address;

  /**
   * @return Shop
   */
  public function getShop()
  {
    return $this->Shop;
  }

  /**
   * Set Shop
   *
   * @param string $shop
   *
   * @return $this
   */
  public function setShop($shop)
  {
    $this->Shop = $shop;
    return $this;
  }

  /**
   * Get address
   *
   * @return string
   */
  public function getAddress()
  {
    return $this->address;
  }

  /**
   * Set address
   *
   * @param string $address
   *
   * @return $this
   */
  public function setAddress($address)
  {
    $this->address = $address;
    return $this;
  }

  /** Added Code form here */

  /**
   * @var string
   *
   * @ORM\Column(name="mobile_number")
   * @Eccube\Annotation\FormAppend(
   *     auto_render=false,
   *     type="\Symfony\Component\Form\Extension\Core\Type\TextType",
   *     options={
   *          "required": false,
   *          "label": "携帯電話番号",
   *          "attr": {"placeholder": "例：09000000000"}
   *     })
   */
  private $mobile_number;

  /**
   * get mobile number
   *
   * @return string $mobile_number
   */
  public function getMobileNumber()
  {
    return $this->mobile_number;
  }

  /**
   * Set mobile number
   *
   * @param string $mobile_number
   *
   * @return $this
   */
  public function setMobileNumber($mobile_number)
  {
    $this->mobile_number = $mobile_number;
    return $this;
  }
  /* Added codes by this line*/
}
