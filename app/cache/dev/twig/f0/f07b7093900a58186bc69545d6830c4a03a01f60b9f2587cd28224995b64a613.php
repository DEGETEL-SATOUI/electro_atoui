<?php

/* FrontendBundle:Default:cart/display_cart.html.twig */
class __TwigTemplate_0bf7ffbf86a578043e83ee342e440daffffbc88219fe4645230b82ed12a4614f extends Twig_Template
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
        $__internal_c362bc78d0b6757426312b00a910b4e1a84f1d9b3fa3ea67fe9308afefaa9364 = $this->env->getExtension("native_profiler");
        $__internal_c362bc78d0b6757426312b00a910b4e1a84f1d9b3fa3ea67fe9308afefaa9364->enter($__internal_c362bc78d0b6757426312b00a910b4e1a84f1d9b3fa3ea67fe9308afefaa9364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:cart/display_cart.html.twig"));

        // line 1
        echo "<div id=\"cart\" class=\"cart\">
";
        // line 2
        if (((null === (isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart"))) || ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "CountItems", array()) == 0))) {
            // line 3
            echo "<button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"Loading...\" class=\"dropdown-toggle\">
    <i class=\"material-design-shopping232\"></i>
    <span id=\"cart-total\">0 produit</span>
    <span id=\"cart-total2\">0</span>
</button>
<ul class=\"dropdown-menu pull-right\">
  <li>
    <p class=\"text-center\">Votre panier est vide!</p>
  </li>
</ul>
";
        } else {
            // line 14
            echo "<div id=\"cart\" class=\"cart\">
    <button type=\"button\" data-toggle=\"dropdown\" data-loading-text=\"Loading...\" class=\"dropdown-toggle\">
        <i class=\"material-design-shopping232\"></i>
        <span id=\"cart-total\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "CountItems", array()), "html", null, true);
            echo " produit(s)</span>
        <span id=\"cart-total2\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "CountItems", array()), "html", null, true);
            echo "</span>
    </button>
    <ul class=\"dropdown-menu pull-right\">
        <li>
            <div>
                <table class=\"table\">
                    <tbody>
                        ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "Items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 26
                echo "                        <tr>
                            <td class=\"text-center\">
                                <div class=\"image\">
                                    <a href=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($this->getAttribute($context["data"], "product", array()), "slug", array()))), "html", null, true);
                echo "\">
                                        <img
                                            src=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_47"), "html", null, true);
                echo "\"
                                            alt=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "product", array()), "name", array()), "html", null, true);
                echo "\"
                                            title=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "product", array()), "name", array()), "html", null, true);
                echo "\" class=\"img-thumbnail\">
                                    </a>
                                </div>
                            </td>
                            <td class=\"text-left\">
                                <div class=\"name\">
                                    <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($this->getAttribute($context["data"], "product", array()), "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "product", array()), "name", array()), "html", null, true);
                echo "</a>
                                </div>
                                <div>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "quantity", array()), "html", null, true);
                echo " x <span class=\"price-cart\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "product", array()), "price", array()), "html", null, true);
                echo " DT</span></div>
                            </td>
                            <td class=\"text-center\">
                                <button type=\"button\" onclick=\"removeCartItem('";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "product", array()), "id", array()), "html", null, true);
                echo "');\" title=\"supprimer\" class=\"btn btn-danger btn-xs\">
                                  <i class=\"fa fa-times\"></i>
                                </button>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "                    </tbody>
                </table>
            </div>
        </li>
        <li>
            <div>
                <table class=\"table total\">
                    <tbody>
                        <tr>
                            <td class=\"text-right\"><strong>Total</strong>
                            </td>
                            <td class=\"text-right\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : $this->getContext($context, "cart")), "Total", array()), "html", null, true);
            echo " DT</td>
                        </tr>
                    </tbody>
                </table>
                <p class=\"text-right\">
                    <a class=\"btn btn-primary\" href=\"";
            // line 66
            echo $this->env->getExtension('routing')->getPath("_cart");
            echo "\">  Panier</a>
                    <a class=\"btn btn-primary\" href=\"\">  Payer</a>
                </p>
            </div>
        </li>
    </ul>
</div>
";
        }
        // line 74
        echo "</div>";
        
        $__internal_c362bc78d0b6757426312b00a910b4e1a84f1d9b3fa3ea67fe9308afefaa9364->leave($__internal_c362bc78d0b6757426312b00a910b4e1a84f1d9b3fa3ea67fe9308afefaa9364_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:cart/display_cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 74,  138 => 66,  130 => 61,  117 => 50,  105 => 44,  97 => 41,  90 => 39,  81 => 33,  77 => 32,  73 => 31,  68 => 29,  63 => 26,  59 => 25,  49 => 18,  45 => 17,  40 => 14,  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* <div id="cart" class="cart">*/
/* {% if cart is null or cart.CountItems == 0 %}*/
/* <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle">*/
/*     <i class="material-design-shopping232"></i>*/
/*     <span id="cart-total">0 produit</span>*/
/*     <span id="cart-total2">0</span>*/
/* </button>*/
/* <ul class="dropdown-menu pull-right">*/
/*   <li>*/
/*     <p class="text-center">Votre panier est vide!</p>*/
/*   </li>*/
/* </ul>*/
/* {% else %}*/
/* <div id="cart" class="cart">*/
/*     <button type="button" data-toggle="dropdown" data-loading-text="Loading..." class="dropdown-toggle">*/
/*         <i class="material-design-shopping232"></i>*/
/*         <span id="cart-total">{{ cart.CountItems }} produit(s)</span>*/
/*         <span id="cart-total2">{{ cart.CountItems }}</span>*/
/*     </button>*/
/*     <ul class="dropdown-menu pull-right">*/
/*         <li>*/
/*             <div>*/
/*                 <table class="table">*/
/*                     <tbody>*/
/*                         {% for data in cart.Items %}*/
/*                         <tr>*/
/*                             <td class="text-center">*/
/*                                 <div class="image">*/
/*                                     <a href="{{ path('_product_detail', { 'slug' : data.product.slug }) }}">*/
/*                                         <img*/
/*                                             src="{{ '/uploads/product.png' | imagine_filter('product_47') }}"*/
/*                                             alt="{{ data.product.name }}"*/
/*                                             title="{{ data.product.name }}" class="img-thumbnail">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td class="text-left">*/
/*                                 <div class="name">*/
/*                                     <a href="{{ path('_product_detail', { 'slug' : data.product.slug }) }}">{{ data.product.name }}</a>*/
/*                                 </div>*/
/*                                 <div>{{ data.quantity }} x <span class="price-cart">{{ data.product.price }} DT</span></div>*/
/*                             </td>*/
/*                             <td class="text-center">*/
/*                                 <button type="button" onclick="removeCartItem('{{ data.product.id }}');" title="supprimer" class="btn btn-danger btn-xs">*/
/*                                   <i class="fa fa-times"></i>*/
/*                                 </button>*/
/*                             </td>*/
/*                         </tr>*/
/*                         {% endfor %}*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </li>*/
/*         <li>*/
/*             <div>*/
/*                 <table class="table total">*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <td class="text-right"><strong>Total</strong>*/
/*                             </td>*/
/*                             <td class="text-right">{{ cart.Total }} DT</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*                 <p class="text-right">*/
/*                     <a class="btn btn-primary" href="{{ path('_cart') }}">  Panier</a>*/
/*                     <a class="btn btn-primary" href="">  Payer</a>*/
/*                 </p>*/
/*             </div>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
