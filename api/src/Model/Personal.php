<?php

namespace App\Model;

use DateTime;
use Symfony\Component\Serializer\Annotation\Groups;
use Symfony\Component\Serializer\Annotation\SerializedName;

/**
 *
 */
class Personal
{
    /**
     * @var string
     * @SerializedName("name_personal")
     * @Groups({"name","all"})
     */
    public $name;

    /**
     * @var int
     * @SerializedName("age_personal")
     * @Groups({"age","all"})
     */
    public $age;

    /**
     * @var DateTime
     * @SerializedName("date_personal")
     * @Groups({"date","all"})
     */
    public $date;
}