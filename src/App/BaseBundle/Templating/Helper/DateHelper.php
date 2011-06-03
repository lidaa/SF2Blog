<?php

namespace App\BaseBundle\Templating\Helper;

use Symfony\Component\Templating\Helper\Helper;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * DateHelper provides methods managing objects of Date and DateTime.
 *
 * @author Adil Oukha 
 */
class DateHelper extends Helper
{
    protected $container;
    protected $dateFormatter;

	/**
	* Constructor.
	*
	* @param Router $router A Router instance
	*/
    public function __construct()
    {
        //$this->container = $container;
    }

	public function format($date, $format = null)
	{
        if (!$date instanceof DateTime) {
        }
        if ($format) {
            return $date->format($format);
        }
        // if (null === $this->dateFormatter) {
            // $this->dateFormatter = new \IntlDateFormatter(
                // $this->container->get('session')->getLocale(),
                // IntlDateFormatter::MEDIUM,
                // IntlDateFormatter::SHORT
            // );
        // }
        // for compatibility with PHP 5.3.3
        //$date = $date->getTimestamp();
        return $this->dateFormatter->format($date);
	}

	/**
	* Returns the canonical name of this helper.
	*
	* @return string The canonical name
	*/
	public function getName()
	{
		return 'date';
	}
}
