<?php

/* FrontendBundle::base.html.twig */
class __TwigTemplate_95a33157063a8b9d068c9a6a3b8d00e8ff86aa7b5f820e1143391f67d58aa9c8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body_class' => array($this, 'block_body_class'),
            'location' => array($this, 'block_location'),
            'boxe_category' => array($this, 'block_boxe_category'),
            'boxes' => array($this, 'block_boxes'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html dir=\"ltr\" lang=\"en\">
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/material-design.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/css.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/jquery.fancybox.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/owl.carousel.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/photoswipe.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/jquery.bxslider.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/camera.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" media=\"screen\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/stylesheet.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/magnific-popup.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/front/bootstrap-datetimepicker.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 25
        echo "
    <script src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/jquery-2.1.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/bootstrap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/common.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/jquery.fancybox.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/jquery.gsap.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/TimelineMax.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/TweenMax.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/jquery.scrollmagic.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/owl.carousel.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/jquery.bxslider.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/camera.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/script.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/magnific-popup.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/moment.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/bootstrap-datetimepicker.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
        // line 41
        $this->displayBlock('javascripts', $context, $blocks);
        // line 42
        echo "  </head>

  <body class=\"";
        // line 44
        $this->displayBlock('body_class', $context, $blocks);
        echo "\">
    <div id=\"page\">
        <header class=\"header\">
            <div class=\"header-box\">
                <div class=\"container\">
                    <div id=\"logo\" class=\"logo\">
                        <a href=\"\"><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" title=\"Kitchen supplies store\" alt=\"Kitchen supplies store\" class=\"img-responsive\" />
                        </a>
                    </div>
                    <div id=\"search\" class=\"search\">
                        <input type=\"text\" name=\"search\" value=\"\" placeholder=\"Ma recherche\" />
                        <button type=\"button\" class=\"button-search\"><span>Rechercher</span>
                        </button>
                    </div>
                    <div class=\"box-right\">
                        <div class=\"box-currency\"></div>
                        <div class=\"box-language\"></div>
                        <div class=\"phone hidden-xs hidden-sm\">
                            <a href=\"\"><i class=\"material-design-phone370\"></i></a> <span class=\"hidden-xs hidden-sm\">00 216 71 455 455</span>
                        </div>
                    </div>
                </div>
            </div>
            <nav id=\"top\" class=\"clearfix nav\">
                <div class=\"container\">
                    <div class=\"box-cart\">
                        ";
        // line 70
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FrontendBundle:Default:displayCart"), array());
        // line 71
        echo "                    </div>
                    <div id=\"top-links\" class=\"nav pull-left\">
                        <ul class=\"list-inline\">
                            <li class=\"first\">
                              <a href=\"\"><i class=\"fa fa-home\"></i><span class=\"hidden-sm\">Acceuil</span></a>
                            </li>
                            <li>
                              <a href=\"\" id=\"wishlist-total\" title=\"Mes Favories\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-sm\">Mes Favories</span></a>
                            </li>
                            <li>
                              <a href=\"\" title=\"Mon Panier\"><i class=\"material-design-shopping232\"></i> <span class=\"hidden-sm\">Mon Panier</span></a>
                            </li>
                            <li>
                              <a href=\"\" title=\"Nous Contacter\"><i class=\"fa fa-share\"></i> <span class=\"hidden-sm\">Nous Contacter</span></a>
                            </li>
                            <li class=\"dropdown\">
                              <a href=\"\" title=\"Mon compte\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><i class=\"fa fa-user\"></i>
                                <span class=\"hidden-sm\">Mon compte</span>
                                <span class=\"caret\"></span>
                              </a>
                              <ul class=\"dropdown-menu dropdown-menu-left\">
                                <li><a href=\"\">Inscrivez-vous</a></li>
                                <li><a href=\"\">Identifiez-vous</a></li>
                              </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class=\"header_modules\"></div>
        <div id=\"container\">
            <div class=\"container\">
                ";
        // line 105
        $this->displayBlock('location', $context, $blocks);
        // line 106
        echo "                <div class=\"row\">
                    <aside id=\"column-left\" class=\"col-sm-3 \">
                        ";
        // line 108
        $this->displayBlock('boxe_category', $context, $blocks);
        // line 111
        echo "                        ";
        $this->displayBlock('boxes', $context, $blocks);
        // line 112
        echo "                    </aside>

                    <div id=\"content\" class=\"col-sm-9\">
                    ";
        // line 115
        $this->displayBlock('body', $context, $blocks);
        // line 116
        echo "                    </div>
                </div>
            </div>
        </div>

        <footer>
            ";
        // line 122
        $this->loadTemplate("FrontendBundle::footer.html.twig", "FrontendBundle::base.html.twig", 122)->display($context);
        // line 123
        echo "        </footer>
    </div>
  </body>
</html>";
    }

    // line 4
    public function block_titre($context, array $blocks = array())
    {
        echo "Electro El Atoui";
    }

    // line 7
    public function block_description($context, array $blocks = array())
    {
        echo "Electro El Atoui";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 41
    public function block_javascripts($context, array $blocks = array())
    {
    }

    // line 44
    public function block_body_class($context, array $blocks = array())
    {
        echo "product-category-33";
    }

    // line 105
    public function block_location($context, array $blocks = array())
    {
    }

    // line 108
    public function block_boxe_category($context, array $blocks = array())
    {
        // line 109
        echo "                          ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("FrontendBundle:Default:displayCategories"), array());
        // line 110
        echo "                        ";
    }

    // line 111
    public function block_boxes($context, array $blocks = array())
    {
    }

    // line 115
    public function block_body($context, array $blocks = array())
    {
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
        return array (  322 => 115,  317 => 111,  313 => 110,  310 => 109,  307 => 108,  302 => 105,  296 => 44,  291 => 41,  286 => 24,  280 => 7,  274 => 4,  267 => 123,  265 => 122,  257 => 116,  255 => 115,  250 => 112,  247 => 111,  245 => 108,  241 => 106,  239 => 105,  203 => 71,  201 => 70,  178 => 50,  169 => 44,  165 => 42,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 34,  131 => 33,  127 => 32,  123 => 31,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  100 => 25,  98 => 24,  94 => 23,  90 => 22,  86 => 21,  82 => 20,  78 => 19,  74 => 18,  70 => 17,  66 => 16,  62 => 15,  58 => 14,  54 => 13,  50 => 12,  46 => 11,  39 => 7,  33 => 4,  28 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html dir="ltr" lang="en">*/
/*   <head>*/
/*     <title>{% block titre %}Electro El Atoui{% endblock %}</title>*/
/* */
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <meta name="description" content="{% block description %}Electro El Atoui{% endblock %}" />*/
/*     <meta charset="UTF-8" />*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/*     <link href="{{ asset('css/front/bootstrap.min.css') }}" rel="stylesheet" media="screen" />*/
/*     <link href="{{ asset('css/front/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('css/front/material-design.css') }}" rel="stylesheet" type="text/css" />*/
/*     <link href="{{ asset('css/front/css.css') }}" rel="stylesheet" type="text/css">*/
/*     <link href="{{ asset('css/front/jquery.fancybox.css') }}" rel="stylesheet" media="screen" />*/
/*     <link href="{{ asset('css/front/owl.carousel.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/front/photoswipe.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/front/jquery.bxslider.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/front/camera.css') }}" type="text/css" rel="stylesheet" media="screen" />*/
/*     <link href="{{ asset('css/front/stylesheet.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/front/magnific-popup.css') }}" rel="stylesheet">*/
/*     <link href="{{ asset('css/front/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" />*/
/*     {% block stylesheets %}{% endblock %}*/
/* */
/*     <script src="{{ asset('js/front/jquery-2.1.1.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/bootstrap.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/common.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/jquery.fancybox.js') }}"></script>*/
/*     <script src="{{ asset('js/front/jquery.gsap.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/TimelineMax.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/TweenMax.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/jquery.scrollmagic.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/owl.carousel.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/jquery.bxslider.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/camera.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/script.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/magnific-popup.min.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/moment.js') }}" type="text/javascript"></script>*/
/*     <script src="{{ asset('js/front/bootstrap-datetimepicker.min.js') }}" type="text/javascript"></script>*/
/*     {% block javascripts %}{% endblock %}*/
/*   </head>*/
/* */
/*   <body class="{% block body_class %}product-category-33{% endblock %}">*/
/*     <div id="page">*/
/*         <header class="header">*/
/*             <div class="header-box">*/
/*                 <div class="container">*/
/*                     <div id="logo" class="logo">*/
/*                         <a href=""><img src="{{ asset('images/logo.png') }}" title="Kitchen supplies store" alt="Kitchen supplies store" class="img-responsive" />*/
/*                         </a>*/
/*                     </div>*/
/*                     <div id="search" class="search">*/
/*                         <input type="text" name="search" value="" placeholder="Ma recherche" />*/
/*                         <button type="button" class="button-search"><span>Rechercher</span>*/
/*                         </button>*/
/*                     </div>*/
/*                     <div class="box-right">*/
/*                         <div class="box-currency"></div>*/
/*                         <div class="box-language"></div>*/
/*                         <div class="phone hidden-xs hidden-sm">*/
/*                             <a href=""><i class="material-design-phone370"></i></a> <span class="hidden-xs hidden-sm">00 216 71 455 455</span>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <nav id="top" class="clearfix nav">*/
/*                 <div class="container">*/
/*                     <div class="box-cart">*/
/*                         {% render(controller('FrontendBundle:Default:displayCart')) %}*/
/*                     </div>*/
/*                     <div id="top-links" class="nav pull-left">*/
/*                         <ul class="list-inline">*/
/*                             <li class="first">*/
/*                               <a href=""><i class="fa fa-home"></i><span class="hidden-sm">Acceuil</span></a>*/
/*                             </li>*/
/*                             <li>*/
/*                               <a href="" id="wishlist-total" title="Mes Favories"><i class="fa fa-heart"></i> <span class="hidden-sm">Mes Favories</span></a>*/
/*                             </li>*/
/*                             <li>*/
/*                               <a href="" title="Mon Panier"><i class="material-design-shopping232"></i> <span class="hidden-sm">Mon Panier</span></a>*/
/*                             </li>*/
/*                             <li>*/
/*                               <a href="" title="Nous Contacter"><i class="fa fa-share"></i> <span class="hidden-sm">Nous Contacter</span></a>*/
/*                             </li>*/
/*                             <li class="dropdown">*/
/*                               <a href="" title="Mon compte" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>*/
/*                                 <span class="hidden-sm">Mon compte</span>*/
/*                                 <span class="caret"></span>*/
/*                               </a>*/
/*                               <ul class="dropdown-menu dropdown-menu-left">*/
/*                                 <li><a href="">Inscrivez-vous</a></li>*/
/*                                 <li><a href="">Identifiez-vous</a></li>*/
/*                               </ul>*/
/*                             </li>*/
/*                         </ul>*/
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
/*                           {% render(controller('FrontendBundle:Default:displayCategories')) %}*/
/*                         {% endblock %}*/
/*                         {% block boxes %}{% endblock %}*/
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
/*   </body>*/
/* </html>*/
