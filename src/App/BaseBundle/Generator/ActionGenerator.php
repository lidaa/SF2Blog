<?php

namespace App\BaseBundle\Generator;

/**
 * ActionGenerator.
 *
 * @author Oukha Adil
 */
class ActionGenerator {

    private static $_actionTemplate =
            '
    public function {{ actionName }}Action() {
        return $this->render(\'{{ bundleName }}:{{ controllerName }}:{{ actionName }}.html.{{ templateEngine }}\', array(\'\' => \'\'));
    }
';

    /**
     * Generate code action
     * @return string $code	
     */
    private function _generateActionCode($value) {
        return str_replace('{{ actionName }}', $value, self::$_actionTemplate);
    }

    /**
     * Generate code actions
     * @param string $listActions
     * @return string $code	
     */
    public function generateActionsCode($listActions) {
        if ($listActions) {
            $e = explode(' ', trim($listActions));
            $actionsCode = "";
            foreach ($e as $value) {
                $actionCode = $this->_generateActionCode(lcfirst($value));
                $actionsCode = "$actionsCode $actionCode";
            }
        }
        return $actionsCode;
    }

}
