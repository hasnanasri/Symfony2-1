<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_0d4a797903c58b3e3b3b88a0de0d8428 extends Twig_Template
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
        // line 1
        echo "/*
";
        // line 2
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => $_exception_)));
        // line 3
        echo "*/
";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 9,  48 => 7,  45 => 6,  36 => 5,  39 => 8,  27 => 3,  117 => 22,  109 => 20,  104 => 19,  96 => 18,  84 => 14,  80 => 12,  68 => 9,  26 => 4,  112 => 21,  102 => 19,  89 => 16,  78 => 15,  63 => 14,  61 => 13,  56 => 12,  44 => 7,  32 => 5,  34 => 6,  43 => 7,  20 => 2,  22 => 4,  50 => 11,  47 => 8,  30 => 4,  25 => 3,  23 => 3,  17 => 1,  92 => 39,  86 => 6,  79 => 40,  57 => 22,  46 => 7,  37 => 7,  33 => 4,  29 => 6,  24 => 4,  19 => 1,  144 => 54,  138 => 50,  130 => 46,  124 => 24,  121 => 41,  115 => 40,  111 => 38,  108 => 37,  99 => 32,  94 => 29,  91 => 17,  88 => 16,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 8,  54 => 11,  51 => 10,  42 => 9,  38 => 7,  35 => 5,  31 => 4,  28 => 4,);
    }
}
