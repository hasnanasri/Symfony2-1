<?php

/* AcmeStoreBundle:Product:index.html.twig */
class __TwigTemplate_dac0a22cdf4669af88bed6a47ad60a2f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeStoreBundle::layout.html.twig");

        $this->blocks = array(
            'list_header' => array($this, 'block_list_header'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
            'list_footer' => array($this, 'block_list_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeStoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_list_header($context, array $blocks = array())
    {
        // line 3
        echo "<h1>Product list</h1>

<table class=\"records_list\">
    ";
        // line 6
        $this->displayBlock('content_header', $context, $blocks);
        // line 7
        echo "
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
 ";
    }

    // line 6
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 16
    public function block_content($context, array $blocks = array())
    {
        // line 17
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "entities"));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "        <tr>
            <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "id"), "html", null, true);
            echo "</a></td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "name"), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "price"), "html", null, true);
            echo "</td>
            <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "entity"), "description"), "html", null, true);
            echo "</td>
            <td>
                <ul>
                    <li>
                        <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_show", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">show</a>
                    </li>
                    <li>
                        <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_edit", array("id" => $this->getAttribute($this->getContext($context, "entity"), "id"))), "html", null, true);
            echo "\">edit</a>
                    </li>
                </ul>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 35
        echo "    ";
    }

    // line 36
    public function block_list_footer($context, array $blocks = array())
    {
        // line 37
        echo "</table>

<ul>
    <li>
        <a href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("store_new"), "html", null, true);
        echo "\">
            Create a new entry
        </a>
    </li>
</ul>

";
    }

    public function getTemplateName()
    {
        return "AcmeStoreBundle:Product:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  114 => 37,  111 => 36,  107 => 35,  95 => 29,  89 => 26,  82 => 22,  78 => 21,  74 => 20,  68 => 19,  65 => 18,  60 => 17,  57 => 16,  51 => 6,  39 => 7,  37 => 6,  32 => 3,  29 => 2,);
    }
}
