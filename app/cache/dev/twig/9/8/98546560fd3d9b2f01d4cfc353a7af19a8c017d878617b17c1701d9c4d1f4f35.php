<?php

/* base.html.twig */
class __TwigTemplate_98546560fd3d9b2f01d4cfc353a7af19a8c017d878617b17c1701d9c4d1f4f35 extends Twig_Template
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
        $__internal_94404f22bf04a559f337a4277a98e83a556660aa3e3f32aaa09a5ce92e4f8310 = $this->env->getExtension("native_profiler");
        $__internal_94404f22bf04a559f337a4277a98e83a556660aa3e3f32aaa09a5ce92e4f8310->enter($__internal_94404f22bf04a559f337a4277a98e83a556660aa3e3f32aaa09a5ce92e4f8310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_94404f22bf04a559f337a4277a98e83a556660aa3e3f32aaa09a5ce92e4f8310->leave($__internal_94404f22bf04a559f337a4277a98e83a556660aa3e3f32aaa09a5ce92e4f8310_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f9d6f548cf79655231520adb47063c61578b9b1907d1261e0dbc20483b0bbb6 = $this->env->getExtension("native_profiler");
        $__internal_2f9d6f548cf79655231520adb47063c61578b9b1907d1261e0dbc20483b0bbb6->enter($__internal_2f9d6f548cf79655231520adb47063c61578b9b1907d1261e0dbc20483b0bbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_2f9d6f548cf79655231520adb47063c61578b9b1907d1261e0dbc20483b0bbb6->leave($__internal_2f9d6f548cf79655231520adb47063c61578b9b1907d1261e0dbc20483b0bbb6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d0fd74f6f538373cddb512ca64fd85edb2213d13fda35ab6410668b3daa6efc8 = $this->env->getExtension("native_profiler");
        $__internal_d0fd74f6f538373cddb512ca64fd85edb2213d13fda35ab6410668b3daa6efc8->enter($__internal_d0fd74f6f538373cddb512ca64fd85edb2213d13fda35ab6410668b3daa6efc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d0fd74f6f538373cddb512ca64fd85edb2213d13fda35ab6410668b3daa6efc8->leave($__internal_d0fd74f6f538373cddb512ca64fd85edb2213d13fda35ab6410668b3daa6efc8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b6e8f96f1ae5b7859fda0e4d426648c249b51ad582a83c530a45ae9faa9af7d7 = $this->env->getExtension("native_profiler");
        $__internal_b6e8f96f1ae5b7859fda0e4d426648c249b51ad582a83c530a45ae9faa9af7d7->enter($__internal_b6e8f96f1ae5b7859fda0e4d426648c249b51ad582a83c530a45ae9faa9af7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b6e8f96f1ae5b7859fda0e4d426648c249b51ad582a83c530a45ae9faa9af7d7->leave($__internal_b6e8f96f1ae5b7859fda0e4d426648c249b51ad582a83c530a45ae9faa9af7d7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_098ef5d06f96fb1727b867e05f908a80923abf118379cfb70fd203b3b315d4bb = $this->env->getExtension("native_profiler");
        $__internal_098ef5d06f96fb1727b867e05f908a80923abf118379cfb70fd203b3b315d4bb->enter($__internal_098ef5d06f96fb1727b867e05f908a80923abf118379cfb70fd203b3b315d4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_098ef5d06f96fb1727b867e05f908a80923abf118379cfb70fd203b3b315d4bb->leave($__internal_098ef5d06f96fb1727b867e05f908a80923abf118379cfb70fd203b3b315d4bb_prof);

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
