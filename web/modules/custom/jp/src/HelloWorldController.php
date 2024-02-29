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

    public function index(): \Symfony\Component\HttpFoundation\JsonResponse {
        return new \Symfony\Component\HttpFoundation\JsonResponse(['Hello World ' . $this->currentUser()->getEmail()]);
    }
}