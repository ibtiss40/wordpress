<?php
 namespace MailPoetVendor\Doctrine\ORM\Query\Expr; if (!defined('ABSPATH')) exit; class GroupBy extends \MailPoetVendor\Doctrine\ORM\Query\Expr\Base { protected $preSeparator = ''; protected $postSeparator = ''; protected $parts = []; public function getParts() { return $this->parts; } } 