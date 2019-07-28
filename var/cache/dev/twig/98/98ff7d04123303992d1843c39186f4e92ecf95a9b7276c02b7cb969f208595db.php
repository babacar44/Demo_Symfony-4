<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyAdmin/default/label_undefined.html.twig */
class __TwigTemplate_54fe90ba3d8ff056cd57b799586c8eb25d0e1261cf9153db5353ab5d7d138ab7 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyAdmin/default/label_undefined.html.twig"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/label_undefined.html.twig";
    }

    public function getDebugInfo()
    {
        return array ();
    }

    public function getSourceContext()
    {
        return new Source("{# this template is rendered when an error or exception occurs while
   trying to get the value of the field (by default nothing is displayed) #}
", "@EasyAdmin/default/label_undefined.html.twig", "/home/babacar/Vidéos/Udemy.PHP.Symfony.4.API.Platform.React.js.Full.Stack.Masterclass.Q1_p30download.com/project/vendor/easycorp/easyadmin-bundle/src/Resources/views/default/label_undefined.html.twig");
    }
}
