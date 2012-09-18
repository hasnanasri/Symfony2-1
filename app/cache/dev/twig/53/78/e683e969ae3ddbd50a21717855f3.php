<?php

/* AcmeStoreBundle::layout.html.twig */
class __TwigTemplate_5378e683e969ae3ddbd50a21717855f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmestore/css/demo.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"all\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"shortcut icon\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <div id=\"symfony-wrapper\">
            <div id=\"symfony-header\">
                <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_welcome"), "html", null, true);
        echo "\">
                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmedemo/images/logo.gif"), "html", null, true);
        echo "\" alt=\"Symfony\">
                </a>
                ";
        // line 20
        echo "            </div>

            ";
        // line 22
        if ($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method")) {
            // line 23
            echo "                <div class=\"flash-message\">
                    <em>Notice</em>: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "flash", array(0 => "notice"), "method"), "html", null, true);
            echo "
                </div>
            ";
        }
        // line 27
        echo "            ";
        // line 28
        echo "            ";
        // line 29
        echo "            ";
        $this->displayBlock('content_header', $context, $blocks);
        // line 38
        echo "
            <div class=\"symfony-content\">
                ";
        // line 40
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "            </div>

            ";
        // line 44
        if (array_key_exists("code", $context)) {
            // line 45
            echo "                <h2>Code behind this page</h2>
                <div class=\"symfony-content\">";
            // line 46
            echo $this->getContext($context, "code");
            echo "</div>
            ";
        }
        // line 48
        echo "        </div>
    </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 29
    public function block_content_header($context, array $blocks = array())
    {
        // line 30
        echo "                <ul id=\"menu\">
                    ";
        // line 31
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 34
        echo "                </ul>

                <div style=\"clear: both\"></div>
            ";
    }

    // line 31
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 32
        echo "                        <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo"), "html", null, true);
        echo "\">Store Home</a></li>
                    ";
    }

    // line 40
    public function block_content($context, array $blocks = array())
    {
        // line 41
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 41,  132 => 40,  125 => 32,  122 => 31,  115 => 34,  113 => 31,  110 => 30,  107 => 29,  101 => 6,  94 => 48,  89 => 46,  86 => 45,  84 => 44,  80 => 42,  78 => 40,  74 => 38,  71 => 29,  69 => 28,  67 => 27,  61 => 24,  58 => 23,  56 => 22,  52 => 20,  47 => 13,  43 => 12,  35 => 7,  31 => 6,  27 => 5,  21 => 1,);
    }
}
