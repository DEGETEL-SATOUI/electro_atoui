<?php

/* FrontendBundle:Default:home.html.twig */
class __TwigTemplate_efd88da4b67a98324aa2defe5af2071290064d79243224bc67b4667afb06b809 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default:home.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_class' => array($this, 'block_body_class'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d9873dcb8207712da1ce17c05d4e06deab3e25e4d23e0b5dbc3a62b231d0e0eb = $this->env->getExtension("native_profiler");
        $__internal_d9873dcb8207712da1ce17c05d4e06deab3e25e4d23e0b5dbc3a62b231d0e0eb->enter($__internal_d9873dcb8207712da1ce17c05d4e06deab3e25e4d23e0b5dbc3a62b231d0e0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d9873dcb8207712da1ce17c05d4e06deab3e25e4d23e0b5dbc3a62b231d0e0eb->leave($__internal_d9873dcb8207712da1ce17c05d4e06deab3e25e4d23e0b5dbc3a62b231d0e0eb_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_841941d0765718c630ab230f32a67d6c261c34209948e47aeddf18cf43958cab = $this->env->getExtension("native_profiler");
        $__internal_841941d0765718c630ab230f32a67d6c261c34209948e47aeddf18cf43958cab->enter($__internal_841941d0765718c630ab230f32a67d6c261c34209948e47aeddf18cf43958cab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Electro El Atoui - Acceuil";
        
        $__internal_841941d0765718c630ab230f32a67d6c261c34209948e47aeddf18cf43958cab->leave($__internal_841941d0765718c630ab230f32a67d6c261c34209948e47aeddf18cf43958cab_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5c348db3db50f75a68336e8bf25019566a86803530af6a0f502e5acb8f3d3175 = $this->env->getExtension("native_profiler");
        $__internal_5c348db3db50f75a68336e8bf25019566a86803530af6a0f502e5acb8f3d3175->enter($__internal_5c348db3db50f75a68336e8bf25019566a86803530af6a0f502e5acb8f3d3175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/camera.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
 <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
";
        
        $__internal_5c348db3db50f75a68336e8bf25019566a86803530af6a0f502e5acb8f3d3175->leave($__internal_5c348db3db50f75a68336e8bf25019566a86803530af6a0f502e5acb8f3d3175_prof);

    }

    // line 10
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6c4ed4ad7020c66e3fd018ce80c4e3399af933cc5fe0004c5fd4636ba9ef3909 = $this->env->getExtension("native_profiler");
        $__internal_6c4ed4ad7020c66e3fd018ce80c4e3399af933cc5fe0004c5fd4636ba9ef3909->enter($__internal_6c4ed4ad7020c66e3fd018ce80c4e3399af933cc5fe0004c5fd4636ba9ef3909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 11
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/camera.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/jquery.fancybox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_6c4ed4ad7020c66e3fd018ce80c4e3399af933cc5fe0004c5fd4636ba9ef3909->leave($__internal_6c4ed4ad7020c66e3fd018ce80c4e3399af933cc5fe0004c5fd4636ba9ef3909_prof);

    }

    // line 15
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_203625a7ded45cdc0850fc89525279ae50e07f318ddbad0524f0d147178d2a29 = $this->env->getExtension("native_profiler");
        $__internal_203625a7ded45cdc0850fc89525279ae50e07f318ddbad0524f0d147178d2a29->enter($__internal_203625a7ded45cdc0850fc89525279ae50e07f318ddbad0524f0d147178d2a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "common-home";
        
        $__internal_203625a7ded45cdc0850fc89525279ae50e07f318ddbad0524f0d147178d2a29->leave($__internal_203625a7ded45cdc0850fc89525279ae50e07f318ddbad0524f0d147178d2a29_prof);

    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        $__internal_7ec133087979bc629a1cb2cc6dc7ddd3b01d5f482f820ae8f0c6b986f892a3d6 = $this->env->getExtension("native_profiler");
        $__internal_7ec133087979bc629a1cb2cc6dc7ddd3b01d5f482f820ae8f0c6b986f892a3d6->enter($__internal_7ec133087979bc629a1cb2cc6dc7ddd3b01d5f482f820ae8f0c6b986f892a3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 18
        echo "<div class=\"fluid_container\">
    <div class=\"camera_container\">
        <div id=\"camera_wrap_0\">
          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["rand_products"]) ? $context["rand_products"] : $this->getContext($context, "rand_products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 22
            echo "            <div title=\"slide-1}\"
                data-thumb=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/images/slide870x380.jpg"), "html", null, true);
            echo "\"
                data-src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/images/slide870x380.jpg"), "html", null, true);
            echo "\">
                <div class=\"camera_caption fadeIn\">
                    <h1>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</h1>
                    <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "shortDescription", array()), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
            echo "\">Acheter maintenant</a>
                </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </div>
    </div>
    <div class=\"clear\"></div>
</div>

<div class=\"box latest\">
    <div class=\"box-heading\">
        <div class=\"customNavigation\">
            <a class=\"prev\"><i class=\"fa fa-caret-left\"></i></a>
            <a class=\"next\"><i class=\"fa fa-caret-right\"></i></a>
        </div>
        <h3>Derniers produits ajoutés</h3>
    </div>
    <div class=\"box-content\">
        <div class=\"product-layout\">
            <div class=\"box-carousel\">
                ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["last_products"]) ? $context["last_products"] : $this->getContext($context, "last_products")));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 49
            echo "                    <div>
                        <div class=\"product-thumb transition\" style=\"height: 371px;\">
                            <div class=\"quick_info\">
                                <div id=\"quickview_latest_";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\">
                                    <div>
                                        <div class=\"left col-sm-4\">
                                            <div class=\"quickview_image image\">
                                                <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
            echo "\">
                                                    <img 
                                                        alt=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "\"
                                                        class=\"img-responsive\"
                                                        src=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_270"), "html", null, true);
            echo "\">
                                                </a>
                                            </div>
                                        </div>
                                        <div class=\"right col-sm-8\">
                                            <h2>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</h2>
                                            <div class=\"inf\">
                                                <p class=\"product_model model\">Réf: ";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "reference", array()), "html", null, true);
            echo "</p>
                                                <div class=\"price\">
                                                    ";
            // line 69
            if ($this->getAttribute($context["product"], "forSale", array())) {
                // line 70
                echo "                                                      <span class=\"price-new\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "salePrice", array()), "html", null, true);
                echo " DT</span>
                                                      <span class=\"price-old\">";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo " DT</span>
                                                    ";
            } else {
                // line 73
                echo "                                                      <span class=\"price-new\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo " DT</span>
                                                    ";
            }
            // line 75
            echo "                                                </div>
                                            </div>
                                            <div class=\"cart-button\">
                                                <a class=\"btn btn-add\" href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
            echo "\">
                                                    <i class=\"material-design-shopping232\"></i>
                                                </a>
                                                <button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"\" onclick=\"\" data-original-title=\"Add to Wish List\">
                                                    <i class=\"fa fa-heart\"></i>
                                                </button>
                                                <button class=\"btn btn-icon\" type=\"button\" data-toggle=\"tooltip\" title=\"\" onclick=\"\" data-original-title=\"Compare this Product\">
                                                    <i class=\"fa fa-exchange\"></i>
                                                </button>
                                            </div>
                                            <div class=\"clear\"></div>
                                            <div class=\"rating\">
                                                ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 91
                echo "                                                    ";
                if (($context["index"] <= $this->getAttribute($context["product"], "rateValue", array()))) {
                    // line 92
                    echo "                                                        <span class=\"fa fa-stack\">
                                                            <i class=\"fa fa-star fa-stack-2x\"></i>
                                                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                                        </span>
                                                    ";
                } else {
                    // line 97
                    echo "                                                        <span class=\"fa fa-stack\">
                                                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                                        </span>
                                                    ";
                }
                // line 101
                echo "                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                                            </div>
                                        </div>
                                        <div class=\"col-sm-12\">
                                            <div class=\"quickview_description description\">
                                                ";
            // line 106
            echo $this->getAttribute($context["product"], "description", array());
            echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"new_pr\">Nouveau</div>
                            <div class=\"image\">
                                <a class=\"lazy lazy-loaded\" style=\"padding-bottom: 100%\" href=\"";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
            echo "\">
                                    <img
                                        alt=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "\"
                                        class=\"img-responsive\"
                                        data-src=\"";
            // line 118
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_270"), "html", null, true);
            echo "\"
                                        src=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_270"), "html", null, true);
            echo "\">
                                </a>
                            </div>
                            <div class=\"box-hover\">
                                <div class=\"caption\">
                                    <div class=\"price\">
                                        ";
            // line 125
            if ($this->getAttribute($context["product"], "forSale", array())) {
                // line 126
                echo "                                          <span class=\"price-new\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "salePrice", array()), "html", null, true);
                echo " DT</span>
                                          <span class=\"price-old\">";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo " DT</span>
                                        ";
            } else {
                // line 129
                echo "                                          <span class=\"price-new\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                echo " DT</span>
                                        ";
            }
            // line 131
            echo "                                    </div>
                                    <div class=\"name\">
                                        <a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
            echo "</a>
                                    </div>
                                    <div class=\"description\">
                                        ";
            // line 136
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["product"], "shortDescription", array()), 0, 30) . "..."), "html", null, true);
            echo "
                                     </div>
                                    <div class=\"rating\">
                                        ";
            // line 139
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                // line 140
                echo "                                            ";
                if (($context["index"] <= $this->getAttribute($context["product"], "rateValue", array()))) {
                    // line 141
                    echo "                                                <span class=\"fa fa-stack\">
                                                    <i class=\"fa fa-star fa-stack-2x\"></i>
                                                    <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                                </span>
                                            ";
                } else {
                    // line 146
                    echo "                                                <span class=\"fa fa-stack\">
                                                    <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                                </span>
                                            ";
                }
                // line 150
                echo "                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 151
            echo "                                    </div>
                                </div>
                                <div class=\"cart-button\">
                                    <a class=\"product-btn-add\" href=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
            echo "\">
                                        <i class=\"material-design-shopping232\"></i>
                                        <span class=\"hidden-xs hidden-sm hidden-md\">Je le veux</span>
                                    </a>
                                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" data-original-title=\"Ajouter au favories\">
                                        <i class=\"fa fa-heart\"></i>
                                    </button>
                                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" data-original-title=\"Comparer ce produit\">
                                        <i class=\"fa fa-exchange\"></i>
                                    </button>
                                    <a class=\"quickview quickview-latest product-btn\" data-toggle=\"tooltip\" href=\"#quickview_latest_";
            // line 164
            echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "id", array()), "html", null, true);
            echo "\" data-original-title=\"Détail\">
                                        <i class=\"fa fa-check-square-o\"></i>
                                    </a>
                                </div>
                            </div>
                            <div class=\"clear\"></div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        echo "            </div>
        </div>
    </div>
