<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_cd2e08a266f809da82c2809d013838e88fbd7f763296c820cdce16f9be3ad052 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_c082f6adcbffcd87375ecbce4b30476c36407862758dcd95821154682493b2d1 = $this->env->getExtension("native_profiler");
        $__internal_c082f6adcbffcd87375ecbce4b30476c36407862758dcd95821154682493b2d1->enter($__internal_c082f6adcbffcd87375ecbce4b30476c36407862758dcd95821154682493b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c082f6adcbffcd87375ecbce4b30476c36407862758dcd95821154682493b2d1->leave($__internal_c082f6adcbffcd87375ecbce4b30476c36407862758dcd95821154682493b2d1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d708fb3c9dd335fdf6f9f58d50c071a2653a643f6c4f12b529c7b222b594a1ee = $this->env->getExtension("native_profiler");
        $__internal_d708fb3c9dd335fdf6f9f58d50c071a2653a643f6c4f12b529c7b222b594a1ee->enter($__internal_d708fb3c9dd335fdf6f9f58d50c071a2653a643f6c4f12b529c7b222b594a1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_d708fb3c9dd335fdf6f9f58d50c071a2653a643f6c4f12b529c7b222b594a1ee->leave($__internal_d708fb3c9dd335fdf6f9f58d50c071a2653a643f6c4f12b529c7b222b594a1ee_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e84f15edfb0f7f193dcc11da930669b4b1fcdc285c1a59ee07894b8da7167fe4 = $this->env->getExtension("native_profiler");
        $__internal_e84f15edfb0f7f193dcc11da930669b4b1fcdc285c1a59ee07894b8da7167fe4->enter($__internal_e84f15edfb0f7f193dcc11da930669b4b1fcdc285c1a59ee07894b8da7167fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e84f15edfb0f7f193dcc11da930669b4b1fcdc285c1a59ee07894b8da7167fe4->leave($__internal_e84f15edfb0f7f193dcc11da930669b4b1fcdc285c1a59ee07894b8da7167fe4_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1e54a459f9ec98242bc5c6fdd45f130200f8fc8b080d102746686657e858db19 = $this->env->getExtension("native_profiler");
        $__internal_1e54a459f9ec98242bc5c6fdd45f130200f8fc8b080d102746686657e858db19->enter($__internal_1e54a459f9ec98242bc5c6fdd45f130200f8fc8b080d102746686657e858db19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1e54a459f9ec98242bc5c6fdd45f130200f8fc8b080d102746686657e858db19->leave($__internal_1e54a459f9ec98242bc5c6fdd45f130200f8fc8b080d102746686657e858db19_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
