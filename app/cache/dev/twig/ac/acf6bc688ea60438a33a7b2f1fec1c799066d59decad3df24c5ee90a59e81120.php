<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3e5cbdc862755b747bae1924342c9992ffc4e99c2d60cf445e08ec535257559f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbf491d3234d2c96437b9f61cbd18869c332c02356e5bc19f73c12a1395fd84d = $this->env->getExtension("native_profiler");
        $__internal_dbf491d3234d2c96437b9f61cbd18869c332c02356e5bc19f73c12a1395fd84d->enter($__internal_dbf491d3234d2c96437b9f61cbd18869c332c02356e5bc19f73c12a1395fd84d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf491d3234d2c96437b9f61cbd18869c332c02356e5bc19f73c12a1395fd84d->leave($__internal_dbf491d3234d2c96437b9f61cbd18869c332c02356e5bc19f73c12a1395fd84d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_c26c348318a5f14da139b2bd75a0f02d6de7990e6fc80a1cd425b0454e0cc956 = $this->env->getExtension("native_profiler");
        $__internal_c26c348318a5f14da139b2bd75a0f02d6de7990e6fc80a1cd425b0454e0cc956->enter($__internal_c26c348318a5f14da139b2bd75a0f02d6de7990e6fc80a1cd425b0454e0cc956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_c26c348318a5f14da139b2bd75a0f02d6de7990e6fc80a1cd425b0454e0cc956->leave($__internal_c26c348318a5f14da139b2bd75a0f02d6de7990e6fc80a1cd425b0454e0cc956_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d82df1c96abe61be1cac8046c847fa3aeee4d605103a6e7d320187ea174a9f9 = $this->env->getExtension("native_profiler");
        $__internal_1d82df1c96abe61be1cac8046c847fa3aeee4d605103a6e7d320187ea174a9f9->enter($__internal_1d82df1c96abe61be1cac8046c847fa3aeee4d605103a6e7d320187ea174a9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_1d82df1c96abe61be1cac8046c847fa3aeee4d605103a6e7d320187ea174a9f9->leave($__internal_1d82df1c96abe61be1cac8046c847fa3aeee4d605103a6e7d320187ea174a9f9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2863d6770980feda4f96f277406fc1595a96fb02deaa8b1cb61c6368d04fd455 = $this->env->getExtension("native_profiler");
        $__internal_2863d6770980feda4f96f277406fc1595a96fb02deaa8b1cb61c6368d04fd455->enter($__internal_2863d6770980feda4f96f277406fc1595a96fb02deaa8b1cb61c6368d04fd455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2863d6770980feda4f96f277406fc1595a96fb02deaa8b1cb61c6368d04fd455->leave($__internal_2863d6770980feda4f96f277406fc1595a96fb02deaa8b1cb61c6368d04fd455_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
