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
                return [
                        '#theme' => 'cred_template',
                        '#cred_var' => $this->t('Everythings working fine'),
                ];
        }
        // public function credentialTool()
        // {
        //         $bid = 'credapp_block';
        //         $block_content = BlockContent::load($bid);

        //         $rendered_block = \Drupal::entityTypeManager()
        //                 ->getViewBuilder('block_content')
        //                 ->view($block_content);

        //         $build = [
        //                 '#theme' => 'cred_template',
        //                 '#my_block' => $rendered_block,
        //         ];

        //         return $build;
        // }
        // public function credentialTool()
        // {
        //         $build = [];
        //         $build['#attached']['library'][] = 'credential_tool/credential_tool_dev';
        //         $build['#markup'] = '<div id="root"></div>';
        //         return $build;
        // }
}
