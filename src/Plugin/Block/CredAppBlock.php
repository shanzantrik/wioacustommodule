<?php

namespace Drupal\credential_tool\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'CredAppBlock' block.
 *
 * @Block(
 *  id = "credapp_block",
 *  admin_label = @Translation("Credential App Block"),
 * )
 */
class CredAppBlock extends BlockBase
{

        /**
         * {@inheritdoc}
         */
        public function build()
        {
                return [
                        '#markup' => '<div id="my-react-target"></div>',
                        '#attached' => [
                                'library' => [
                                        'credential_tool/credential_tool',
                                ],
                        ],
                ];
        }
}
