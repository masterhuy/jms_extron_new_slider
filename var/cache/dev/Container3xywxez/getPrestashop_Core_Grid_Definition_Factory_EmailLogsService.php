<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.core.grid.definition.factory.email_logs' shared service.

$this->services['prestashop.core.grid.definition.factory.email_logs'] = $instance = new \PrestaShop\PrestaShop\Core\Grid\Definition\Factory\EmailLogsDefinitionFactory(${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}->generate("admin_common_reset_search", array("controller" => "email", "action" => "index")), ${($_ = isset($this->services['prestashop.router']) ? $this->services['prestashop.router'] : $this->load('getPrestashop_RouterService.php')) && false ?: '_'}->generate("admin_emails_index"), ${($_ = isset($this->services['prestashop.core.form.choice_provider.language_by_id']) ? $this->services['prestashop.core.form.choice_provider.language_by_id'] : $this->load('getPrestashop_Core_Form_ChoiceProvider_LanguageByIdService.php')) && false ?: '_'});

$instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
$instance->setHookDispatcher(${($_ = isset($this->services['prestashop.core.hook.dispatcher']) ? $this->services['prestashop.core.hook.dispatcher'] : $this->getPrestashop_Core_Hook_DispatcherService()) && false ?: '_'});

return $instance;
