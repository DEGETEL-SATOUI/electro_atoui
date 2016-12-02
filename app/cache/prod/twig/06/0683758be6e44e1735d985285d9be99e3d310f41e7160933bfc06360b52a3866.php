<?php

/* FrontendBundle:Default/products:products.html.twig */
class __TwigTemplate_61a4e770f9fe895963ab87939c93972be723421bd5095b90d6dba703d84c4835 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default/products:products.html.twig", 1);
        $this->blocks = array(
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/addthis_widget.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
<script src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/front/jquery.elevatezoom.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
";
    }

    // line 9
    public function block_body_class($context, array $blocks = array())
    {
        echo "product-product-33";
    }

    // line 12
    public function block_location($context, array $blocks = array())
    {
        // line 13
        echo "<ul class=\"breadcrumb\">
  <li><a href=\"/\"><i class=\"fa fa-home\"></i></a></li>
  <li><a href=\"\" style=\"display: none;\">Nous contacter</a><span>Nous contacter</span></li>
</ul>
";
    }

    // line 20
    public function block_body($context, array $blocks = array())
    {
        // line 21
        echo "<div class=\"row\">
    <div id=\"content\" class=\"col-sm-12 product_page\">
        <div class=\"row product-content-columns\">
            <div class=\"col-sm-5 col-lg-7 product_page-left\">
                <div id=\"default_gallery\" class=\"product-gallery\">
                    <div class=\"image-thumb\">
                        <div class=\"bx-wrapper\">
                            <div class=\"bx-viewport\">
                                <ul id=\"image-additional\">
                                    <li>
                                        <a class=\"active\" href=\"#\" data-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\" data-zoom-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\">
                                            <img src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\" alt=\"\">
                                        </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png\" data-zoom-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png\"> <img src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-88x88.png\" alt=\"\"> </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-09-800x800.png\" data-zoom-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-09-800x800.png\"> <img src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-09-88x88.png\" alt=\"\"> </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png\" data-zoom-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png\"> <img src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-88x88.png\" alt=\"\"> </a>
                                    </li>
                                    <li>
                                        <a href=\"#\" data-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\" data-zoom-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\"> <img src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-88x88.png\" alt=\"\"> </a>
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
                            <img id=\"gallery_zoom\" src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\" data-zoom-image=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\" alt=\"\">
                        </div>
                    </div>
                </div>
                <script type=\"text/javascript\">
                    jQuery(document).ready(function() {
                        var myPhotoSwipe = \$(\"#gallery a\").photoSwipe({
                            enableMouseWheel: false,
                            enableKeyboard: false,
                            captionAndToolbarAutoHideDelay: 0
                        });
                    });
                </script>
                <div id=\"full_gallery\">
                    <div class=\"bx-wrapper\">
                        <div class=\"bx-viewport\">
                            <ul id=\"gallery\">
                                <li>
                                    <a href=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\" data-something=\"something\" data-another-thing=\"anotherthing\"><img src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\" title=\"Aliquam eget\" alt=\"Aliquam eget\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png\" data-something=\"something1\" data-another-thing=\"anotherthing1\"><img src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png\" alt=\"Aliquam eget\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-09-800x800.png\" data-something=\"something1\" data-another-thing=\"anotherthing1\"><img src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-09-800x800.png\" alt=\"Aliquam eget\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png\" data-something=\"something1\" data-another-thing=\"anotherthing1\"><img src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png\" alt=\"Aliquam eget\">
                                    </a>
                                </li>
                                <li>
                                    <a href=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\" data-something=\"something1\" data-another-thing=\"anotherthing1\"><img src=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png\" alt=\"Aliquam eget\">
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
                    <h1 class=\"product-title\">Produit 1</h1>

                    <div class=\"rating-section product-rating-status\">
                        <div class=\"rating\">
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>
                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> &nbsp; &nbsp;
                            <a onclick=\"document.getElementById('tab-review').scrollIntoView();\">3 reviews</a> / <a onclick=\"document.getElementById('tab-review').scrollIntoView();\">Write a review</a>
                        </div>
                    </div>
                    <div class=\"price-section price\">
                        <span class=\"price-new\">\$80.00</span>
                        <span class=\"price-old\">\$100.00</span>
                    </div>
                    <ul class=\"list-unstyled product-section\">
                        <li>Catégorie: <a href=\"https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/index.php?route=product/manufacturer/info&amp;manufacturer_id=5\">Donec eu</a>
                        </li>
                        <li>Réference: <span>Product 1</span>
                        </li>
                        <li>Disponibilité: <span>In Stock</span>
                        </li>
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
                            <label class=\"control-label col-sm-4\" for=\"input-quantity\">Qté</label>
                            <div class=\"col-sm-2\">
                                <input type=\"text\" name=\"quantity\" value=\"1\" size=\"2\" id=\"input-quantity\" class=\"form-control\">
                            </div>
                        </div>
                        <input type=\"hidden\" name=\"product_id\" value=\"28\">
                        <button type=\"button\" id=\"button-cart\" data-loading-text=\"Loading...\" class=\"btn btn-add\">Ajouter au panier</button>
                    </div>
                    <ul class=\"product-buttons\">
                        <li>
                            <button class=\"btn btn-icon\" onclick=\"wishlist.add('28');\"><i class=\"fa fa-heart\"></i> <span class=\"hidden-xs hidden-sm\">Ajouter au favories</span>
                            </button>
                        </li>
                        <li>
                            <button type=\"button\" class=\"btn btn-icon\" onclick=\"compare.add('28');\"><i class=\"fa fa-exchange\"></i> <span class=\"hidden-xs hidden-sm\">Comparer ce produit</span>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default/products:products.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 21,  62 => 20,  54 => 13,  51 => 12,  45 => 9,  39 => 5,  34 => 4,  31 => 3,  11 => 1,);
    }
}
/* {% extends "FrontendBundle::base.html.twig" %}*/
/* */
/* {% block javascripts %}*/
/* <script src="{{ asset('js/front/addthis_widget.js') }}" type="text/javascript"></script>*/
/* <script src="{{ asset('js/front/jquery.elevatezoom.js') }}" type="text/javascript"></script>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body_class %}product-product-33{% endblock %}*/
/* */
/* */
/* {% block location %}*/
/* <ul class="breadcrumb">*/
/*   <li><a href="/"><i class="fa fa-home"></i></a></li>*/
/*   <li><a href="" style="display: none;">Nous contacter</a><span>Nous contacter</span></li>*/
/* </ul>*/
/* {% endblock %}*/
/* */
/* */
/* {% block body %}*/
/* <div class="row">*/
/*     <div id="content" class="col-sm-12 product_page">*/
/*         <div class="row product-content-columns">*/
/*             <div class="col-sm-5 col-lg-7 product_page-left">*/
/*                 <div id="default_gallery" class="product-gallery">*/
/*                     <div class="image-thumb">*/
/*                         <div class="bx-wrapper">*/
/*                             <div class="bx-viewport">*/
/*                                 <ul id="image-additional">*/
/*                                     <li>*/
/*                                         <a class="active" href="#" data-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png" data-zoom-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png">*/
/*                                             <img src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png" alt="">*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" data-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png" data-zoom-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png"> <img src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-88x88.png" alt=""> </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" data-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-09-800x800.png" data-zoom-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-09-800x800.png"> <img src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-09-88x88.png" alt=""> </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" data-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png" data-zoom-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png"> <img src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-88x88.png" alt=""> </a>*/
/*                                     </li>*/
/*                                     <li>*/
/*                                         <a href="#" data-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png" data-zoom-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png"> <img src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-88x88.png" alt=""> </a>*/
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
/*                             <img id="gallery_zoom" src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png" data-zoom-image="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png" alt="">*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <script type="text/javascript">*/
/*                     jQuery(document).ready(function() {*/
/*                         var myPhotoSwipe = $("#gallery a").photoSwipe({*/
/*                             enableMouseWheel: false,*/
/*                             enableKeyboard: false,*/
/*                             captionAndToolbarAutoHideDelay: 0*/
/*                         });*/
/*                     });*/
/*                 </script>*/
/*                 <div id="full_gallery">*/
/*                     <div class="bx-wrapper">*/
/*                         <div class="bx-viewport">*/
/*                             <ul id="gallery">*/
/*                                 <li>*/
/*                                     <a href="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png" data-something="something" data-another-thing="anotherthing"><img src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png" title="Aliquam eget" alt="Aliquam eget">*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png" data-something="something1" data-another-thing="anotherthing1"><img src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png" alt="Aliquam eget">*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-09-800x800.png" data-something="something1" data-another-thing="anotherthing1"><img src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-09-800x800.png" alt="Aliquam eget">*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png" data-something="something1" data-another-thing="anotherthing1"><img src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-08-800x800.png" alt="Aliquam eget">*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li>*/
/*                                     <a href="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png" data-something="something1" data-another-thing="anotherthing1"><img src="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/product-07-800x800.png" alt="Aliquam eget">*/
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
/*                     <h1 class="product-title">Produit 1</h1>*/
/* */
/*                     <div class="rating-section product-rating-status">*/
/*                         <div class="rating">*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>*/
/*                             <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> &nbsp; &nbsp;*/
/*                             <a onclick="document.getElementById('tab-review').scrollIntoView();">3 reviews</a> / <a onclick="document.getElementById('tab-review').scrollIntoView();">Write a review</a>*/
/*                         </div>*/
/*                     </div>*/
/*                     <div class="price-section price">*/
/*                         <span class="price-new">$80.00</span>*/
/*                         <span class="price-old">$100.00</span>*/
/*                     </div>*/
/*                     <ul class="list-unstyled product-section">*/
/*                         <li>Catégorie: <a href="https://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/index.php?route=product/manufacturer/info&amp;manufacturer_id=5">Donec eu</a>*/
/*                         </li>*/
/*                         <li>Réference: <span>Product 1</span>*/
/*                         </li>*/
/*                         <li>Disponibilité: <span>In Stock</span>*/
/*                         </li>*/
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
/*                             <label class="control-label col-sm-4" for="input-quantity">Qté</label>*/
/*                             <div class="col-sm-2">*/
/*                                 <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control">*/
/*                             </div>*/
/*                         </div>*/
/*                         <input type="hidden" name="product_id" value="28">*/
/*                         <button type="button" id="button-cart" data-loading-text="Loading..." class="btn btn-add">Ajouter au panier</button>*/
/*                     </div>*/
/*                     <ul class="product-buttons">*/
/*                         <li>*/
/*                             <button class="btn btn-icon" onclick="wishlist.add('28');"><i class="fa fa-heart"></i> <span class="hidden-xs hidden-sm">Ajouter au favories</span>*/
/*                             </button>*/
/*                         </li>*/
/*                         <li>*/
/*                             <button type="button" class="btn btn-icon" onclick="compare.add('28');"><i class="fa fa-exchange"></i> <span class="hidden-xs hidden-sm">Comparer ce produit</span>*/
/*                             </button>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* {% endblock %}*/
