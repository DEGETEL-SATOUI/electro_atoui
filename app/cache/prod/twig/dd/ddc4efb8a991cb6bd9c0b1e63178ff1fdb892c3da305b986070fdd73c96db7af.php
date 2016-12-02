<?php

/* FrontendBundle:Default/products:category.html.twig */
class __TwigTemplate_8e561a0160fceab6cb9a5e66eb95010f7a05c1a073c4cb5caddbd88d29d36b45 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default/products:category.html.twig", 1);
        $this->blocks = array(
            'location' => array($this, 'block_location'),
            'body' => array($this, 'block_body'),
            'boxes' => array($this, 'block_boxes'),
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

    // line 4
    public function block_location($context, array $blocks = array())
    {
        // line 5
        echo "<ul class=\"breadcrumb\">
  <li><a href=\"/\"><i class=\"fa fa-home\"></i></a></li>
  <li><a href=\"\" style=\"display: none;\">Nous contacter</a><span>Nous contacter</span></li>
</ul>
";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h2>Cookware</h2>
<div class=\"row\">
    <div class=\"col-sm-2\">
        <div class=\"image\">
            <img src=\"http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-36-190x190.png\" alt=\"Cookware\" title=\"Cookware\" class=\"img-thumbnail\" />
        </div>
    </div>
    <div class=\"col-sm-10\">
        <p><b>Kitchen Supplies store</b> was founded by several enthusiasts in 2002. Those were the times when people still preferred to buy products at brick-and-mortar stores instead of buying online. Nevertheless we’ve decided to create an online shop and we are so glad to welcome you here, at our online Kitchen Supplies store. Yes, we agree that selling food and kitchen equipment is a tricky thing but our huge experience is the reason that would convince you to choose our firm. </p>
        <p><b>We specialize</b> in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is very demanding but the secret of success lies between the right choice of the business strategy and reliable suppliers. Taking care of our clients was and still is a main aim of our company and it will stay the same till the end of days. There is a common opinion that customer care service makes 90% of your reputation and we believe this to be a business truth. That’s why we are proud to inform you that you can always rely on our wonderful support system that is available 24/7. </p>
    </div>
</div>
<hr>
<div class=\"product-filter clearfix\">
    <div class=\"row\">
        <div class=\"col-md-2\">
            <label class=\"control-label\" for=\"input-sort\">Sort By:</label>
        </div>
        <div class=\"col-md-3\">
            <select id=\"input-sort\" class=\"form-control col-sm-3\" onchange=\"location = this.value;\">
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=p.sort_order&amp;order=ASC\" selected=\"selected\">Default</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=pd.name&amp;order=ASC\">Name (A - Z)</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=pd.name&amp;order=DESC\">Name (Z - A)</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=p.price&amp;order=ASC\">Price (Low &gt; High)</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=p.price&amp;order=DESC\">Price (High &gt; Low)</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=rating&amp;order=DESC\">Rating (Highest)</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=rating&amp;order=ASC\">Rating (Lowest)</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=p.model&amp;order=ASC\">Model (A - Z)</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=p.model&amp;order=DESC\">Model (Z - A)</option>
            </select>
        </div>
        <div class=\"col-md-2\">
            <label class=\"control-label\" for=\"input-limit\">Show:</label>
        </div>
        <div class=\"col-md-2\">
            <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;limit=6\" selected=\"selected\">6</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;limit=25\">25</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;limit=50\">50</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;limit=75\">75</option>
                <option value=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;limit=100\">100</option>
            </select>
        </div>
        <div class=\"col-md-3 text-right\">
            <div class=\"button-view\">
                <button type=\"button\" id=\"list-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"List\"><i class=\"fa fa-th-list\"></i>
                </button>
                <button type=\"button\" id=\"grid-view\" class=\"btn btn-default\" data-toggle=\"tooltip\" title=\"Grid\"><i class=\"fa fa-th\"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<div class=\"nav-cat clearfix\">
    <div class=\"pull-left\"></div>
    <div class=\"pull-left nam-page\">Showing 1 to 6 of 6 (1 Pages)</div>
    <div class=\"pull-right\">
        <a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/compare\" id=\"compare-total\">
Product Compare (0) <i class=\"fa fa-chevron-right\"></i>
</a>
    </div>
</div>
<div class=\"row\">
    <div class=\"product-layout product-list col-xs-12\">
        <div class=\"product-thumb\">
            <div class=\"image\">
                <a class=\"lazy\" style=\"padding-bottom: 100%\" href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=28\">
                    <img alt=\"Aliquam eget\" title=\"Aliquam eget\" class=\"img-responsive\" data-src=\"http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-07-220x220.png\" src=\"#\" />
                </a>
            </div>
            <div>
                <div class=\"caption\">
                    <div class=\"name name-product\"><a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=28\">Aliquam eget</a>
                    </div>
                    <div class=\"description\">Kitchen Supplies store was founded by several..</div>
                    <div class=\"rating\">
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    </div>
                    <div class=\"price price-product\">
                        <span class=\"price-new\">\$80.00</span> <span class=\"price-old\">\$100.00</span>
                    </div>
                </div>
                <div class=\"cart-button\">
                    <button class=\"product-btn-add\" type=\"button\" onclick=\"cart.add('28');\">
                        <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span>
                        <i class=\"material-design-shopping232\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('28');\"><i class=\"fa fa-heart\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('28');\"><i class=\"fa fa-exchange\"></i>
                    </button>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
    <div class=\"product-layout product-list col-xs-12\">
        <div class=\"product-thumb\">
            <div class=\"image\">
                <a class=\"lazy\" style=\"padding-bottom: 100%\" href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=47\">
                    <img alt=\"Consectetur adipiscing\" title=\"Consectetur adipiscing\" class=\"img-responsive\" data-src=\"http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-10-220x220.png\" src=\"#\" />
                </a>
            </div>
            <div>
                <div class=\"caption\">
                    <div class=\"name name-product\"><a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=47\">Consectetur adipiscing</a>
                    </div>
                    <div class=\"description\">Kitchen Supplies store was founded by several..</div>
                    <div class=\"rating\">
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    </div>
                    <div class=\"price price-product\">
                        <span class=\"price-new\">\$60.00</span> <span class=\"price-old\">\$100.00</span>
                    </div>
                </div>
                <div class=\"cart-button\">
                    <button class=\"product-btn-add\" type=\"button\" onclick=\"cart.add('47');\">
                        <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span>
                        <i class=\"material-design-shopping232\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('47');\"><i class=\"fa fa-heart\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('47');\"><i class=\"fa fa-exchange\"></i>
                    </button>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
    <div class=\"product-layout product-list col-xs-12\">
        <div class=\"product-thumb\">
            <div class=\"image\">
                <a class=\"lazy\" style=\"padding-bottom: 100%\" href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=30\">
                    <img alt=\"Dolor sit amet\" title=\"Dolor sit amet\" class=\"img-responsive\" data-src=\"http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-13-220x220.png\" src=\"#\" />
                </a>
            </div>
            <div>
                <div class=\"caption\">
                    <div class=\"name name-product\"><a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=30\">Dolor sit amet</a>
                    </div>
                    <div class=\"description\">Kitchen Supplies store was founded by several..</div>
                    <div class=\"rating\">
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    </div>
                    <div class=\"price price-product\">
                        <span class=\"price-new\">\$80.00</span> <span class=\"price-old\">\$100.00</span>
                    </div>
                </div>
                <div class=\"cart-button\">
                    <button class=\"product-btn-add\" type=\"button\" onclick=\"cart.add('30');\">
                        <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span>
                        <i class=\"material-design-shopping232\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('30');\"><i class=\"fa fa-heart\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('30');\"><i class=\"fa fa-exchange\"></i>
                    </button>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
    <div class=\"product-layout product-list col-xs-12\">
        <div class=\"product-thumb\">
            <div class=\"image\">
                <a class=\"lazy\" style=\"padding-bottom: 100%\" href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=44\">
                    <img alt=\"Donec non posuere\" title=\"Donec non posuere\" class=\"img-responsive\" data-src=\"http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-34-220x220.png\" src=\"#\" />
                </a>
            </div>
            <div>
                <div class=\"caption\">
                    <div class=\"name name-product\"><a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=44\">Donec non posuere</a>
                    </div>
                    <div class=\"description\">Kitchen Supplies store was founded by several..</div>
                    <div class=\"price price-product\">
                        <span class=\"price-new\">\$90.00</span> <span class=\"price-old\">\$100.00</span>
                    </div>
                </div>
                <div class=\"cart-button\">
                    <button class=\"product-btn-add\" type=\"button\" onclick=\"cart.add('44');\">
                        <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span>
                        <i class=\"material-design-shopping232\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('44');\"><i class=\"fa fa-heart\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('44');\"><i class=\"fa fa-exchange\"></i>
                    </button>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
    <div class=\"product-layout product-list col-xs-12\">
        <div class=\"product-thumb\">
            <div class=\"image\">
                <a class=\"lazy\" style=\"padding-bottom: 100%\" href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=42\">
                    <img alt=\"Lorem ipsum\" title=\"Lorem ipsum\" class=\"img-responsive\" data-src=\"http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-22-220x220.png\" src=\"#\" />
                </a>
            </div>
            <div>
                <div class=\"caption\">
                    <div class=\"name name-product\"><a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=42\">Lorem ipsum</a>
                    </div>
                    <div class=\"description\">Kitchen Supplies store was founded by several..</div>
                    <div class=\"rating\">
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    </div>
                    <div class=\"price price-product\">
                        <span class=\"price-new\">\$90.00</span> <span class=\"price-old\">\$100.00</span>
                    </div>
                </div>
                <div class=\"cart-button\">
                    <button class=\"product-btn-add\" type=\"button\" onclick=\"cart.add('42');\">
                        <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span>
                        <i class=\"material-design-shopping232\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('42');\"><i class=\"fa fa-heart\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('42');\"><i class=\"fa fa-exchange\"></i>
                    </button>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
    <div class=\"product-layout product-list col-xs-12\">
        <div class=\"product-thumb\">
            <div class=\"image\">
                <a class=\"lazy\" style=\"padding-bottom: 100%\" href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=31\">
                    <img alt=\"Sed vitae enim\" title=\"Sed vitae enim\" class=\"img-responsive\" data-src=\"http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-40-220x220.png\" src=\"#\" />
                </a>
            </div>
            <div>
                <div class=\"caption\">
                    <div class=\"name name-product\"><a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=31\">Sed vitae enim</a>
                    </div>
                    <div class=\"description\">Kitchen Supplies store was founded by several..</div>
                    <div class=\"rating\">
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                        <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                    </div>
                    <div class=\"price price-product\">
                        \$80.00 </div>
                </div>
                <div class=\"cart-button\">
                    <button class=\"product-btn-add\" type=\"button\" onclick=\"cart.add('31');\">
                        <span class=\"hidden-xs hidden-sm hidden-md\">Add to Cart</span>
                        <i class=\"material-design-shopping232\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Add to Wish List\" onclick=\"wishlist.add('31');\"><i class=\"fa fa-heart\"></i>
                    </button>
                    <button class=\"product-btn\" type=\"button\" data-toggle=\"tooltip\" title=\"Compare this Product\" onclick=\"compare.add('31');\"><i class=\"fa fa-exchange\"></i>
                    </button>
                </div>
            </div>
            <div class=\"clear\"></div>
        </div>
    </div>
</div>
<div class=\"row\">
    <div class=\"col-sm-6 text-left\"></div>
    <div class=\"col-sm-6 text-right\">Showing 1 to 6 of 6 (1 Pages)</div>
</div>
";
    }

    // line 297
    public function block_boxes($context, array $blocks = array())
    {
        // line 298
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default/products:category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  333 => 298,  330 => 297,  44 => 13,  41 => 12,  33 => 5,  30 => 4,  11 => 1,);
    }
}
/* {% extends "FrontendBundle::base.html.twig" %}*/
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
/* <h2>Cookware</h2>*/
/* <div class="row">*/
/*     <div class="col-sm-2">*/
/*         <div class="image">*/
/*             <img src="http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-36-190x190.png" alt="Cookware" title="Cookware" class="img-thumbnail" />*/
/*         </div>*/
/*     </div>*/
/*     <div class="col-sm-10">*/
/*         <p><b>Kitchen Supplies store</b> was founded by several enthusiasts in 2002. Those were the times when people still preferred to buy products at brick-and-mortar stores instead of buying online. Nevertheless we’ve decided to create an online shop and we are so glad to welcome you here, at our online Kitchen Supplies store. Yes, we agree that selling food and kitchen equipment is a tricky thing but our huge experience is the reason that would convince you to choose our firm. </p>*/
/*         <p><b>We specialize</b> in all kinds of kitchen supplies including the goods for food servicing and restaurant business. Every business is very demanding but the secret of success lies between the right choice of the business strategy and reliable suppliers. Taking care of our clients was and still is a main aim of our company and it will stay the same till the end of days. There is a common opinion that customer care service makes 90% of your reputation and we believe this to be a business truth. That’s why we are proud to inform you that you can always rely on our wonderful support system that is available 24/7. </p>*/
/*     </div>*/
/* </div>*/
/* <hr>*/
/* <div class="product-filter clearfix">*/
/*     <div class="row">*/
/*         <div class="col-md-2">*/
/*             <label class="control-label" for="input-sort">Sort By:</label>*/
/*         </div>*/
/*         <div class="col-md-3">*/
/*             <select id="input-sort" class="form-control col-sm-3" onchange="location = this.value;">*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=p.sort_order&amp;order=ASC" selected="selected">Default</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=pd.name&amp;order=ASC">Name (A - Z)</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=pd.name&amp;order=DESC">Name (Z - A)</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=p.price&amp;order=ASC">Price (Low &gt; High)</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=p.price&amp;order=DESC">Price (High &gt; Low)</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=rating&amp;order=DESC">Rating (Highest)</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=rating&amp;order=ASC">Rating (Lowest)</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=p.model&amp;order=ASC">Model (A - Z)</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;sort=p.model&amp;order=DESC">Model (Z - A)</option>*/
/*             </select>*/
/*         </div>*/
/*         <div class="col-md-2">*/
/*             <label class="control-label" for="input-limit">Show:</label>*/
/*         </div>*/
/*         <div class="col-md-2">*/
/*             <select id="input-limit" class="form-control" onchange="location = this.value;">*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;limit=6" selected="selected">6</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;limit=25">25</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;limit=50">50</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;limit=75">75</option>*/
/*                 <option value="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/category&amp;path=33&amp;limit=100">100</option>*/
/*             </select>*/
/*         </div>*/
/*         <div class="col-md-3 text-right">*/
/*             <div class="button-view">*/
/*                 <button type="button" id="list-view" class="btn btn-default" data-toggle="tooltip" title="List"><i class="fa fa-th-list"></i>*/
/*                 </button>*/
/*                 <button type="button" id="grid-view" class="btn btn-default" data-toggle="tooltip" title="Grid"><i class="fa fa-th"></i>*/
/*                 </button>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="nav-cat clearfix">*/
/*     <div class="pull-left"></div>*/
/*     <div class="pull-left nam-page">Showing 1 to 6 of 6 (1 Pages)</div>*/
/*     <div class="pull-right">*/
/*         <a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/compare" id="compare-total">*/
/* Product Compare (0) <i class="fa fa-chevron-right"></i>*/
/* </a>*/
/*     </div>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="product-layout product-list col-xs-12">*/
/*         <div class="product-thumb">*/
/*             <div class="image">*/
/*                 <a class="lazy" style="padding-bottom: 100%" href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=28">*/
/*                     <img alt="Aliquam eget" title="Aliquam eget" class="img-responsive" data-src="http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-07-220x220.png" src="#" />*/
/*                 </a>*/
/*             </div>*/
/*             <div>*/
/*                 <div class="caption">*/
/*                     <div class="name name-product"><a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=28">Aliquam eget</a>*/
/*                     </div>*/
/*                     <div class="description">Kitchen Supplies store was founded by several..</div>*/
/*                     <div class="rating">*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     </div>*/
/*                     <div class="price price-product">*/
/*                         <span class="price-new">$80.00</span> <span class="price-old">$100.00</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="cart-button">*/
/*                     <button class="product-btn-add" type="button" onclick="cart.add('28');">*/
/*                         <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>*/
/*                         <i class="material-design-shopping232"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('28');"><i class="fa fa-heart"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('28');"><i class="fa fa-exchange"></i>*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="product-layout product-list col-xs-12">*/
/*         <div class="product-thumb">*/
/*             <div class="image">*/
/*                 <a class="lazy" style="padding-bottom: 100%" href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=47">*/
/*                     <img alt="Consectetur adipiscing" title="Consectetur adipiscing" class="img-responsive" data-src="http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-10-220x220.png" src="#" />*/
/*                 </a>*/
/*             </div>*/
/*             <div>*/
/*                 <div class="caption">*/
/*                     <div class="name name-product"><a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=47">Consectetur adipiscing</a>*/
/*                     </div>*/
/*                     <div class="description">Kitchen Supplies store was founded by several..</div>*/
/*                     <div class="rating">*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     </div>*/
/*                     <div class="price price-product">*/
/*                         <span class="price-new">$60.00</span> <span class="price-old">$100.00</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="cart-button">*/
/*                     <button class="product-btn-add" type="button" onclick="cart.add('47');">*/
/*                         <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>*/
/*                         <i class="material-design-shopping232"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('47');"><i class="fa fa-heart"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('47');"><i class="fa fa-exchange"></i>*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="product-layout product-list col-xs-12">*/
/*         <div class="product-thumb">*/
/*             <div class="image">*/
/*                 <a class="lazy" style="padding-bottom: 100%" href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=30">*/
/*                     <img alt="Dolor sit amet" title="Dolor sit amet" class="img-responsive" data-src="http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-13-220x220.png" src="#" />*/
/*                 </a>*/
/*             </div>*/
/*             <div>*/
/*                 <div class="caption">*/
/*                     <div class="name name-product"><a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=30">Dolor sit amet</a>*/
/*                     </div>*/
/*                     <div class="description">Kitchen Supplies store was founded by several..</div>*/
/*                     <div class="rating">*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     </div>*/
/*                     <div class="price price-product">*/
/*                         <span class="price-new">$80.00</span> <span class="price-old">$100.00</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="cart-button">*/
/*                     <button class="product-btn-add" type="button" onclick="cart.add('30');">*/
/*                         <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>*/
/*                         <i class="material-design-shopping232"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('30');"><i class="fa fa-heart"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('30');"><i class="fa fa-exchange"></i>*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="product-layout product-list col-xs-12">*/
/*         <div class="product-thumb">*/
/*             <div class="image">*/
/*                 <a class="lazy" style="padding-bottom: 100%" href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=44">*/
/*                     <img alt="Donec non posuere" title="Donec non posuere" class="img-responsive" data-src="http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-34-220x220.png" src="#" />*/
/*                 </a>*/
/*             </div>*/
/*             <div>*/
/*                 <div class="caption">*/
/*                     <div class="name name-product"><a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=44">Donec non posuere</a>*/
/*                     </div>*/
/*                     <div class="description">Kitchen Supplies store was founded by several..</div>*/
/*                     <div class="price price-product">*/
/*                         <span class="price-new">$90.00</span> <span class="price-old">$100.00</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="cart-button">*/
/*                     <button class="product-btn-add" type="button" onclick="cart.add('44');">*/
/*                         <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>*/
/*                         <i class="material-design-shopping232"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('44');"><i class="fa fa-heart"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('44');"><i class="fa fa-exchange"></i>*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="product-layout product-list col-xs-12">*/
/*         <div class="product-thumb">*/
/*             <div class="image">*/
/*                 <a class="lazy" style="padding-bottom: 100%" href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=42">*/
/*                     <img alt="Lorem ipsum" title="Lorem ipsum" class="img-responsive" data-src="http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-22-220x220.png" src="#" />*/
/*                 </a>*/
/*             </div>*/
/*             <div>*/
/*                 <div class="caption">*/
/*                     <div class="name name-product"><a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=42">Lorem ipsum</a>*/
/*                     </div>*/
/*                     <div class="description">Kitchen Supplies store was founded by several..</div>*/
/*                     <div class="rating">*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     </div>*/
/*                     <div class="price price-product">*/
/*                         <span class="price-new">$90.00</span> <span class="price-old">$100.00</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="cart-button">*/
/*                     <button class="product-btn-add" type="button" onclick="cart.add('42');">*/
/*                         <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>*/
/*                         <i class="material-design-shopping232"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('42');"><i class="fa fa-heart"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('42');"><i class="fa fa-exchange"></i>*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="product-layout product-list col-xs-12">*/
/*         <div class="product-thumb">*/
/*             <div class="image">*/
/*                 <a class="lazy" style="padding-bottom: 100%" href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=31">*/
/*                     <img alt="Sed vitae enim" title="Sed vitae enim" class="img-responsive" data-src="http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-40-220x220.png" src="#" />*/
/*                 </a>*/
/*             </div>*/
/*             <div>*/
/*                 <div class="caption">*/
/*                     <div class="name name-product"><a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;path=33&amp;product_id=31">Sed vitae enim</a>*/
/*                     </div>*/
/*                     <div class="description">Kitchen Supplies store was founded by several..</div>*/
/*                     <div class="rating">*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star fa-stack-2x"></i><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                         <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span>*/
/*                     </div>*/
/*                     <div class="price price-product">*/
/*                         $80.00 </div>*/
/*                 </div>*/
/*                 <div class="cart-button">*/
/*                     <button class="product-btn-add" type="button" onclick="cart.add('31');">*/
/*                         <span class="hidden-xs hidden-sm hidden-md">Add to Cart</span>*/
/*                         <i class="material-design-shopping232"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Add to Wish List" onclick="wishlist.add('31');"><i class="fa fa-heart"></i>*/
/*                     </button>*/
/*                     <button class="product-btn" type="button" data-toggle="tooltip" title="Compare this Product" onclick="compare.add('31');"><i class="fa fa-exchange"></i>*/
/*                     </button>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="clear"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* <div class="row">*/
/*     <div class="col-sm-6 text-left"></div>*/
/*     <div class="col-sm-6 text-right">Showing 1 to 6 of 6 (1 Pages)</div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* {% block boxes %}*/
/* */
/* {% endblock %}*/
