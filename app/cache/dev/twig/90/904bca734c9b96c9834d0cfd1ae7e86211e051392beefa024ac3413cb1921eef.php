<?php

/* FrontendBundle:Default:products/display_sales.html.twig */
class __TwigTemplate_a83b56b8683b5490262d1175684ea8b696f11564afc83ba177253c982466ddaf extends Twig_Template
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
        $__internal_a50dac6e830bae9b1bdf97c452f9afb2b59732fef39c3d8f3873dc548a9bc9e4 = $this->env->getExtension("native_profiler");
        $__internal_a50dac6e830bae9b1bdf97c452f9afb2b59732fef39c3d8f3873dc548a9bc9e4->enter($__internal_a50dac6e830bae9b1bdf97c452f9afb2b59732fef39c3d8f3873dc548a9bc9e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:products/display_sales.html.twig"));

        // line 1
        if ((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products"))) {
            // line 2
            echo "<script  type=\"text/javascript\">
\$(document).ready(function() {
    \$('.specials-scroll').bxSlider({
        mode:'vertical',
        minSlides: 4,
        maxSlides: 4,
        slideWidth: 270,
        nextText: '<i class=\"material-design-drop27\"></i>',
        prevText: '<i class=\"material-design-drop25\"></i>',
        nextSelector: '#specials-next',
        prevSelector: '#specials-prev',
        pager:false,
    });
});
</script>

<div class=\"box specials\">
    <div class=\"box-heading\">
        <div class=\"nav-scroll\">
            <span id=\"specials-prev\">
                <a href=\"\"></a>
            </span>
            <span id=\"specials-next\">
                <a href=\"\"></a>
            </span>
        </div>
        <h3>Soldes</h3>
    </div>
    <div class=\"box-content\">
        <div class=\"product-layout\">
            <div class=\"specials-scroll\">
                ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                echo "                <div>
                    <div class=\"product-thumb transition\">
                        <div class=\"image\">
                            <div class=\"sale\">Solde</div>
                            <a href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\">
                                <img src=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_100"), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "\" class=\"img-responsive\"/>
                            </a>
                        </div>
                        <div class=\"caption\">
                            <div class=\"price\">
                                ";
                // line 44
                if ($this->getAttribute($context["product"], "forSale", array())) {
                    // line 45
                    echo "                                  <small class=\"price-new\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "salePrice", array()), "html", null, true);
                    echo " DT</small>
                                  <small class=\"price-old\">";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                    echo " DT</small>
                                ";
                } else {
                    // line 48
                    echo "                                  <small class=\"price-new\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                    echo " DT</small>
                                ";
                }
                // line 50
                echo "                            </div>
                            <div class=\"name\">
                                <a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</a>
                            </div>
                            <div class=\"rating\">
                                ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                    // line 56
                    echo "                                    ";
                    if (($context["index"] <= $this->getAttribute($context["product"], "rateValue", array()))) {
                        // line 57
                        echo "                                        <span class=\"fa fa-stack\">
                                            <i class=\"fa fa-star fa-stack-2x\"></i>
                                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                        </span>
                                    ";
                    } else {
                        // line 62
                        echo "                                        <span class=\"fa fa-stack\">
                                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                        </span>
                                    ";
                    }
                    // line 66
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                            </div>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "            </div>
        </div>
    </div>
</div>
";
        }
        
        $__internal_a50dac6e830bae9b1bdf97c452f9afb2b59732fef39c3d8f3873dc548a9bc9e4->leave($__internal_a50dac6e830bae9b1bdf97c452f9afb2b59732fef39c3d8f3873dc548a9bc9e4_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:products/display_sales.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 73,  139 => 67,  133 => 66,  127 => 62,  120 => 57,  117 => 56,  113 => 55,  105 => 52,  101 => 50,  95 => 48,  90 => 46,  85 => 45,  83 => 44,  71 => 39,  67 => 38,  61 => 34,  57 => 33,  24 => 2,  22 => 1,);
    }
}
/* {% if products %}*/
/* <script  type="text/javascript">*/
/* $(document).ready(function() {*/
/*     $('.specials-scroll').bxSlider({*/
/*         mode:'vertical',*/
/*         minSlides: 4,*/
/*         maxSlides: 4,*/
/*         slideWidth: 270,*/
/*         nextText: '<i class="material-design-drop27"></i>',*/
/*         prevText: '<i class="material-design-drop25"></i>',*/
/*         nextSelector: '#specials-next',*/
/*         prevSelector: '#specials-prev',*/
/*         pager:false,*/
/*     });*/
/* });*/
/* </script>*/
/* */
/* <div class="box specials">*/
/*     <div class="box-heading">*/
/*         <div class="nav-scroll">*/
/*             <span id="specials-prev">*/
/*                 <a href=""></a>*/
/*             </span>*/
/*             <span id="specials-next">*/
/*                 <a href=""></a>*/
/*             </span>*/
/*         </div>*/
/*         <h3>Soldes</h3>*/
/*     </div>*/
/*     <div class="box-content">*/
/*         <div class="product-layout">*/
/*             <div class="specials-scroll">*/
/*                 {% for product in products %}*/
/*                 <div>*/
/*                     <div class="product-thumb transition">*/
/*                         <div class="image">*/
/*                             <div class="sale">Solde</div>*/
/*                             <a href="{{ path('_product_detail', { 'slug' : product.slug }) }}">*/
/*                                 <img src="{{ '/uploads/product.png' | imagine_filter('product_100') }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"/>*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="caption">*/
/*                             <div class="price">*/
/*                                 {% if product.forSale %}*/
/*                                   <small class="price-new">{{ product.salePrice }} DT</small>*/
/*                                   <small class="price-old">{{ product.price }} DT</small>*/
/*                                 {% else %}*/
/*                                   <small class="price-new">{{ product.price }} DT</small>*/
/*                                 {% endif %}*/
/*                             </div>*/
/*                             <div class="name">*/
/*                                 <a href="{{ path('_product_detail', { 'slug' : product.slug }) }}">{{ product.name }}</a>*/
/*                             </div>*/
/*                             <div class="rating">*/
/*                                 {% for index in 1..5 %}*/
/*                                     {% if index <= product.rateValue %}*/
/*                                         <span class="fa fa-stack">*/
/*                                             <i class="fa fa-star fa-stack-2x"></i>*/
/*                                             <i class="fa fa-star-o fa-stack-2x"></i>*/
/*                                         </span>*/
/*                                     {% else %}*/
/*                                         <span class="fa fa-stack">*/
/*                                             <i class="fa fa-star-o fa-stack-2x"></i>*/
/*                                         </span>*/
/*                                     {% endif %}*/
/*                                 {% endfor %}*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endif %}*/
