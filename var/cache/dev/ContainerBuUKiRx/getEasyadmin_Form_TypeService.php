<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'easyadmin.form.type' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/form/FormTypeInterface.php';
include_once $this->targetDirs[3].'/vendor/symfony/form/AbstractType.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Type/EasyAdminFormType.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Type/Configurator/TypeConfiguratorInterface.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Type/Configurator/CodeEditorTypeConfigurator.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Type/Configurator/TextareaTypeConfigurator.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Type/Configurator/AutocompleteTypeConfigurator.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Type/Configurator/CollectionTypeConfigurator.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Type/Configurator/CheckboxTypeConfigurator.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Filter/Type/Configurator/ChoiceFilterTypeConfigurator.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Type/Configurator/EntityTypeConfigurator.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Type/Configurator/IvoryCKEditorTypeConfigurator.php';
include_once $this->targetDirs[3].'/vendor/easycorp/easyadmin-bundle/src/Form/Type/Configurator/FOSCKEditorTypeConfigurator.php';

return $this->privates['easyadmin.form.type'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\EasyAdminFormType(($this->services['easyadmin.config.manager'] ?? $this->getEasyadmin_Config_ManagerService()), [9 => ($this->privates['easyadmin.form.type.configurator.code_editor'] ?? ($this->privates['easyadmin.form.type.configurator.code_editor'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CodeEditorTypeConfigurator())), 8 => ($this->privates['easyadmin.form.type.configurator.textarea'] ?? ($this->privates['easyadmin.form.type.configurator.textarea'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\TextareaTypeConfigurator())), 7 => ($this->privates['easyadmin.form.type.configurator.autocomplete'] ?? ($this->privates['easyadmin.form.type.configurator.autocomplete'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\AutocompleteTypeConfigurator())), 6 => ($this->privates['easyadmin.form.type.configurator.collection'] ?? ($this->privates['easyadmin.form.type.configurator.collection'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CollectionTypeConfigurator())), 5 => ($this->privates['easyadmin.form.type.configurator.checkbox'] ?? ($this->privates['easyadmin.form.type.configurator.checkbox'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\CheckboxTypeConfigurator())), 4 => ($this->privates['easyadmin.filter.type.configurator.choice'] ?? ($this->privates['easyadmin.filter.type.configurator.choice'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Filter\Type\Configurator\ChoiceFilterTypeConfigurator())), 3 => ($this->privates['easyadmin.form.type.configurator.type'] ?? $this->load('getEasyadmin_Form_Type_Configurator_TypeService.php')), 2 => ($this->privates['easyadmin.form.type.configurator.entity'] ?? ($this->privates['easyadmin.form.type.configurator.entity'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\EntityTypeConfigurator())), 1 => ($this->privates['easyadmin.form.type.configurator.ivory_ckeditor'] ?? ($this->privates['easyadmin.form.type.configurator.ivory_ckeditor'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\IvoryCKEditorTypeConfigurator())), 0 => ($this->privates['easyadmin.form.type.configurator.fos_ckeditor'] ?? ($this->privates['easyadmin.form.type.configurator.fos_ckeditor'] = new \EasyCorp\Bundle\EasyAdminBundle\Form\Type\Configurator\FOSCKEditorTypeConfigurator()))]);
