<?php

/* FrontendBundle:Default:products/product_detail.html.twig */
class __TwigTemplate_83782c13a40019c3fc0bbca95d69fdaf602bb5ea3c3be2df699706acc637b628 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default:products/product_detail.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_class' => array($this, 'block_body_class'),
            'location' => array($this, 'block_location'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FrontendBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ba2b9f18b063cb66cefe2905a70d6815d49dff9769770ce8484d2bfca2d18620 = $this->env->getExtension("native_profiler");
        $__internal_ba2b9f18b063cb66cefe2905a70d6815d49dff9769770ce8484d2bfca2d18620->enter($__internal_ba2b9f18b063cb66cefe2905a70d6815d49dff9769770ce8484d2bfca2d18620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:products/product_detail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ba2b9f18b063cb66cefe2905a70d6815d49dff9769770ce8484d2bfca2d18620->leave($__internal_ba2b9f18b063cb66cefe2905a70d6815d49dff9769770ce8484d2bfca2d18620_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_bfda77faed2ba6f3ffaa76bb6730af922180a0d4f12ff53c5ba20f1e4922c650 = $this->env->getExtension("native_profiler");
        $__internal_bfda77faed2ba6f3ffaa76bb6730af922180a0d4f12ff53c5ba20f1e4922c650->enter($__internal_bfda77faed2ba6f3ffaa76bb6730af922180a0d4f12ff53c5ba20f1e4922c650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Electro El Atoui - ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        
        $__internal_bfda77faed2ba6f3ffaa76bb6730af922180a0d4f12ff53c5ba20f1e4922c650->leave($__internal_bfda77faed2ba6f3ffaa76bb6730af922180a0d4f12ff53c5ba20f1e4922c650_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_15f7475f17e2c07172bf3ef8262db3b481b542ad5ffa48648a3719115a623860 = $this->env->getExtension("native_profiler");
        $__internal_15f7475f17e2c07172bf3ef8262db3b481b542ad5ffa48648a3719115a623860->enter($__internal_15f7475f17e2c07172bf3ef8262db3b481b542ad5ffa48648a3719115a623860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "<link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
<link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/photoswipe.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
<link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/rating.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
";
        
        $__internal_15f7475f17e2c07172bf3ef8262db3b481b542ad5ffa48648a3719115a623860->leave($__internal_15f7475f17e2c07172bf3ef8262db3b481b542ad5ffa48648a3719115a623860_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e9bbb27f1085c794bd28a6df165e42d71e85becfb0403cdc53598ad3f197ab62 = $this->env->getExtension("native_profiler");
        $__internal_e9bbb27f1085c794bd28a6df165e42d71e85becfb0403cdc53598ad3f197ab62->enter($__internal_e9bbb27f1085c794bd28a6df165e42d71e85becfb0403cdc53598ad3f197ab62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 12
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/jquery.easing.1.3.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/klass.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/code.photoswipe.jquery-3.0.5.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/code.photoswipe-3.0.5.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/jquery.elevatezoom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/jquery.fancybox.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/rating.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
        
        $__internal_e9bbb27f1085c794bd28a6df165e42d71e85becfb0403cdc53598ad3f197ab62->leave($__internal_e9bbb27f1085c794bd28a6df165e42d71e85becfb0403cdc53598ad3f197ab62_prof);

    }

    // line 21
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_29d3131536f323cdea505f1eb931dcf45831554f28721199ee872c6900916c6c = $this->env->getExtension("native_profiler");
        $__internal_29d3131536f323cdea505f1eb931dcf45831554f28721199ee872c6900916c6c->enter($__internal_29d3131536f323cdea505f1eb931dcf45831554f28721199ee872c6900916c6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "product-product-33";
        
        $__internal_29d3131536f323cdea505f1eb931dcf45831554f28721199ee872c6900916c6c->leave($__internal_29d3131536f323cdea505f1eb931dcf45831554f28721199ee872c6900916c6c_prof);

    }

    // line 24
    public function block_location($context, array $blocks = array())
    {
        $__internal_f7e465d8335f46a7cfe1010dda0eb6184fc1f313e0a71f5278dd7bc87255fbf7 = $this->env->getExtension("native_profiler");
        $__internal_f7e465d8335f46a7cfe1010dda0eb6184fc1f313e0a71f5278dd7bc87255fbf7->enter($__internal_f7e465d8335f46a7cfe1010dda0eb6184fc1f313e0a71f5278dd7bc87255fbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "location"));

        // line 25
        echo "<ul class=\"breadcrumb\">
  <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_frontend_homepage");
        echo "\"><i class=\"fa fa-home\"></i></a></li>
    ";
        // line 27
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category", array())) {
            // line 28
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category", array()), "parents", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "        <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_category_detail", array("slug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a></li>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "      <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_category_detail", array("slug" => $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category", array()), "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "category", array()), "name", array()), "html", null, true);
            echo "</a></li>
    ";
        }
        // line 33
        echo "  <li><span>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</span></li>
</ul>
";
        
        $__internal_f7e465d8335f46a7cfe1010dda0eb6184fc1f313e0a71f5278dd7bc87255fbf7->leave($__internal_f7e465d8335f46a7cfe1010dda0eb6184fc1f313e0a71f5278dd7bc87255fbf7_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_733cde87bba37e37e49c311274ddd760a90396bba6648e2bd30b5606d3843c49 = $this->env->getExtension("native_profiler");
        $__internal_733cde87bba37e37e49c311274ddd760a90396bba6648e2bd30b5606d3843c49->enter($__internal_733cde87bba37e37e49c311274ddd760a90396bba6648e2bd30b5606d3843c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 39
        echo "<div class=\"row\">
    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 41
            echo "        <div class=\"alert alert-success\">
            ";
            // line 42
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
    <div id=\"content\" class=\"col-sm-12 product_page\">
        <div class=\"row product-content-columns\">
            <div class=\"col-sm-5 col-lg-7 product_page-left\">
                <div id=\"default_gallery\" class=\"product-gallery\">
                    <div class=\"image-thumb\">
                        <div class=\"bx-wrapper\">
                            <div class=\"bx-viewport\">
                                <ul id=\"image-additional\">
                                    <li>
                                        <a class=\"active\" href=\"#\" data-image=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\">
                                            <img src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" alt=\"\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-image=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\">
                                            <img src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_88"), "html", null, true);
        echo "\" alt=\"\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-image=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\">
                                        <img src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_88"), "html", null, true);
        echo "\" alt=\"\">
                                    </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-image=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\">
                                          <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_88"), "html", null, true);
        echo "\" alt=\"\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-image=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\">
                                           <img src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_88"), "html", null, true);
        echo "\" alt=\"\">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class=\"bx-controls bx-has-controls-direction\">
                                <div class=\"bx-controls-direction\">
                                  <a class=\"bx-prev disabled\" href=\"\">
                                    <i class=\"fa fa-chevron-up\"></i>
                                  </a>
                                  <a class=\"bx-next disabled\" href=\"\">
                                    <i class=\"fa fa-chevron-down\"></i>
                                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"image\">
                        <div class=\"zoomWrapper\">
                            <img id=\"gallery_zoom\" src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-zoom-image=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" alt=\"\">
                        </div>
                    </div>
                </div>

                <div id=\"full_gallery\">
                    <div class=\"bx-wrapper\">
                        <div class=\"bx-viewport\">
                            <ul id=\"gallery\">
                                <li>
                                    <a href=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-something=\"something\" data-another-thing=\"anotherthing\">
                                      <img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" title=\"Aliquam eget\" alt=\"Aliquam eget\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-something=\"something1\" data-another-thing=\"anotherthing1\">
                                      <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" alt=\"Aliquam eget\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-something=\"something1\" data-another-thing=\"anotherthing1\">
                                      <img src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" alt=\"Aliquam eget\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-something=\"something1\" data-another-thing=\"anotherthing1\">
                                      <img src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" alt=\"Aliquam eget\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" data-something=\"something1\" data-another-thing=\"anotherthing1\">
                                      <img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_800"), "html", null, true);
        echo "\" alt=\"Aliquam eget\">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class=\"bx-controls bx-has-controls-direction\">
                            <div class=\"bx-controls-direction\">
                            <a class=\"bx-prev\" href=\"\">
                              <i class=\"fa fa-chevron-left\"></i>
                            </a>
                            <a class=\"bx-next\" href=\"\">
                              <i class=\"fa fa-chevron-right\"></i>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=\"col-sm-7 col-lg-5 product_page-right\">
                <div class=\"general_info product-info\">
                    <h1 class=\"product-title\">";
        // line 148
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "name", array()), "html", null, true);
        echo "</h1>

                    <div class=\"rating-section product-rating-status\">
                        <div class=\"rating\">
                            ";
        // line 152
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 153
            echo "                                ";
            if (($context["index"] <= $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "rateValue", array()))) {
                // line 154
                echo "                                    <span class=\"fa fa-stack\">
                                        <i class=\"fa fa-star fa-stack-2x\"></i>
                                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                    </span>
                                ";
            } else {
                // line 159
                echo "                                    <span class=\"fa fa-stack\">
                                        <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                    </span>
                                ";
            }
            // line 163
            echo "                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 164
        echo "                            &nbsp; &nbsp;
                            <span>";
        // line 165
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "rateCount", array()), "html", null, true);
        echo " avis</span>
                            ";
        // line 166
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isRating", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method") == false)) {
            // line 167
            echo "                                /
                                <a onclick=\"document.getElementById('tab-review').scrollIntoView();\">Ajouter un avis</a>
                            ";
        }
        // line 170
        echo "                        </div>
                    </div>
                    <div class=\"price-section price\">
                        ";
        // line 173
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "forSale", array())) {
            // line 174
            echo "                          <span class=\"price-new\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "salePrice", array()), "html", null, true);
            echo " DT</span>
                          <span class=\"price-old\">";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
            echo " DT</span>
                        ";
        } else {
            // line 177
            echo "                          <span class=\"price-new\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "price", array()), "html", null, true);
            echo " DT</span>
                        ";
        }
        // line 179
        echo "                    </div>
                    <ul class=\"list-unstyled product-section\">
                        <li>Catégorie(s): <small>";
        // line 181
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "categories", array()), ", "), "html", null, true);
        echo "</small></li>
                        <li>Réference: <span>";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "reference", array()), "html", null, true);
        echo "</span></li>
                        <li>Disponibilité: <span>";
        // line 183
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isAvailableToBuy", array())) {
            echo "En Stock";
        } else {
            echo "Expiré";
        }
        echo "</span></li>
                    </ul>
                </div>
                <div id=\"product\">

                    <div class=\"product-options form-horizontal\">
                        <h3>Options Disponible</h3>
                        <div class=\"form-group\">
                            <label>Pas d'options pour ce produit</label>
                        </div>
                    </div>

                    <div class=\"product-reccurings\">
                    </div>

                    <div class=\"form-group form-horizontal\">
                        <div class=\"form-group\">
                            <label class=\"control-label col-sm-4\" for=\"input-quantity\">Qantité</label>
                            <div class=\"col-sm-2\">
                                <input type=\"number\" name=\"quantity\" id=\"p-quantity\" value=\"1\" min=\"1\" max=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "quantity", array()), "html", null, true);
        echo "\">
                            </div>
                        </div>
                        <input type=\"hidden\" id=\"product_slug\" value=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "slug", array()), "html", null, true);
        echo "\">
                        ";
        // line 206
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isAvailableToBuy", array())) {
            // line 207
            echo "                          <button type=\"button\" id=\"button-cart\" data-loading-text=\"Loading...\" class=\"btn btn-add\" onclick=\"addItem('";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "id", array()), "html", null, true);
            echo "');\">Ajouter au panier</button>
                        ";
        }
        // line 209
        echo "                    </div>
                    <ul class=\"product-buttons\">
                        <li>
                            <button class=\"btn btn-icon\" onclick=\"\">
                                <i class=\"fa fa-heart\"></i>
                                <span class=\"hidden-xs hidden-sm\">Ajouter au favories</span>
                            </button>
                        </li>
                        <li>
                            <button type=\"button\" class=\"btn btn-icon\" onclick=\"\">
                                <i class=\"fa fa-exchange\"></i>
                                <span class=\"hidden-xs hidden-sm\">Comparer ce produit</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div id=\"tab-description\" class=\"product-desc product-section\">
            <h3 class=\"product-section_title\">Description</h3>
            <p>";
        // line 230
        echo $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "description", array());
        echo "</p>
            <div class=\"clearfix\"></div>
        </div>

        <div id=\"tab-review\" class=\"product-reviews product-section\">
            ";
        // line 235
        if ($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "rate", array())) {
            // line 236
            echo "            <h3 class=\"product-section_title\">Avis client (";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "rateCount", array()), "html", null, true);
            echo ")</h3>
            <div id=\"review\">
            ";
            // line 238
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "rate", array()), "votes", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["vote"]) {
                // line 239
                echo "                <div class=\"review-item\">
                    <div class=\"row\">
                        <div class=\"col-sm-3\">
                            <div class=\"review-score\">
                                ";
                // line 243
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                    // line 244
                    echo "                                    ";
                    if (($context["index"] <= $this->getAttribute($context["vote"], "value", array()))) {
                        // line 245
                        echo "                                        <span class=\"fa fa-stack\">
                                            <i class=\"fa fa-star fa-stack-2x\"></i>
                                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                        </span>
                                    ";
                    } else {
                        // line 250
                        echo "                                        <span class=\"fa fa-stack\">
                                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                        </span>
                                    ";
                    }
                    // line 254
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 255
                echo "                            </div>
                            <div class=\"review-author\"><strong>";
                // line 256
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["vote"], "user", array()), "username", array()), "html", null, true);
                echo "</strong>
                            </div>
                            <div class=\"review-date\">";
                // line 258
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["vote"], "createdAt", array()), "d/m/Y"), "html", null, true);
                echo "</div>
                        </div>
                        <div class=\"col-sm-9\">
                           ";
                // line 261
                echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["vote"], "comment", array()), "html", null, true));
                echo "
                        </div>
                    </div>
                </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['vote'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 266
            echo "                <div class=\"text-right\"></div>
            </div>
            ";
        }
        // line 269
        echo "
            <div id=\"form_review\"></div>

            ";
        // line 272
        if (($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "isRating", array(0 => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())), "method") == false)) {
            // line 273
            echo "                <form id=\"review\" class=\"form-horizontal\">
                    <div class=\"review-form-title\">
                        <h3 class=\"product-section_title close-tab\" id=\"reviews_form_title\">Ajouter un avis</h3>
                    </div>
                    <div class=\"product-review-form\" id=\"reviews_form\" style=\"display: none;\">
                        <div class=\"form-group required\">
                            <label class=\"control-label col-sm-3\" for=\"input-review\">Votre commentaire</label>
                            <div class=\"col-sm-9\">
                                <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                            </div>
                        </div>
                        <div class=\"form-group required\">
                            <label class=\"control-label col-sm-3\">Vote</label>
                            <div class=\"col-sm-9\">
                                <ul class=\"c-rating\"></ul>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <div class=\"col-sm-9 col-sm-offset-3\">
                                <div class=\"pull-right\">
                                    <button type=\"button\" id=\"button-review\" data-loading-text=\"Loading...\" class=\"btn btn-primary\">Envoyer</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            ";
        }
        // line 300
        echo "        </div>

    ";
        // line 302
        if ((isset($context["related_products"]) ? $context["related_products"] : $this->getContext($context, "related_products"))) {
            // line 303
            echo "        <div class=\"related-products product-section\">
            <h3 class=\"product-section_title\">Produit Similaires</h3>
            <div class=\"related-slider\">
                ";
            // line 306
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["related_products"]) ? $context["related_products"] : $this->getContext($context, "related_products")));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 307
                echo "                <div>
                    <div class=\"product-thumb transition\">
                        <div class=\"image\">
                            <a class=\"lazy lazy-loaded\" style=\"padding-bottom: 100%\" href=\"";
                // line 310
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\">
                                <img alt=\"";
                // line 311
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "\"
                                    class=\"img-responsive\"
                                    data-src=\"";
                // line 313
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_270"), "html", null, true);
                echo "\"
                                    src=\"";
                // line 314
                echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter("/uploads/product.png", "product_270"), "html", null, true);
                echo "\">
                            </a>
                        </div>
                        <div class=\"caption\">
                            <div class=\"name\">
                                <a href=\"";
                // line 319
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "name", array()), "html", null, true);
                echo "</a>
                            </div>
                            <p>";
                // line 321
                echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["product"], "shortDescription", array()), 0, 30) . "..."), "html", null, true);
                echo "</p>
                            <div class=\"rating\">
                                ";
                // line 323
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, 5));
                foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                    // line 324
                    echo "                                    ";
                    if (($context["index"] <= $this->getAttribute($context["product"], "rateValue", array()))) {
                        // line 325
                        echo "                                        <span class=\"fa fa-stack\">
                                            <i class=\"fa fa-star fa-stack-2x\"></i>
                                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                        </span>
                                    ";
                    } else {
                        // line 330
                        echo "                                        <span class=\"fa fa-stack\">
                                            <i class=\"fa fa-star-o fa-stack-2x\"></i>
                                        </span>
                                    ";
                    }
                    // line 334
                    echo "                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 335
                echo "                            </div>
                            <p class=\"price\">
                                ";
                // line 337
                if ($this->getAttribute($context["product"], "forSale", array())) {
                    // line 338
                    echo "                                  <span class=\"price-new\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "salePrice", array()), "html", null, true);
                    echo " DT</span>
                                  <span class=\"price-old\">";
                    // line 339
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                    echo " DT</span>
                                ";
                } else {
                    // line 341
                    echo "                                  <span class=\"price-new\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["product"], "price", array()), "html", null, true);
                    echo " DT</span>
                                ";
                }
                // line 343
                echo "                            </p>
                        </div>
                        <div class=\"cart-button\">
                            <a class=\"product-btn-add\" href=\"";
                // line 346
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_product_detail", array("slug" => $this->getAttribute($context["product"], "slug", array()))), "html", null, true);
                echo "\">
                                <i class=\"material-design-shopping232\"></i>
                                <span class=\"hidden-xs hidden-sm hidden-md\">Je le veux</span>
                            </a>
                            <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Ajouter au favories\" onclick=\"\">
                                <i class=\"fa fa-heart\"></i>
                            </button>
                            <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Comparer ce produit\" onclick=\"\">
                                <i class=\"fa fa-exchange\"></i>
                            </button>
                        </div>
                        <div class=\"clear\"></div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 361
            echo "            </div>
        </div>
    ";
        }
        // line 364
        echo "    </div>
