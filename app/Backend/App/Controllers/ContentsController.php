<?php
/**
 * File defining App\Controllers\ContentsController
 *
 * PHP Version 5.3
 *
 * @category   Backend
 * @package    App
 * @subpackage Controllers
 * @author     J Jurgens du Toit <jrgns@backend-php.net>
 * @copyright  2011 - 2012 Jade IT (cc)
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 * @link       http://backend-php.net
 */
namespace Backend\App\Controllers;
use \Backend\Base\Utilities\Renderable;
/**
 * An example controller containing some sample code
 *
 * @category   Backend
 * @package    App
 * @subpackage Controllers
 * @author     J Jurgens du Toit <jrgns@backend-php.net>
 * @license    http://www.opensource.org/licenses/mit-license.php MIT License
 * @link       http://backend-php.net
 */
class ContentsController extends \Backend\Base\Controller
{
    /**
     * The show function
     *
     * @return string The content to show
     */
    public function showAction($name = 'home')
    {
        return $name;
    }

    /**
     * A function showing the specified content
     *
     * @param mixed $result The result returned from showAction
     *
     * @return \Backend\Base\Utilities\Renderable
     */
    public function showHtml($result)
    {
        return $this->render($result);
    }
}
