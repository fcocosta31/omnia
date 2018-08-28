<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_user.resetting.controller' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once $this->targetDirs[3].'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Controller/ResettingController.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/TokenGeneratorInterface.php';
include_once $this->targetDirs[3].'/vendor/friendsofsymfony/user-bundle/Util/TokenGenerator.php';

$this->services['fos_user.resetting.controller'] = $instance = new \FOS\UserBundle\Controller\ResettingController(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.resetting.form.factory']) ? $this->services['fos_user.resetting.form.factory'] : $this->load('getFosUser_Resetting_Form_FactoryService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.user_manager']) ? $this->services['fos_user.user_manager'] : $this->load('getFosUser_UserManagerService.php')) && false ?: '_'}, ${($_ = isset($this->services['fos_user.util.token_generator']) ? $this->services['fos_user.util.token_generator'] : $this->services['fos_user.util.token_generator'] = new \FOS\UserBundle\Util\TokenGenerator()) && false ?: '_'}, ${($_ = isset($this->services['fos_user.mailer']) ? $this->services['fos_user.mailer'] : $this->load('getFosUser_MailerService.php')) && false ?: '_'}, 7200);

$instance->setContainer($this);

return $instance;