</div>

<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        var myPhotoSwipe = \$(\"#gallery a\").photoSwipe({
            enableMouseWheel: false,
            enableKeyboard: false,
            captionAndToolbarAutoHideDelay: 0
        });
    });

    jQuery('#button-review').on('click', function() {
        jQuery.ajax({
            url: Routing.generate('_product_rate', {slug: jQuery('#product_slug').val()}),
            type: 'post',
            dataType: 'json',
            data: {
                'comment': jQuery('textarea[name=\\'text\\']').val(),
                'rating': my_rating.getRating()
            },
            beforeSend: function() {
                jQuery('#button-review').button('loading');
            },
            complete: function() {
                jQuery('#button-review').button('reset');
            },
            success: function(data) {
                jQuery('.alert-success, .alert-danger').remove();
                if (data['error']) {
                    jQuery('#form_review').after('<div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ' + data['error'] + '</div>');
                }
                if (data['success']) {
                    jQuery('#form_review').after('<div class=\"alert alert-success\"><i class=\"fa fa-check-circle\"></i> ' + data['success'] + '</div>');
                    jQuery('textarea[name=\\'text\\']').val('');
                    jQuery('#review').hide();
                }
                setTimeout(function() {\$('.alert').fadeOut(1000)},3000)
            }
        });
    });

    jQuery('#reviews_form_title').addClass('close-tab');
    jQuery('#reviews_form_title').on(\"click\", function(){
        if (jQuery(this).hasClass('close-tab')) {
            jQuery(this).removeClass('close').parents('#tab-review').find('#reviews_form').slideToggle();
        } else {
            jQuery(this).addClass('close-tab').parents('#tab-review').find('#reviews_form').slideToggle();
        }
    });
