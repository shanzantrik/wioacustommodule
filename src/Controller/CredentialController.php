<?php

namespace Drupal\credential_tool\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\block_content\Entity\BlockContent;
// use Drupal\Core\Entity\EntityInterface;

/**
 * Provides route responses for the Example module.
 */
class CredentialController extends ControllerBase
{

        /**
         * Returns a simple page.
         *
         * @return array
         *   A simple renderable array.
         */

        public function credentialTool()
        {
                $build = [
                        '#theme' => 'cred_template',
                        '#attached' => [
                                'library' => [
                                        'credential_tool/credential_tool'
                                ],
                        ],
                        '#cred_block' => 'credential-tool-target',
                ];
                return $build;
        }
}
