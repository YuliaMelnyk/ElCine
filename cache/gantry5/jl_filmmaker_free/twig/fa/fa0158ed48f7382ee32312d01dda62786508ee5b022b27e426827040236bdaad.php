<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @particles/sticky.html.twig */
class __TwigTemplate_4b85442d14c9005a07a714e1563fde2b0611c255873e9d6c7773f7bb00108d44 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'javascript_footer' => [$this, 'block_javascript_footer'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@nucleus/partials/particle.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@nucleus/partials/particle.html.twig", "@particles/sticky.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_javascript_footer($context, array $blocks = [])
    {
        // line 5
        echo "  ";
        $this->getAttribute(($context["gantry"] ?? null), "load", [0 => "jquery"], "method");
        // line 6
        echo "  <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Gantry\Component\Twig\TwigExtension')->urlFunc("gantry-theme://js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
  <script>
  jQuery( document ).ready(function( \$ ) {
    \$(\"#";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "id", []), "html", null, true);
        echo "\").sticky({ topSpacing :";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["particle"] ?? null), "spacing", []), "html", null, true);
        echo ",zIndex: 999  });
  });
  </script>
";
    }

    public function getTemplateName()
    {
        return "@particles/sticky.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 9,  45 => 6,  42 => 5,  39 => 4,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@particles/sticky.html.twig", "C:\\xampp\\htdocs\\proyecto\\templates\\jl_filmmaker_free\\custom\\particles\\sticky.html.twig");
    }
}