</div>

<script type=\"text/javascript\">
    jQuery(function() {
        jQuery('#camera_wrap_0').camera({
            navigation: true,
            playPause: false,
            thumbnails: false,
            navigationHover: false,
            loader: false,
            time: 3000,
            transPeriod: 800,
            alignment: 'center',
            autoAdvance: true,
            mobileAutoAdvance: true,
            barDirection: 'leftToRight',
            barPosition: 'bottom',
            easing: 'easeInOutExpo',
            fx: 'simpleFade',
            height: '43.67%',
            minHeight: '120px',
            hover: true,
            pagination: false,
            loaderColor: '#1f1f1f',
            loaderBgColor: 'translf' +
                'parent',
            loaderOpacity: 1,
            loaderPadding: 0,
            loaderStroke: 3,
        });
    });
</script>
";
        
        $__internal_7ec133087979bc629a1cb2cc6dc7ddd3b01d5f482f820ae8f0c6b986f892a3d6->leave($__internal_7ec133087979bc629a1cb2cc6dc7ddd3b01d5f482f820ae8f0c6b986f892a3d6_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 173,  393 => 164,  380 => 154,  375 => 151,  369 => 150,  363 => 146,  356 => 141,  353 => 140,  349 => 139,  343 => 136,  335 => 133,  331 => 131,  325 => 129,  320 => 127,  315 => 126,  313 => 125,  304 => 119,  300 => 118,  295 => 116,  290 => 114,  279 => 106,  273 => 102,  267 => 101,  261 => 97,  254 => 92,  251 => 91,  247 => 90,  232 => 78,  227 => 75,  221 => 73,  216 => 71,  211 => 70,  209 => 69,  204 => 67,  199 => 65,  191 => 60,  186 => 58,  181 => 56,  174 => 52,  169 => 49,  165 => 48,  147 => 32,  137 => 28,  133 => 27,  129 => 26,  124 => 24,  120 => 23,  117 => 22,  113 => 21,  108 => 18,  102 => 17,  90 => 15,  81 => 12,  76 => 11,  70 => 10,  61 => 7,  56 => 6,  50 => 5,  38 => 3,  11 => 1,);
    }
}
/* {% extends "FrontendBundle::base.html.twig" %}*/
/* */
/* {% block titre %}Electro El Atoui - Acceuil{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/*  <link href="{{ asset('frontend/css/front/camera.css') }}" type="text/css" rel="stylesheet" media="screen" />*/
/*  <link href="{{ asset('frontend/css/front/jquery.fancybox.css') }}" rel="stylesheet" media="screen" />*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script src="{{ asset('frontend/js/front/camera.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontend/js/front/jquery.fancybox.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* */
/* {% block body_class %}common-home{% endblock %}*/
/* */
/* {% block body %}*/
/* <div class="fluid_container">*/
/*     <div class="camera_container">*/
/*         <div id="camera_wrap_0">*/
/*           {% for product in rand_products %}*/
/*             <div title="slide-1}"*/
/*                 data-thumb="{{ asset('frontend/images/slide870x380.jpg') }}"*/
/*                 data-src="{{ asset('frontend/images/slide870x380.jpg') }}">*/
/*                 <div class="camera_caption fadeIn">*/
/*                     <h1>{{ product.name }}</h1>*/
/*                     <p>{{ product.shortDescription }}</p>*/
/*                     <a href="{{ path('_product_detail', { 'slug' : product.slug }) }}">Acheter maintenant</a>*/
/*                 </div>*/
/*             </div>*/
/*           {% endfor %}*/
/*         </div>*/
/*     </div>*/
/*     <div class="clear"></div>*/
/* </div>*/
/* */
/* <div class="box latest">*/
/*     <div class="box-heading">*/
/*         <div class="customNavigation">*/
/*             <a class="prev"><i class="fa fa-caret-left"></i></a>*/
/*             <a class="next"><i class="fa fa-caret-right"></i></a>*/
/*         </div>*/
/*         <h3>Derniers produits ajoutés</h3>*/
/*     </div>*/
/*     <div class="box-content">*/
/*         <div class="product-layout">*/
/*             <div class="box-carousel">*/
/*                 {% for product in last_products %}*/
/*                     <div>*/
/*                         <div class="product-thumb transition" style="height: 371px;">*/
/*                             <div class="quick_info">*/
/*                                 <div id="quickview_latest_{{ product.id }}">*/
/*                                     <div>*/
/*                                         <div class="left col-sm-4">*/
/*                                             <div class="quickview_image image">*/
/*                                                 <a href="{{ path('_product_detail', { 'slug' : product.slug }) }}">*/
/*                                                     <img */
/*                                                         alt="{{ product.name }}"*/
/*                                                         class="img-responsive"*/
/*                                                         src="{{ '/uploads/product.png' | imagine_filter('product_270') }}">*/
/*                                                 </a>*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="right col-sm-8">*/
/*                                             <h2>{{ product.name }}</h2>*/
/*                                             <div class="inf">*/
/*                                                 <p class="product_model model">Réf: {{ product.reference }}</p>*/
/*                                                 <div class="price">*/
/*                                                     {% if product.forSale %}*/
/*                                                       <span class="price-new">{{ product.salePrice }} DT</span>*/
/*                                                       <span class="price-old">{{ product.price }} DT</span>*/
/*                                                     {% else %}*/
/*                                                       <span class="price-new">{{ product.price }} DT</span>*/
/*                                                     {% endif %}*/
/*                                                 </div>*/
/*                                             </div>*/
/*                                             <div class="cart-button">*/
/*                                                 <a class="btn btn-add" href="{{ path('_product_detail', { 'slug' : product.slug }) }}">*/
/*                                                     <i class="material-design-shopping232"></i>*/
/*                                                 </a>*/
/*                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="" onclick="" data-original-title="Add to Wish List">*/
/*                                                     <i class="fa fa-heart"></i>*/
/*                                                 </button>*/
/*                                                 <button class="btn btn-icon" type="button" data-toggle="tooltip" title="" onclick="" data-original-title="Compare this Product">*/
/*                                                     <i class="fa fa-exchange"></i>*/
/*                                                 </button>*/
/*                                             </div>*/
/*                                             <div class="clear"></div>*/
/*                                             <div class="rating">*/
/*                                                 {% for index in 1..5 %}*/
/*                                                     {% if index <= product.rateValue %}*/
/*                                                         <span class="fa fa-stack">*/
/*                                                             <i class="fa fa-star fa-stack-2x"></i>*/
/*                                                             <i class="fa fa-star-o fa-stack-2x"></i>*/
/*                                                         </span>*/
/*                                                     {% else %}*/
/*                                                         <span class="fa fa-stack">*/
/*                                                             <i class="fa fa-star-o fa-stack-2x"></i>*/
/*                                                         </span>*/
/*                                                     {% endif %}*/
/*                                                 {% endfor %}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                         <div class="col-sm-12">*/
/*                                             <div class="quickview_description description">*/
/*                                                 {{ product.description|raw }}*/
/*                                             </div>*/
/*                                         </div>*/
/*                                     </div>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="new_pr">Nouveau</div>*/
/*                             <div class="image">*/
/*                                 <a class="lazy lazy-loaded" style="padding-bottom: 100%" href="{{ path('_product_detail', { 'slug' : product.slug }) }}">*/
/*                                     <img*/
/*                                         alt="{{ product.name }}"*/
/*                                         class="img-responsive"*/
/*                                         data-src="{{ '/uploads/product.png' | imagine_filter('product_270') }}"*/
/*                                         src="{{ '/uploads/product.png' | imagine_filter('product_270') }}">*/
/*                                 </a>*/
/*                             </div>*/
/*                             <div class="box-hover">*/
/*                                 <div class="caption">*/
/*                                     <div class="price">*/
/*                                         {% if product.forSale %}*/
/*                                           <span class="price-new">{{ product.salePrice }} DT</span>*/
/*                                           <span class="price-old">{{ product.price }} DT</span>*/
/*                                         {% else %}*/
/*                                           <span class="price-new">{{ product.price }} DT</span>*/
/*                                         {% endif %}*/
/*                                     </div>*/
/*                                     <div class="name">*/
/*                                         <a href="{{ path('_product_detail', { 'slug' : product.slug }) }}">{{ product.name }}</a>*/
/*                                     </div>*/
/*                                     <div class="description">*/
/*                                         {{ product.shortDescription[:30] ~ '...' }}*/
/*                                      </div>*/
/*                                     <div class="rating">*/
/*                                         {% for index in 1..5 %}*/
/*                                             {% if index <= product.rateValue %}*/
/*                                                 <span class="fa fa-stack">*/
/*                                                     <i class="fa fa-star fa-stack-2x"></i>*/
/*                                                     <i class="fa fa-star-o fa-stack-2x"></i>*/
/*                                                 </span>*/
/*                                             {% else %}*/
/*                                                 <span class="fa fa-stack">*/
/*                                                     <i class="fa fa-star-o fa-stack-2x"></i>*/
/*                                                 </span>*/
/*                                             {% endif %}*/
/*                                         {% endfor %}*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 <div class="cart-button">*/
/*                                     <a class="product-btn-add" href="{{ path('_product_detail', { 'slug' : product.slug }) }}">*/
/*                                         <i class="material-design-shopping232"></i>*/
/*                                         <span class="hidden-xs hidden-sm hidden-md">Je le veux</span>*/
/*                                     </a>*/
/*                                     <button class="product-btn" type="button" data-toggle="tooltip" data-original-title="Ajouter au favories">*/
/*                                         <i class="fa fa-heart"></i>*/
/*                                     </button>*/
/*                                     <button class="product-btn" type="button" data-toggle="tooltip" data-original-title="Comparer ce produit">*/
/*                                         <i class="fa fa-exchange"></i>*/
/*                                     </button>*/
/*                                     <a class="quickview quickview-latest product-btn" data-toggle="tooltip" href="#quickview_latest_{{ product.id }}" data-original-title="Détail">*/
/*                                         <i class="fa fa-check-square-o"></i>*/
/*                                     </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                             <div class="clear"></div>*/
/*                         </div>*/
/*                     </div>*/
/*                 {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     jQuery(function() {*/
/*         jQuery('#camera_wrap_0').camera({*/
/*             navigation: true,*/
/*             playPause: false,*/
/*             thumbnails: false,*/
/*             navigationHover: false,*/
/*             loader: false,*/
/*             time: 3000,*/
/*             transPeriod: 800,*/
/*             alignment: 'center',*/
/*             autoAdvance: true,*/
/*             mobileAutoAdvance: true,*/
/*             barDirection: 'leftToRight',*/
/*             barPosition: 'bottom',*/
/*             easing: 'easeInOutExpo',*/
/*             fx: 'simpleFade',*/
/*             height: '43.67%',*/
/*             minHeight: '120px',*/
/*             hover: true,*/
/*             pagination: false,*/
/*             loaderColor: '#1f1f1f',*/
/*             loaderBgColor: 'translf' +*/
/*                 'parent',*/
/*             loaderOpacity: 1,*/
/*             loaderPadding: 0,*/
/*             loaderStroke: 3,*/
/*         });*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
