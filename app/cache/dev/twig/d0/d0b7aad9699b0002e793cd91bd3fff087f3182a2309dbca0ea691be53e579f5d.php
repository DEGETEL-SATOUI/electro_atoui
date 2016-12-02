<?php

/* FrontendBundle::base.html.twig */
class __TwigTemplate_20b1e44c8e2b4d2a970665050212eb1c0671c4dd78c570db7980b3391fe166b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body_class' => array($this, 'block_body_class'),
            'location' => array($this, 'block_location'),
            'boxe_category' => array($this, 'block_boxe_category'),
            'boxes' => array($this, 'block_boxes'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_860d1c7a70504484f987b33c6549e5b5c32bcd6ac8c4b51c8aca910bd4c1b6e3 = $this->env->getExtension("native_profiler");
        $__internal_860d1c7a70504484f987b33c6549e5b5c32bcd6ac8c4b51c8aca910bd4c1b6e3->enter($__internal_860d1c7a70504484f987b33c6549e5b5c32bcd6ac8c4b51c8aca910bd4c1b6e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"fr\">
  <head>
    <title>";
        // line 4
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"";
        // line 7
        $this->displayBlock('description', $context, $blocks);
        echo "\" />
    <meta charset=\"UTF-8\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

    <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/material-design.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/photoswipe.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/stylesheet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/css/front/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("media/favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 20
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 21
        echo "
    <script src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/jquery-ajax.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/jquery.gsap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/TimelineMax.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/TweenMax.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/jquery.scrollmagic.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/jquery.bxslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
  </head>

  <body class=\"";
        // line 33
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    <div id=\"page\">
        <header class=\"header\">
            <div class=\"header-box\">
                <div class=\"container\">
                    <div id=\"logo\" class=\"logo\">
                        <a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("_frontend_homepage");
        echo "\">
                          <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("media/logo.png"), "html", null, true);
        echo "\" title=\"Electro El Atoui\" alt=\"Electro El Atoui\" class=\"img-responsive\" />
                        </a>
                    </div>
                    <div id=\"search\" class=\"search\">
                        <input type=\"text\" name=\"search\" value=\"\" placeholder=\"Ma recherche\" />
                        <button type=\"button\" class=\"button-search\"><span>Rechercher</span>
                        </button>
                    </div>
                    <div class=\"box-right\">
                        <div class=\"box-currency\">
                            <div class=\"btn-group pull-right\">
                                ";
        // line 51
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 52
            echo "                                    <span class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                                 ";
        } else {
            // line 54
            echo "                                    <span class=\"dropdown-toggle\" data-toggle=\"dropdown\">Mon compte</span>
                                 ";
        }
        // line 56
        echo "                                <ul class=\"dropdown-menu  pull-right\">
                                    ";
        // line 57
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 58
            echo "                                        ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 59
                echo "                                          <li><a class=\"currency-select\" href=\"";
                echo $this->env->getExtension('routing')->getPath("_backend_homepage");
                echo "\">Administration</a></li>
                                        ";
            }
            // line 61
            echo "                                        <li><a class=\"currency-select\" href=\"";
            echo $this->env->getExtension('routing')->getPath("_user_account");
            echo "\">Mon compte</a></li>
                                        <li><a class=\"currency-select\" href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Se déconnecter</a></li>
                                    ";
        } else {
            // line 64
            echo "                                        <li><a class=\"currency-select\" href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
                                        <li><a class=\"currency-select\" href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a></li>
                                    ";
        }
        // line 67
        echo "                                </ul>
                            </div>
                        </div>
                        <div class=\"box-language\"></div>
                        <div class=\"phone hidden-xs hidden-sm\">
                            <a href=\"\"><i class=\"material-design-phone370\"></i></a>
                            <span class=\"hidden-xs hidden-sm\">00 216 71 455 455</span>
                        </div>
                    </div>
                </div>
            </div>
            <nav id=\"top\" class=\"clearfix nav\">
                <div class=\"container\">
                    <div class=\"box-cart\">
                        ";
        // line 81
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FrontendBundle:Home:displayCart"), array());
        // line 82
        echo "                    </div>
                    <div id=\"top-links\" class=\"nav pull-left\">
                        ";
        // line 84
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FrontendBundle:Home:navBar"), array());
        // line 85
        echo "                    </div>
                </div>
            </nav>
        </header>

        <div class=\"header_modules\"></div>
        <div id=\"container\">
            <div class=\"container\">
                ";
        // line 93
        $this->displayBlock('location', $context, $blocks);
        // line 94
        echo "                <div class=\"row\">
                    <aside id=\"column-left\" class=\"col-sm-3 \">
                        ";
        // line 96
        $this->displayBlock('boxe_category', $context, $blocks);
        // line 99
        echo "                        ";
        $this->displayBlock('boxes', $context, $blocks);
        // line 102
        echo "                    </aside>

                    <div id=\"content\" class=\"col-sm-9\">
                    ";
        // line 105
        $this->displayBlock('body', $context, $blocks);
        // line 106
        echo "                    </div>
                </div>
            </div>
        </div>

        <footer>
            ";
        // line 112
        $this->loadTemplate("FrontendBundle::footer.html.twig", "FrontendBundle::base.html.twig", 112)->display($context);
        // line 113
        echo "        </footer>
    </div>
     ";
        // line 115
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "     <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/script.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
     <script src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("frontend/js/front/search.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
     <script src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
     <script src=\"";
        // line 119
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
  </body>
</html>";
        
        $__internal_860d1c7a70504484f987b33c6549e5b5c32bcd6ac8c4b51c8aca910bd4c1b6e3->leave($__internal_860d1c7a70504484f987b33c6549e5b5c32bcd6ac8c4b51c8aca910bd4c1b6e3_prof);

    }

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        $__internal_ef9a6c6f1a4b293fc6b03f6a1aff0af660338973943d3e40049b7bc559492d0f = $this->env->getExtension("native_profiler");
        $__internal_ef9a6c6f1a4b293fc6b03f6a1aff0af660338973943d3e40049b7bc559492d0f->enter($__internal_ef9a6c6f1a4b293fc6b03f6a1aff0af660338973943d3e40049b7bc559492d0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Electro El Atoui";
        
        $__internal_ef9a6c6f1a4b293fc6b03f6a1aff0af660338973943d3e40049b7bc559492d0f->leave($__internal_ef9a6c6f1a4b293fc6b03f6a1aff0af660338973943d3e40049b7bc559492d0f_prof);

    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        $__internal_39f96e8c5d2365e30b039b85463e6d2c9fee65690b0e5dba5a415af78f50dae0 = $this->env->getExtension("native_profiler");
        $__internal_39f96e8c5d2365e30b039b85463e6d2c9fee65690b0e5dba5a415af78f50dae0->enter($__internal_39f96e8c5d2365e30b039b85463e6d2c9fee65690b0e5dba5a415af78f50dae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Electro El Atoui";
        
        $__internal_39f96e8c5d2365e30b039b85463e6d2c9fee65690b0e5dba5a415af78f50dae0->leave($__internal_39f96e8c5d2365e30b039b85463e6d2c9fee65690b0e5dba5a415af78f50dae0_prof);

    }

    // line 20
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_abc90ec9e1ca871de75b861047ae8adda58a044e314ccf9c40d5bc63657e52d8 = $this->env->getExtension("native_profiler");
        $__internal_abc90ec9e1ca871de75b861047ae8adda58a044e314ccf9c40d5bc63657e52d8->enter($__internal_abc90ec9e1ca871de75b861047ae8adda58a044e314ccf9c40d5bc63657e52d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_abc90ec9e1ca871de75b861047ae8adda58a044e314ccf9c40d5bc63657e52d8->leave($__internal_abc90ec9e1ca871de75b861047ae8adda58a044e314ccf9c40d5bc63657e52d8_prof);

    }

    // line 33
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_d7cef1094481d52dcfb74da20b4e1d80dd5e745fd6dbb303d2b7978dc01c61bd = $this->env->getExtension("native_profiler");
        $__internal_d7cef1094481d52dcfb74da20b4e1d80dd5e745fd6dbb303d2b7978dc01c61bd->enter($__internal_d7cef1094481d52dcfb74da20b4e1d80dd5e745fd6dbb303d2b7978dc01c61bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo "product-category-33";
        
        $__internal_d7cef1094481d52dcfb74da20b4e1d80dd5e745fd6dbb303d2b7978dc01c61bd->leave($__internal_d7cef1094481d52dcfb74da20b4e1d80dd5e745fd6dbb303d2b7978dc01c61bd_prof);

    }

    // line 93
    public function block_location($context, array $blocks = array())
    {
        $__internal_483ccaa3da7d5849f540909ec6570b9ee90466ea4415acd6031ab1c9a7b0f483 = $this->env->getExtension("native_profiler");
        $__internal_483ccaa3da7d5849f540909ec6570b9ee90466ea4415acd6031ab1c9a7b0f483->enter($__internal_483ccaa3da7d5849f540909ec6570b9ee90466ea4415acd6031ab1c9a7b0f483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "location"));

        
        $__internal_483ccaa3da7d5849f540909ec6570b9ee90466ea4415acd6031ab1c9a7b0f483->leave($__internal_483ccaa3da7d5849f540909ec6570b9ee90466ea4415acd6031ab1c9a7b0f483_prof);

    }

    // line 96
    public function block_boxe_category($context, array $blocks = array())
    {
        $__internal_ed266a63808def408a84178b5ea5d8067a6be8cd2d3aaee3728d5b024ee0614e = $this->env->getExtension("native_profiler");
        $__internal_ed266a63808def408a84178b5ea5d8067a6be8cd2d3aaee3728d5b024ee0614e->enter($__internal_ed266a63808def408a84178b5ea5d8067a6be8cd2d3aaee3728d5b024ee0614e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boxe_category"));

        // line 97
        echo "                          ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FrontendBundle:Home:displayCategories"), array());
        // line 98
        echo "                        ";
        
        $__internal_ed266a63808def408a84178b5ea5d8067a6be8cd2d3aaee3728d5b024ee0614e->leave($__internal_ed266a63808def408a84178b5ea5d8067a6be8cd2d3aaee3728d5b024ee0614e_prof);

    }

    // line 99
    public function block_boxes($context, array $blocks = array())
    {
        $__internal_513a957f43039b976bfac8131226d4bda0db542a2ae9ab05b4e762c78084486d = $this->env->getExtension("native_profiler");
        $__internal_513a957f43039b976bfac8131226d4bda0db542a2ae9ab05b4e762c78084486d->enter($__internal_513a957f43039b976bfac8131226d4bda0db542a2ae9ab05b4e762c78084486d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "boxes"));

        // line 100
        echo "                            ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FrontendBundle:Home:displaySales"), array());
        // line 101
        echo "                        ";
        
        $__internal_513a957f43039b976bfac8131226d4bda0db542a2ae9ab05b4e762c78084486d->leave($__internal_513a957f43039b976bfac8131226d4bda0db542a2ae9ab05b4e762c78084486d_prof);

    }

    // line 105
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ee49b8d9a80eb73911a196257ffea3d67b747ca1d6a153b72aa3b230c50bd70 = $this->env->getExtension("native_profiler");
        $__internal_0ee49b8d9a80eb73911a196257ffea3d67b747ca1d6a153b72aa3b230c50bd70->enter($__internal_0ee49b8d9a80eb73911a196257ffea3d67b747ca1d6a153b72aa3b230c50bd70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0ee49b8d9a80eb73911a196257ffea3d67b747ca1d6a153b72aa3b230c50bd70->leave($__internal_0ee49b8d9a80eb73911a196257ffea3d67b747ca1d6a153b72aa3b230c50bd70_prof);

    }

    // line 115
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e3c9a176c760d29b1919b0a094f5b2df4b0c31d0a12abb7462ee25709543324 = $this->env->getExtension("native_profiler");
        $__internal_8e3c9a176c760d29b1919b0a094f5b2df4b0c31d0a12abb7462ee25709543324->enter($__internal_8e3c9a176c760d29b1919b0a094f5b2df4b0c31d0a12abb7462ee25709543324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_8e3c9a176c760d29b1919b0a094f5b2df4b0c31d0a12abb7462ee25709543324->leave($__internal_8e3c9a176c760d29b1919b0a094f5b2df4b0c31d0a12abb7462ee25709543324_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 115,  382 => 105,  375 => 101,  372 => 100,  366 => 99,  359 => 98,  356 => 97,  350 => 96,  339 => 93,  327 => 33,  316 => 20,  304 => 7,  292 => 4,  282 => 119,  278 => 118,  274 => 117,  269 => 116,  267 => 115,  263 => 113,  261 => 112,  253 => 106,  251 => 105,  246 => 102,  243 => 99,  241 => 96,  237 => 94,  235 => 93,  225 => 85,  223 => 84,  219 => 82,  217 => 81,  201 => 67,  196 => 65,  191 => 64,  186 => 62,  181 => 61,  175 => 59,  172 => 58,  170 => 57,  167 => 56,  163 => 54,  157 => 52,  155 => 51,  141 => 40,  137 => 39,  128 => 33,  122 => 30,  118 => 29,  114 => 28,  110 => 27,  106 => 26,  102 => 25,  98 => 24,  94 => 23,  90 => 22,  87 => 21,  85 => 20,  81 => 19,  77 => 18,  73 => 17,  69 => 16,  65 => 15,  61 => 14,  57 => 13,  53 => 12,  49 => 11,  42 => 7,  36 => 4,  31 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="ltr" lang="fr">*/
/*   <head>*/
/*     <title>{% block titre %}Electro El Atoui{% endblock %}</title>*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="{% block description %}Electro El Atoui{% endblock %}" />*/
/*     <meta charset="UTF-8" />*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/*     <link href="{{ asset('frontend/css/front/bootstrap.min.css') }}" rel="stylesheet" media="screen" />*/
/*     <link href="{{ asset('frontend/css/front/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('frontend/css/front/material-design.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('frontend/css/front/css.css') }}" rel="stylesheet" type="text/css">*/
/*     <link href="{{ asset('frontend/css/front/photoswipe.css') }}" rel="stylesheet" type="text/css">*/
/*     <link href="{{ asset('frontend/css/front/owl.carousel.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('frontend/css/front/stylesheet.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('frontend/css/front/jquery.bxslider.css') }}" rel="stylesheet">*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('media/favicon.ico') }}" />*/
/*     {% block stylesheets %}{% endblock %}*/
/* */
/*     <script src="{{ asset('frontend/js/front/jquery-2.1.1.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('frontend/js/front/jquery-ajax.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('frontend/js/front/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('frontend/js/front/jquery.gsap.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('frontend/js/front/TimelineMax.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('frontend/js/front/TweenMax.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('frontend/js/front/jquery.scrollmagic.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('frontend/js/front/owl.carousel.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('frontend/js/front/jquery.bxslider.js') }}" type="text/javascript"></script>*/
/*   </head>*/
/* */
/*   <body class="{% block body_class %}product-category-33{% endblock %}">*/
/*     <div id="page">*/
/*         <header class="header">*/
/*             <div class="header-box">*/
/*                 <div class="container">*/
/*                     <div id="logo" class="logo">*/
/*                         <a href="{{ path('_frontend_homepage') }}">*/
/*                           <img src="{{ asset('media/logo.png') }}" title="Electro El Atoui" alt="Electro El Atoui" class="img-responsive" />*/
/*                         </a>*/
/*                     </div>*/
/*                     <div id="search" class="search">*/
/*                         <input type="text" name="search" value="" placeholder="Ma recherche" />*/
/*                         <button type="button" class="button-search"><span>Rechercher</span>*/
/*                         </button>*/
/*                     </div>*/
/*                     <div class="box-right">*/
/*                         <div class="box-currency">*/
/*                             <div class="btn-group pull-right">*/
/*                                 {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                                     <span class="dropdown-toggle" data-toggle="dropdown">{{ app.user.username }}</span>*/
/*                                  {% else %}*/
/*                                     <span class="dropdown-toggle" data-toggle="dropdown">Mon compte</span>*/
/*                                  {% endif %}*/
/*                                 <ul class="dropdown-menu  pull-right">*/
/*                                     {% if is_granted('IS_AUTHENTICATED_FULLY') %}*/
/*                                         {% if is_granted('ROLE_ADMIN') %}*/
/*                                           <li><a class="currency-select" href="{{ path('_backend_homepage') }}">Administration</a></li>*/
/*                                         {% endif %}*/
/*                                         <li><a class="currency-select" href="{{ path('_user_account') }}">Mon compte</a></li>*/
/*                                         <li><a class="currency-select" href="{{ path('fos_user_security_logout') }}">Se déconnecter</a></li>*/
/*                                     {% else %}*/
/*                                         <li><a class="currency-select" href="{{ path('fos_user_security_login') }}">Se connecter</a></li>*/
/*                                         <li><a class="currency-select" href="{{ path('fos_user_registration_register') }}">S'inscrire</a></li>*/
/*                                     {% endif %}*/
/*                                 </ul>*/
/*                             </div>*/
/*                         </div>*/
/*                         <div class="box-language"></div>*/
/*                         <div class="phone hidden-xs hidden-sm">*/
/*                             <a href=""><i class="material-design-phone370"></i></a>*/
/*                             <span class="hidden-xs hidden-sm">00 216 71 455 455</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <nav id="top" class="clearfix nav">*/
/*                 <div class="container">*/
/*                     <div class="box-cart">*/
/*                         {% render(controller('FrontendBundle:Home:displayCart')) %}*/
/*                     </div>*/
/*                     <div id="top-links" class="nav pull-left">*/
/*                         {% render(controller('FrontendBundle:Home:navBar')) %}*/
/*                     </div>*/
/*                 </div>*/
/*             </nav>*/
/*         </header>*/
/* */
/*         <div class="header_modules"></div>*/
/*         <div id="container">*/
/*             <div class="container">*/
/*                 {% block location %}{% endblock %}*/
/*                 <div class="row">*/
/*                     <aside id="column-left" class="col-sm-3 ">*/
/*                         {% block boxe_category %}*/
/*                           {% render(controller('FrontendBundle:Home:displayCategories')) %}*/
/*                         {% endblock %}*/
/*                         {% block boxes %}*/
/*                             {% render(controller('FrontendBundle:Home:displaySales')) %}*/
/*                         {% endblock %}*/
/*                     </aside>*/
/* */
/*                     <div id="content" class="col-sm-9">*/
/*                     {% block body %}{% endblock %}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <footer>*/
/*             {% include 'FrontendBundle::footer.html.twig' %}*/
/*         </footer>*/
/*     </div>*/
/*      {% block javascripts %}{% endblock %}*/
/*      <script src="{{ asset('frontend/js/front/script.min.js') }}" type="text/javascript"></script>*/
/*      <script src="{{ asset('frontend/js/front/search.js') }}" type="text/javascript"></script>*/
/*      <script src="{{ asset('bundles/fosjsrouting/js/router.js') }}"></script>*/
/*      <script src="{{ path('fos_js_routing_js', {'callback': 'fos.Router.setData'}) }}"></script>*/
/*   </body>*/
/* </html>*/
