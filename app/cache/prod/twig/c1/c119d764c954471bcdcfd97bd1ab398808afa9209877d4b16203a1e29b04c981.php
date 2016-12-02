<?php

/* FrontendBundle:Default/cart:display_cart.html.twig */
class __TwigTemplate_d78d0951941809d1f88bd10961bf18e936aacdd72a0ac95c2019fde994f10102 extends Twig_Template
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
        echo "<div id=\"cart\" class=\"cart\">
";
        // line 2
        if (((null === (isset($context["cart"]) ? $context["cart"] : null)) || ($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "CountItems", array()) == 0))) {
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
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "CountItems", array()), "html", null, true);
            echo " produit(s)</span>
        <span id=\"cart-total2\">";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "CountItems", array()), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "Items", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 26
                echo "                        <tr>
                            <td class=\"text-center\">
                                <div class=\"image\">
                                    <a href=\"\">
                                        <img
                                            src=\"http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-10-47x47.png\"
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
                                <div class=\"name\"><a href=\"\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "product", array()), "name", array()), "html", null, true);
                echo "</a></div>
                                <div> x ";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["data"], "quantity", array()), "html", null, true);
                echo " <span class=\"price-cart\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["data"], "product", array()), "price", array()), "html", null, true);
                echo " Dt</span></div>
                            </td>
                            <td class=\"text-center\">
                                <button type=\"button\" onclick=\"\" title=\"supprimer\" class=\"btn btn-danger btn-xs\">
                                  <i class=\"fa fa-times\"></i>
                                </button>
                            </td>
                        </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
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
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cart"]) ? $context["cart"] : null), "Total", array()), "html", null, true);
            echo " Dt</td>
                        </tr>
                    </tbody>
                </table>
                <p class=\"text-right\">
                    <a class=\"btn btn-primary\" href=\"\">  Panier</a>
                    <a class=\"btn btn-primary\" href=\"\">  Payer</a>
                </p>
            </div>
        </li>
    </ul>
</div>
";
        }
        // line 72
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default/cart:display_cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 72,  114 => 59,  101 => 48,  84 => 39,  80 => 38,  72 => 33,  68 => 32,  60 => 26,  56 => 25,  46 => 18,  42 => 17,  37 => 14,  24 => 3,  22 => 2,  19 => 1,);
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
/*                                     <a href="">*/
/*                                         <img*/
/*                                             src="http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-10-47x47.png"*/
/*                                             alt="{{ data.product.name }}"*/
/*                                             title="{{ data.product.name }}" class="img-thumbnail">*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </td>*/
/*                             <td class="text-left">*/
/*                                 <div class="name"><a href="">{{ data.product.name }}</a></div>*/
/*                                 <div> x {{ data.quantity }} <span class="price-cart">{{ data.product.price }} Dt</span></div>*/
/*                             </td>*/
/*                             <td class="text-center">*/
/*                                 <button type="button" onclick="" title="supprimer" class="btn btn-danger btn-xs">*/
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
/*                             <td class="text-right">{{ cart.Total }} Dt</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*                 <p class="text-right">*/
/*                     <a class="btn btn-primary" href="">  Panier</a>*/
/*                     <a class="btn btn-primary" href="">  Payer</a>*/
/*                 </p>*/
/*             </div>*/
/*         </li>*/
/*     </ul>*/
/* </div>*/
/* {% endif %}*/
/* </div>*/