</script>
";
        
        $__internal_733cde87bba37e37e49c311274ddd760a90396bba6648e2bd30b5606d3843c49->leave($__internal_733cde87bba37e37e49c311274ddd760a90396bba6648e2bd30b5606d3843c49_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:products/product_detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  782 => 364,  777 => 361,  756 => 346,  751 => 343,  745 => 341,  740 => 339,  735 => 338,  733 => 337,  729 => 335,  723 => 334,  717 => 330,  710 => 325,  707 => 324,  703 => 323,  698 => 321,  691 => 319,  683 => 314,  679 => 313,  674 => 311,  670 => 310,  665 => 307,  661 => 306,  656 => 303,  654 => 302,  650 => 300,  621 => 273,  619 => 272,  614 => 269,  609 => 266,  598 => 261,  592 => 258,  587 => 256,  584 => 255,  578 => 254,  572 => 250,  565 => 245,  562 => 244,  558 => 243,  552 => 239,  548 => 238,  542 => 236,  540 => 235,  532 => 230,  509 => 209,  503 => 207,  501 => 206,  497 => 205,  491 => 202,  465 => 183,  461 => 182,  457 => 181,  453 => 179,  447 => 177,  442 => 175,  437 => 174,  435 => 173,  430 => 170,  425 => 167,  423 => 166,  419 => 165,  416 => 164,  410 => 163,  404 => 159,  397 => 154,  394 => 153,  390 => 152,  383 => 148,  359 => 127,  355 => 126,  348 => 122,  344 => 121,  337 => 117,  333 => 116,  326 => 112,  322 => 111,  315 => 107,  311 => 106,  296 => 96,  274 => 77,  268 => 76,  261 => 72,  255 => 71,  248 => 67,  242 => 66,  235 => 62,  229 => 61,  222 => 57,  216 => 56,  204 => 46,  194 => 42,  191 => 41,  187 => 40,  184 => 39,  178 => 38,  167 => 33,  159 => 31,  148 => 29,  143 => 28,  141 => 27,  137 => 26,  134 => 25,  128 => 24,  116 => 21,  107 => 18,  103 => 17,  99 => 16,  95 => 15,  91 => 14,  87 => 13,  82 => 12,  76 => 11,  67 => 8,  63 => 7,  58 => 6,  52 => 5,  39 => 3,  11 => 1,);
    }
}
/* {% extends "FrontendBundle::base.html.twig" %}*/
/* */
/* {% block titre %}Electro El Atoui - {{ product.name }}{% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <link href="{{ asset('frontend/css/front/jquery.fancybox.css') }}" rel="stylesheet" media="screen" />*/
/* <link href="{{ asset('frontend/css/front/photoswipe.css') }}" rel="stylesheet">*/
/* <link href="{{ asset('frontend/css/front/rating.min.css') }}" rel="stylesheet">*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/* <script src="{{ asset('frontend/js/front/jquery.easing.1.3.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontend/js/front/klass.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontend/js/front/code.photoswipe.jquery-3.0.5.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontend/js/front/code.photoswipe-3.0.5.min.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontend/js/front/jquery.elevatezoom.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontend/js/front/jquery.fancybox.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('frontend/js/front/rating.min.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* */
/* {% block body_class %}product-product-33{% endblock %}*/
/* */
/* */
/* {% block location %}*/
/* <ul class="breadcrumb">*/
/*   <li><a href="{{ path('_frontend_homepage') }}"><i class="fa fa-home"></i></a></li>*/
/*     {% if product.category %}*/
/*       {% for category in product.category.parents %}*/
/*         <li><a href="{{ path('_category_detail', { 'slug' : category.slug }) }}">{{ category.name }}</a></li>*/
/*       {% endfor %}*/
/*       <li><a href="{{ path('_category_detail', { 'slug' : product.category.slug }) }}">{{ product.category.name }}</a></li>*/
/*     {% endif %}*/
/*   <li><span>{{ product.name }}</span></li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="row">*/
/*     {% for flashMessage in app.session.flashbag.get('success') %}*/
/*         <div class="alert alert-success">*/
/*             {{ flashMessage }}*/
/*             <button type="button" class="close" data-dismiss="alert">×</button>*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     <div id="content" class="col-sm-12 product_page">*/
/*         <div class="row product-content-columns">*/
/*             <div class="col-sm-5 col-lg-7 product_page-left">*/
/*                 <div id="default_gallery" class="product-gallery">*/
/*                     <div class="image-thumb">*/
/*                         <div class="bx-wrapper">*/
/*                             <div class="bx-viewport">*/
/*                                 <ul id="image-additional">*/
/*                                     <li>*/
/*                                         <a class="active" href="#" data-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-zoom-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}">*/
/*                                             <img src="{{ '/uploads/product.png' | imagine_filter('product_800') }}" alt="">*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" data-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-zoom-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}">*/
/*                                             <img src="{{ '/uploads/product.png' | imagine_filter('product_88') }}" alt="">*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" data-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-zoom-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}">*/
/*                                         <img src="{{ '/uploads/product.png' | imagine_filter('product_88') }}" alt="">*/
/*                                     </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" data-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-zoom-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}">*/
/*                                           <img src="{{ '/uploads/product.png' | imagine_filter('product_88') }}" alt="">*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" data-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-zoom-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}">*/
/*                                            <img src="{{ '/uploads/product.png' | imagine_filter('product_88') }}" alt="">*/
/*                                         </a>*/
/*                                     </li>*/
/*                                 </ul>*/
/*                             </div>*/
/*                             <div class="bx-controls bx-has-controls-direction">*/
/*                                 <div class="bx-controls-direction">*/
/*                                   <a class="bx-prev disabled" href="">*/
/*                                     <i class="fa fa-chevron-up"></i>*/
/*                                   </a>*/
/*                                   <a class="bx-next disabled" href="">*/
/*                                     <i class="fa fa-chevron-down"></i>*/
/*                                   </a>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="image">*/
/*                         <div class="zoomWrapper">*/
/*                             <img id="gallery_zoom" src="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-zoom-image="{{ '/uploads/product.png' | imagine_filter('product_800') }}" alt="">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div id="full_gallery">*/
/*                     <div class="bx-wrapper">*/
/*                         <div class="bx-viewport">*/
/*                             <ul id="gallery">*/
/*                                 <li>*/
/*                                     <a href="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-something="something" data-another-thing="anotherthing">*/
/*                                       <img src="{{ '/uploads/product.png' | imagine_filter('product_800') }}" title="Aliquam eget" alt="Aliquam eget">*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-something="something1" data-another-thing="anotherthing1">*/
/*                                       <img src="{{ '/uploads/product.png' | imagine_filter('product_800') }}" alt="Aliquam eget">*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-something="something1" data-another-thing="anotherthing1">*/
/*                                       <img src="{{ '/uploads/product.png' | imagine_filter('product_800') }}" alt="Aliquam eget">*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-something="something1" data-another-thing="anotherthing1">*/
/*                                       <img src="{{ '/uploads/product.png' | imagine_filter('product_800') }}" alt="Aliquam eget">*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="{{ '/uploads/product.png' | imagine_filter('product_800') }}" data-something="something1" data-another-thing="anotherthing1">*/
/*                                       <img src="{{ '/uploads/product.png' | imagine_filter('product_800') }}" alt="Aliquam eget">*/
/*                                     </a>*/
/*                                 </li>*/
/*                             </ul>*/
/*                         </div>*/
/*                         <div class="bx-controls bx-has-controls-direction">*/
/*                             <div class="bx-controls-direction">*/
/*                             <a class="bx-prev" href="">*/
/*                               <i class="fa fa-chevron-left"></i>*/
/*                             </a>*/
/*                             <a class="bx-next" href="">*/
/*                               <i class="fa fa-chevron-right"></i>*/
/*                             </a>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-sm-7 col-lg-5 product_page-right">*/
/*                 <div class="general_info product-info">*/
/*                     <h1 class="product-title">{{ product.name }}</h1>*/
/* */
/*                     <div class="rating-section product-rating-status">*/
/*                         <div class="rating">*/
/*                             {% for index in 1..5 %}*/
/*                                 {% if index <= product.rateValue %}*/
/*                                     <span class="fa fa-stack">*/
/*                                         <i class="fa fa-star fa-stack-2x"></i>*/
/*                                         <i class="fa fa-star-o fa-stack-2x"></i>*/
/*                                     </span>*/
/*                                 {% else %}*/
/*                                     <span class="fa fa-stack">*/
/*                                         <i class="fa fa-star-o fa-stack-2x"></i>*/
/*                                     </span>*/
/*                                 {% endif %}*/
/*                             {% endfor %}*/
/*                             &nbsp; &nbsp;*/
/*                             <span>{{ product.rateCount }} avis</span>*/
/*                             {% if product.isRating(app.user) == false %}*/
/*                                 /*/
/*                                 <a onclick="document.getElementById('tab-review').scrollIntoView();">Ajouter un avis</a>*/
/*                             {% endif %}*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="price-section price">*/
/*                         {% if product.forSale %}*/
/*                           <span class="price-new">{{ product.salePrice }} DT</span>*/
/*                           <span class="price-old">{{ product.price }} DT</span>*/
/*                         {% else %}*/
/*                           <span class="price-new">{{ product.price }} DT</span>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <ul class="list-unstyled product-section">*/
/*                         <li>Catégorie(s): <small>{{ product.categories|join(', ') }}</small></li>*/
/*                         <li>Réference: <span>{{ product.reference }}</span></li>*/
/*                         <li>Disponibilité: <span>{% if product.isAvailableToBuy %}En Stock{% else %}Expiré{% endif %}</span></li>*/
/*                     </ul>*/
/*                 </div>*/
/*                 <div id="product">*/
/* */
/*                     <div class="product-options form-horizontal">*/
/*                         <h3>Options Disponible</h3>*/
/*                         <div class="form-group">*/
/*                             <label>Pas d'options pour ce produit</label>*/
/*                         </div>*/
/*                     </div>*/
/* */
/*                     <div class="product-reccurings">*/
/*                     </div>*/
/* */
/*                     <div class="form-group form-horizontal">*/
/*                         <div class="form-group">*/
/*                             <label class="control-label col-sm-4" for="input-quantity">Qantité</label>*/
/*                             <div class="col-sm-2">*/
/*                                 <input type="number" name="quantity" id="p-quantity" value="1" min="1" max="{{ product.quantity }}">*/
/*                             </div>*/
/*                         </div>*/
/*                         <input type="hidden" id="product_slug" value="{{ product.slug }}">*/
/*                         {% if product.isAvailableToBuy %}*/
/*                           <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-add" onclick="addItem('{{ product.id }}');">Ajouter au panier</button>*/
/*                         {% endif %}*/
/*                     </div>*/
/*                     <ul class="product-buttons">*/
/*                         <li>*/
/*                             <button class="btn btn-icon" onclick="">*/
/*                                 <i class="fa fa-heart"></i>*/
/*                                 <span class="hidden-xs hidden-sm">Ajouter au favories</span>*/
/*                             </button>*/
/*                         </li>*/
/*                         <li>*/
/*                             <button type="button" class="btn btn-icon" onclick="">*/
/*                                 <i class="fa fa-exchange"></i>*/
/*                                 <span class="hidden-xs hidden-sm">Comparer ce produit</span>*/
/*                             </button>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div id="tab-description" class="product-desc product-section">*/
/*             <h3 class="product-section_title">Description</h3>*/
/*             <p>{{ product.description|raw }}</p>*/
/*             <div class="clearfix"></div>*/
/*         </div>*/
/* */
/*         <div id="tab-review" class="product-reviews product-section">*/
/*             {% if product.rate %}*/
/*             <h3 class="product-section_title">Avis client ({{ product.rateCount }})</h3>*/
/*             <div id="review">*/
/*             {% for vote in product.rate.votes %}*/
/*                 <div class="review-item">*/
/*                     <div class="row">*/
/*                         <div class="col-sm-3">*/
/*                             <div class="review-score">*/
/*                                 {% for index in 1..5 %}*/
/*                                     {% if index <= vote.value %}*/
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
/*                             <div class="review-author"><strong>{{ vote.user.username }}</strong>*/
/*                             </div>*/
/*                             <div class="review-date">{{ vote.createdAt|date("d/m/Y") }}</div>*/
/*                         </div>*/
/*                         <div class="col-sm-9">*/
/*                            {{ vote.comment|nl2br }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 {% endfor %}*/
/*                 <div class="text-right"></div>*/
/*             </div>*/
/*             {% endif %}*/
/* */
/*             <div id="form_review"></div>*/
/* */
/*             {% if product.isRating(app.user) == false %}*/
/*                 <form id="review" class="form-horizontal">*/
/*                     <div class="review-form-title">*/
/*                         <h3 class="product-section_title close-tab" id="reviews_form_title">Ajouter un avis</h3>*/
/*                     </div>*/
/*                     <div class="product-review-form" id="reviews_form" style="display: none;">*/
/*                         <div class="form-group required">*/
/*                             <label class="control-label col-sm-3" for="input-review">Votre commentaire</label>*/
/*                             <div class="col-sm-9">*/
/*                                 <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group required">*/
/*                             <label class="control-label col-sm-3">Vote</label>*/
/*                             <div class="col-sm-9">*/
/*                                 <ul class="c-rating"></ul>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <div class="col-sm-9 col-sm-offset-3">*/
/*                                 <div class="pull-right">*/
/*                                     <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Envoyer</button>*/
/*                                 </div>*/
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </form>*/
/*             {% endif %}*/
/*         </div>*/
/* */
/*     {% if related_products %}*/
/*         <div class="related-products product-section">*/
/*             <h3 class="product-section_title">Produit Similaires</h3>*/
/*             <div class="related-slider">*/
/*                 {% for product in related_products %}*/
/*                 <div>*/
/*                     <div class="product-thumb transition">*/
/*                         <div class="image">*/
/*                             <a class="lazy lazy-loaded" style="padding-bottom: 100%" href="{{ path('_product_detail', { 'slug' : product.slug }) }}">*/
/*                                 <img alt="{{ product.name }}"*/
/*                                     class="img-responsive"*/
/*                                     data-src="{{ '/uploads/product.png' | imagine_filter('product_270') }}"*/
/*                                     src="{{ '/uploads/product.png' | imagine_filter('product_270') }}">*/
/*                             </a>*/
/*                         </div>*/
/*                         <div class="caption">*/
/*                             <div class="name">*/
/*                                 <a href="{{ path('_product_detail', { 'slug' : product.slug }) }}">{{ product.name }}</a>*/
/*                             </div>*/
/*                             <p>{{ product.shortDescription[:30] ~ '...' }}</p>*/
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
/*                             <p class="price">*/
/*                                 {% if product.forSale %}*/
/*                                   <span class="price-new">{{ product.salePrice }} DT</span>*/
/*                                   <span class="price-old">{{ product.price }} DT</span>*/
/*                                 {% else %}*/
/*                                   <span class="price-new">{{ product.price }} DT</span>*/
/*                                 {% endif %}*/
/*                             </p>*/
/*                         </div>*/
/*                         <div class="cart-button">*/
/*                             <a class="product-btn-add" href="{{ path('_product_detail', { 'slug' : product.slug }) }}">*/
/*                                 <i class="material-design-shopping232"></i>*/
/*                                 <span class="hidden-xs hidden-sm hidden-md">Je le veux</span>*/
/*                             </a>*/
/*                             <button class="product-btn" type="button" data-toggle="tooltip" title="Ajouter au favories" onclick="">*/
/*                                 <i class="fa fa-heart"></i>*/
/*                             </button>*/
/*                             <button class="product-btn" type="button" data-toggle="tooltip" title="Comparer ce produit" onclick="">*/
/*                                 <i class="fa fa-exchange"></i>*/
/*                             </button>*/
/*                         </div>*/
/*                         <div class="clear"></div>*/
/*                     </div>*/
/*                 </div>*/
/*             {% endfor %}*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/*     </div>*/
/* </div>*/
/* */
/* <script type="text/javascript">*/
/*     jQuery(document).ready(function() {*/
/*         var myPhotoSwipe = $("#gallery a").photoSwipe({*/
/*             enableMouseWheel: false,*/
/*             enableKeyboard: false,*/
/*             captionAndToolbarAutoHideDelay: 0*/
/*         });*/
/*     });*/
/* */
/*     jQuery('#button-review').on('click', function() {*/
/*         jQuery.ajax({*/
/*             url: Routing.generate('_product_rate', {slug: jQuery('#product_slug').val()}),*/
/*             type: 'post',*/
/*             dataType: 'json',*/
/*             data: {*/
/*                 'comment': jQuery('textarea[name=\'text\']').val(),*/
/*                 'rating': my_rating.getRating()*/
/*             },*/
/*             beforeSend: function() {*/
/*                 jQuery('#button-review').button('loading');*/
/*             },*/
/*             complete: function() {*/
/*                 jQuery('#button-review').button('reset');*/
/*             },*/
/*             success: function(data) {*/
/*                 jQuery('.alert-success, .alert-danger').remove();*/
/*                 if (data['error']) {*/
/*                     jQuery('#form_review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + data['error'] + '</div>');*/
/*                 }*/
/*                 if (data['success']) {*/
/*                     jQuery('#form_review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + data['success'] + '</div>');*/
/*                     jQuery('textarea[name=\'text\']').val('');*/
/*                     jQuery('#review').hide();*/
/*                 }*/
/*                 setTimeout(function() {$('.alert').fadeOut(1000)},3000)*/
/*             }*/
/*         });*/
/*     });*/
/* */
/*     jQuery('#reviews_form_title').addClass('close-tab');*/
/*     jQuery('#reviews_form_title').on("click", function(){*/
/*         if (jQuery(this).hasClass('close-tab')) {*/
/*             jQuery(this).removeClass('close').parents('#tab-review').find('#reviews_form').slideToggle();*/
/*         } else {*/
/*             jQuery(this).addClass('close-tab').parents('#tab-review').find('#reviews_form').slideToggle();*/
/*         }*/
/*     });*/
/* </script>*/
/* {% endblock %}*/
