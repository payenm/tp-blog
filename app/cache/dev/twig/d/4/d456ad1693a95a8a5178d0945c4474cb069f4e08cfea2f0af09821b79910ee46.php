<?php

/* BlogBundle:Default:index.html.twig */
class __TwigTemplate_d456ad1693a95a8a5178d0945c4474cb069f4e08cfea2f0af09821b79910ee46 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a5e1d12e11ebf7e15fe5ac85e2d8dc6cc0469faa032e9d0752c9804e5696b434 = $this->env->getExtension("native_profiler");
        $__internal_a5e1d12e11ebf7e15fe5ac85e2d8dc6cc0469faa032e9d0752c9804e5696b434->enter($__internal_a5e1d12e11ebf7e15fe5ac85e2d8dc6cc0469faa032e9d0752c9804e5696b434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_a5e1d12e11ebf7e15fe5ac85e2d8dc6cc0469faa032e9d0752c9804e5696b434->leave($__internal_a5e1d12e11ebf7e15fe5ac85e2d8dc6cc0469faa032e9d0752c9804e5696b434_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
