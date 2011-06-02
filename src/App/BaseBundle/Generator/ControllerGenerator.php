<?php

namespace App\BaseBundle\Generator;

/**
 * ControllerGenerator.
 *
 * @author Oukha Adil
 */
class ControllerGenerator {

    private static $_controllerTemplate =
            '<?php

namespace {{ nameSpace }};

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class {{ controllerName }}Controller extends Controller
{
	{{ controllerBody }}
}
';

    /**
     * Generate code controller
     * @param string $listAction
     * @return string $code	
     */
    public function generateControllerCode($listAction) {
        $allActions = $this->_generateControllerBody($listAction);
        return str_replace('{{ controllerBody }}', $allActions, self::$_controllerTemplate);
    }

    /**
     * Generate code body controller
     * @param string $listAction
     * @return string $body	
     */
    private function _generateControllerBody($listAction) {
        $actionGenerator = new ActionGenerator();
        return $actionGenerator->generateActionsCode($listAction);
    }

}
