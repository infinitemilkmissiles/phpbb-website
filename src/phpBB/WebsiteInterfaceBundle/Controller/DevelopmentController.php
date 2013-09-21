<?php
/**
 *
 * @package phpBBWebsiteInterfaceBundle
 * @copyright (c) 2013 phpBB Group
 * @license http://opensource.org/licenses/gpl-3.0.php GNU General Public License v3
 * @author MichaelC
 *
 */

namespace phpBB\WebsiteInterfaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DevelopmentController extends Controller
{
	public function homeAction()
	{
		$templateVariables = array(
			'header_css_image'		=> 'development',
		);

		return $this->render('phpBBWebsiteInterfaceBundle:Development:home.html.twig', $templateVariables);
	}
}