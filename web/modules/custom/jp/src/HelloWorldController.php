<?php

namespace Drupal\jp;

use Drupal\Core\Controller\ControllerBase;

/**
 *
 * @author bits.JuanDiaz <juan.diaz@bitsamericas.com>
 * @copyright Copyright (c) 2024, Bits Americas S.A.S
 * @date 2/29/2024
 * @version 1.0.0
 */
class HelloWorldController extends ControllerBase {

    /**
     * @see https://www.drupal.org/docs/develop/theming-drupal/twig-in-drupal/create-custom-twig-templates-for-custom-module
     */
    public function index(): array {

        $abcedario = range('A', 'Z');

        return [
            '#theme' => 'hello-world', //nombre del twig
            '#test_var' => $abcedario,
            '#posts' => [
                ['title' => 'Articles', 'body' => 'This is a new Article about the system'],
                ['title' => 'News', 'body' => 'This is a new Article about the system'],
            ],
        ];
    }

}