<?php

/* TwigBundle:Exception:exception.txt.twig */
class __TwigTemplate_612ee9a6d6c435e8465cd4a46d508c9b extends Twig_Template
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
        echo "[exception] ";
        if (isset($context["status_code"])) { $_status_code_ = $context["status_code"]; } else { $_status_code_ = null; }
        if (isset($context["status_text"])) { $_status_text_ = $context["status_text"]; } else { $_status_text_ = null; }
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_escape_filter($this->env, (((($_status_code_ . " | ") . $_status_text_) . " | ") . $this->getAttribute($_exception_, "class")), "html", null, true);
        echo "
[message] ";
        // line 2
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_exception_, "message"), "html", null, true);
        echo "
";
        // line 3
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "toarray"));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            if (isset($context["i"])) { $_i_ = $context["i"]; } else { $_i_ = null; }
            echo twig_escape_filter($this->env, ($_i_ + 1), "html", null, true);
            echo "] ";
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_e_, "class"), "html", null, true);
            echo ": ";
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_e_, "message"), "html", null, true);
            echo "
";
            // line 5
            if (isset($context["e"])) { $_e_ = $context["e"]; } else { $_e_ = null; }
            $this->env->loadTemplate("TwigBundle:Exception:traces.txt.twig")->display(array("exception" => $_e_));
            // line 6
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 6,  47 => 5,  30 => 3,  25 => 2,  23 => 5,  17 => 1,  92 => 39,  86 => 6,  79 => 40,  57 => 22,  46 => 14,  37 => 8,  33 => 7,  29 => 6,  24 => 4,  19 => 1,  144 => 54,  138 => 50,  130 => 46,  124 => 42,  121 => 41,  115 => 40,  111 => 38,  108 => 37,  99 => 32,  94 => 29,  91 => 28,  88 => 27,  85 => 26,  77 => 39,  74 => 20,  71 => 19,  65 => 16,  62 => 15,  58 => 13,  54 => 11,  51 => 10,  42 => 9,  38 => 8,  35 => 4,  31 => 9,  28 => 3,);
    }
}
