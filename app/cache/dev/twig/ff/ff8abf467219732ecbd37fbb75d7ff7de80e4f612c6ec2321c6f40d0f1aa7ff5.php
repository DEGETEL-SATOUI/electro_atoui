<?php

/* FrontendBundle:Default:nav_bar.html.twig */
class __TwigTemplate_c85a972d5d8d8d3a4ded8f8c0fd293ba0b5fbc6f3b25a7d95d122fb4de56bcb2 extends Twig_Template
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
        $__internal_41744b00c7bf07d5e60208a6c0d3a4d374a38e4380e264dd77fe7c5247dc3589 = $this->env->getExtension("native_profiler");
        $__internal_41744b00c7bf07d5e60208a6c0d3a4d374a38e4380e264dd77fe7c5247dc3589->enter($__internal_41744b00c7bf07d5e60208a6c0d3a4d374a38e4380e264dd77fe7c5247dc3589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:nav_bar.html.twig"));

        // line 1
        echo "<ul class=\"list-inline\">
    <li class=\"first\">
      <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("_frontend_homepage");
        echo "\"><i class=\"fa fa-home\"></i>
      <span class=\"hidden-sm\">Acceuil</span></a>
    </li>
    ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "        <li>
          <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_category_detail", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "\">
            <span class=\"hidden-sm\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</span>
          </a>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <li>
      <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_cart");
        echo "\" title=\"Mon Panier\"><i class=\"material-design-shopping232\"></i>
        <span class=\"hidden-sm\">Mon Panier (";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["cart_count"]) ? $context["cart_count"] : $this->getContext($context, "cart_count")), "html", null, true);
        echo ")</span>
      </a>
    </li>
    <li>
      <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\" title=\"Nous Contacter\"><i class=\"fa fa-share\"></i>
      <span class=\"hidden-sm\">Nous Contacter</span></a>
    </li>
</ul>";
        
        $__internal_41744b00c7bf07d5e60208a6c0d3a4d374a38e4380e264dd77fe7c5247dc3589->leave($__internal_41744b00c7bf07d5e60208a6c0d3a4d374a38e4380e264dd77fe7c5247dc3589_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:nav_bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 19,  62 => 15,  58 => 14,  55 => 13,  45 => 9,  39 => 8,  36 => 7,  32 => 6,  26 => 3,  22 => 1,);
    }
}
/* <ul class="list-inline">*/
/*     <li class="first">*/
/*       <a href="{{ path('_frontend_homepage') }}"><i class="fa fa-home"></i>*/
/*       <span class="hidden-sm">Acceuil</span></a>*/
/*     </li>*/
/*     {% for category in categories %}*/
/*         <li>*/
/*           <a href="{{ path('_category_detail', { 'slug' : category.slug }) }}" title="{{ category.name }}">*/
/*             <span class="hidden-sm">{{ category.name }}</span>*/
/*           </a>*/
/*         </li>*/
/*     {% endfor %}*/
/*     <li>*/
/*       <a href="{{ path('_cart') }}" title="Mon Panier"><i class="material-design-shopping232"></i>*/
/*         <span class="hidden-sm">Mon Panier ({{ cart_count }})</span>*/
/*       </a>*/
/*     </li>*/
/*     <li>*/
/*       <a href="{{ path('_contact') }}" title="Nous Contacter"><i class="fa fa-share"></i>*/
/*       <span class="hidden-sm">Nous Contacter</span></a>*/
/*     </li>*/
/* </ul>*/
