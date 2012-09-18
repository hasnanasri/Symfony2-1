<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_ebc742bcecad5cc28876b0f41d081a1b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_push", array("name" => "World")), "html", null, true);
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World")), "html", null, true);
        echo "\">Access the secured area</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_login"), "html", null, true);
        echo "\">Go to the login page</a></li>
        <li><a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_contact"), "html", null, true);
        echo "\">Send a Message</a></li> 
        <li><a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store"), "html", null, true);
        echo "\">Product</a></li> 
    </ul>
    
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 13,  57 => 12,  51 => 11,  47 => 10,  43 => 8,  40 => 7,  34 => 5,  28 => 3,);
    }
}
