<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_5a1cbb443c8ff59a88b3c652f1f0645ffc6da095a7acfcd4958ebdbc4f6420a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89a370526463817e441cfcaa83e93c03c09aca73dfc610da232d9554d356b634 = $this->env->getExtension("native_profiler");
        $__internal_89a370526463817e441cfcaa83e93c03c09aca73dfc610da232d9554d356b634->enter($__internal_89a370526463817e441cfcaa83e93c03c09aca73dfc610da232d9554d356b634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89a370526463817e441cfcaa83e93c03c09aca73dfc610da232d9554d356b634->leave($__internal_89a370526463817e441cfcaa83e93c03c09aca73dfc610da232d9554d356b634_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e305bb3b56c3659da1db0ea1d15bc440a9351a123c72779b3f81e8d631bc7e22 = $this->env->getExtension("native_profiler");
        $__internal_e305bb3b56c3659da1db0ea1d15bc440a9351a123c72779b3f81e8d631bc7e22->enter($__internal_e305bb3b56c3659da1db0ea1d15bc440a9351a123c72779b3f81e8d631bc7e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e305bb3b56c3659da1db0ea1d15bc440a9351a123c72779b3f81e8d631bc7e22->leave($__internal_e305bb3b56c3659da1db0ea1d15bc440a9351a123c72779b3f81e8d631bc7e22_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0a5a20f41180e6edf5fb01924f0b568295257d738ed85c2f2bb45c0d9f34d87 = $this->env->getExtension("native_profiler");
        $__internal_a0a5a20f41180e6edf5fb01924f0b568295257d738ed85c2f2bb45c0d9f34d87->enter($__internal_a0a5a20f41180e6edf5fb01924f0b568295257d738ed85c2f2bb45c0d9f34d87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a0a5a20f41180e6edf5fb01924f0b568295257d738ed85c2f2bb45c0d9f34d87->leave($__internal_a0a5a20f41180e6edf5fb01924f0b568295257d738ed85c2f2bb45c0d9f34d87_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f4327be8753b51e4d18608cb48bcd20ed51aadc11de45d32af9acfe8f539521 = $this->env->getExtension("native_profiler");
        $__internal_1f4327be8753b51e4d18608cb48bcd20ed51aadc11de45d32af9acfe8f539521->enter($__internal_1f4327be8753b51e4d18608cb48bcd20ed51aadc11de45d32af9acfe8f539521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_1f4327be8753b51e4d18608cb48bcd20ed51aadc11de45d32af9acfe8f539521->leave($__internal_1f4327be8753b51e4d18608cb48bcd20ed51aadc11de45d32af9acfe8f539521_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
