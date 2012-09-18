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
        $this->env->loadTemplate("TwigBundle:Exception:exception.txt.twig")->display(array_merge($context, array("exception" => $this->getContext($context, "exception"))));
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
        return array (  97 => 22,  95 => 21,  88 => 19,  78 => 17,  71 => 14,  25 => 4,  72 => 16,  64 => 15,  53 => 13,  42 => 7,  34 => 7,  40 => 6,  26 => 3,  22 => 3,  23 => 3,  17 => 1,  92 => 20,  86 => 6,  79 => 40,  29 => 4,  24 => 3,  19 => 2,  69 => 14,  63 => 10,  58 => 9,  49 => 9,  43 => 15,  37 => 8,  20 => 2,  139 => 26,  131 => 44,  128 => 43,  125 => 42,  121 => 40,  115 => 39,  107 => 36,  99 => 35,  96 => 34,  91 => 33,  82 => 18,  77 => 39,  75 => 16,  57 => 9,  50 => 13,  46 => 14,  44 => 8,  39 => 9,  33 => 5,  30 => 4,  27 => 4,  135 => 54,  129 => 50,  122 => 46,  116 => 42,  113 => 41,  108 => 40,  104 => 24,  102 => 37,  94 => 32,  89 => 20,  87 => 32,  84 => 31,  81 => 26,  73 => 21,  70 => 20,  67 => 12,  62 => 16,  59 => 15,  55 => 14,  51 => 11,  48 => 10,  41 => 7,  38 => 6,  35 => 8,  31 => 5,  28 => 3,);
    }
}
