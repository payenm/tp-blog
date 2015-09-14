<?php

/* base.html.twig */
class __TwigTemplate_56338eddd87e649de8152d9c9325ba929d017c47a8fa8ad5cd6c0c4bda552a36 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_67eb12ac91b6124c04aed74f7a8cfb40e8194ff9845fd1a4a18cb55f1ccb7a04 = $this->env->getExtension("native_profiler");
        $__internal_67eb12ac91b6124c04aed74f7a8cfb40e8194ff9845fd1a4a18cb55f1ccb7a04->enter($__internal_67eb12ac91b6124c04aed74f7a8cfb40e8194ff9845fd1a4a18cb55f1ccb7a04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_67eb12ac91b6124c04aed74f7a8cfb40e8194ff9845fd1a4a18cb55f1ccb7a04->leave($__internal_67eb12ac91b6124c04aed74f7a8cfb40e8194ff9845fd1a4a18cb55f1ccb7a04_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_f73430a2d20695123f660c644d132d831ba1bfa71cb6e517f711773209875d27 = $this->env->getExtension("native_profiler");
        $__internal_f73430a2d20695123f660c644d132d831ba1bfa71cb6e517f711773209875d27->enter($__internal_f73430a2d20695123f660c644d132d831ba1bfa71cb6e517f711773209875d27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_f73430a2d20695123f660c644d132d831ba1bfa71cb6e517f711773209875d27->leave($__internal_f73430a2d20695123f660c644d132d831ba1bfa71cb6e517f711773209875d27_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_db1f4181d27da4140dd397de34a50fb4dd01ca4b5257cd3cda10e662f174a606 = $this->env->getExtension("native_profiler");
        $__internal_db1f4181d27da4140dd397de34a50fb4dd01ca4b5257cd3cda10e662f174a606->enter($__internal_db1f4181d27da4140dd397de34a50fb4dd01ca4b5257cd3cda10e662f174a606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_db1f4181d27da4140dd397de34a50fb4dd01ca4b5257cd3cda10e662f174a606->leave($__internal_db1f4181d27da4140dd397de34a50fb4dd01ca4b5257cd3cda10e662f174a606_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_380241331be63279cafd649cff70f39263c2cbb5e3b8c8a635c5fca6ea88636d = $this->env->getExtension("native_profiler");
        $__internal_380241331be63279cafd649cff70f39263c2cbb5e3b8c8a635c5fca6ea88636d->enter($__internal_380241331be63279cafd649cff70f39263c2cbb5e3b8c8a635c5fca6ea88636d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_380241331be63279cafd649cff70f39263c2cbb5e3b8c8a635c5fca6ea88636d->leave($__internal_380241331be63279cafd649cff70f39263c2cbb5e3b8c8a635c5fca6ea88636d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e08d74f3e09267ecec75cb308940a8bf1a5c95762ea84acc1c6f239f461e6a03 = $this->env->getExtension("native_profiler");
        $__internal_e08d74f3e09267ecec75cb308940a8bf1a5c95762ea84acc1c6f239f461e6a03->enter($__internal_e08d74f3e09267ecec75cb308940a8bf1a5c95762ea84acc1c6f239f461e6a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e08d74f3e09267ecec75cb308940a8bf1a5c95762ea84acc1c6f239f461e6a03->leave($__internal_e08d74f3e09267ecec75cb308940a8bf1a5c95762ea84acc1c6f239f461e6a03_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
