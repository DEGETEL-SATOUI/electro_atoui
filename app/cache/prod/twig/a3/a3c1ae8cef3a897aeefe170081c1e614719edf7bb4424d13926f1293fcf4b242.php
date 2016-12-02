<?php

/* FrontendBundle:Default/cart:cart.html.twig */
class __TwigTemplate_0456f31a49745ae9e9fd9613df22dd907bd8627172886d7918505e75dfd8df7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default/cart:cart.html.twig", 1);
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
        echo "<h1>Shopping Cart</h1>
<form class=\"shoping_cart\" action=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=checkout/cart/edit\" method=\"post\" enctype=\"multipart/form-data\">
    <div class=\"table-responsive\">
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <td class=\"text-center\">Image</td>
                    <td class=\"text-left\">Product Name</td>
                    <td class=\"text-left\">Model</td>
                    <td class=\"text-left\">Quantity</td>
                    <td class=\"text-right\">Unit Price</td>
                    <td class=\"text-right\">Total</td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class=\"text-center\">
                        <div class=\"image\">
                            <a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;product_id=28\"><img src=\"http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-07-47x47.png\" alt=\"Aliquam eget\" title=\"Aliquam eget\" class=\"img-thumbnail\">
                            </a>
                        </div>
                    </td>
                    <td class=\"text-left\"><a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;product_id=28\">Aliquam eget</a>
                        <br>
                        <small>Color: white</small>
                        <br>
                        <small>Size: Medium</small>
                        <br>
                        <small>Reward Points: 400</small>
                    </td>
                    <td class=\"text-left\">Product 1</td>
                    <td class=\"text-left\">
                        <div class=\"input-group btn-block\" style=\"max-width: 200px;\">
                            <p class=\"clearfix\">
                                <input type=\"text\" name=\"quantity[YToyOntzOjEwOiJwcm9kdWN0X2lkIjtpOjI4O3M6Njoib3B0aW9uIjthOjI6e2k6MjM0O3M6MjoiMzciO2k6MjMzO3M6MjoiMzMiO319]\" value=\"1\" size=\"1\" class=\"form-control cart-q\" id=\"cart-q\">
                            </p>
                            <div>
                                <button type=\"submit\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-primary\" data-original-title=\"Update\"><i class=\"fa fa-refresh\"></i>
                                </button>
                                <button type=\"button\" data-toggle=\"tooltip\" title=\"\" class=\"btn btn-danger\" onclick=\"cart.remove('YToyOntzOjEwOiJwcm9kdWN0X2lkIjtpOjI4O3M6Njoib3B0aW9uIjthOjI6e2k6MjM0O3M6MjoiMzciO2k6MjMzO3M6MjoiMzMiO319');\" data-original-title=\"Remove\"><i class=\"fa fa-times-circle\"></i>
                                </button>
                            </div>
                        </div>
                    </td>
                    <td class=\"text-right\">
                        <div class=\"price\">\$115.00</div>
                    </td>
                    <td class=\"text-right\">
                        <div class=\"price price-total\">\$115.00</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</form>
<br>
<div class=\"row\">
    <div class=\"col-sm-4 col-sm-offset-8\">
        <table class=\"table table-bordered\">
            <tbody>
                <tr>
                    <td class=\"text-right\"><strong>Sub-Total:</strong>
                    </td>
                    <td class=\"text-right\">
                        <div class=\"price\">\$115.00</div>
                    </td>
                </tr>
                <tr>
                    <td class=\"text-right\"><strong>Eco Tax (-2.00):</strong>
                    </td>
                    <td class=\"text-right\">
                        <div class=\"price\">\$2.00</div>
                    </td>
                </tr>
                <tr>
                    <td class=\"text-right\"><strong>VAT (20%):</strong>
                    </td>
                    <td class=\"text-right\">
                        <div class=\"price\">\$23.00</div>
                    </td>
                </tr>
                <tr>
                    <td class=\"text-right\"><strong>Total:</strong>
                    </td>
                    <td class=\"text-right\">
                        <div class=\"price\">\$140.00</div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<div class=\"buttons\">
    <div class=\"pull-left\"><a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=common/home\" class=\"btn btn-default\">Continue Shopping</a>
    </div>
    <div class=\"pull-right\"><a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=checkout/checkout\" class=\"btn btn-primary\">Checkout</a>
    </div>
</div>
";
    }

    // line 115
    public function block_boxes($context, array $blocks = array())
    {
        // line 116
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default/cart:cart.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 116,  147 => 115,  44 => 13,  41 => 12,  33 => 5,  30 => 4,  11 => 1,);
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
/* <h1>Shopping Cart</h1>*/
/* <form class="shoping_cart" action="http://livedemo00.template-help.com/opencart_53708/index.php?route=checkout/cart/edit" method="post" enctype="multipart/form-data">*/
/*     <div class="table-responsive">*/
/*         <table class="table table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <td class="text-center">Image</td>*/
/*                     <td class="text-left">Product Name</td>*/
/*                     <td class="text-left">Model</td>*/
/*                     <td class="text-left">Quantity</td>*/
/*                     <td class="text-right">Unit Price</td>*/
/*                     <td class="text-right">Total</td>*/
/*                 </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td class="text-center">*/
/*                         <div class="image">*/
/*                             <a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;product_id=28"><img src="http://livedemo00.template-help.com/opencart_53708/image/cache/catalog/product-07-47x47.png" alt="Aliquam eget" title="Aliquam eget" class="img-thumbnail">*/
/*                             </a>*/
/*                         </div>*/
/*                     </td>*/
/*                     <td class="text-left"><a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=product/product&amp;product_id=28">Aliquam eget</a>*/
/*                         <br>*/
/*                         <small>Color: white</small>*/
/*                         <br>*/
/*                         <small>Size: Medium</small>*/
/*                         <br>*/
/*                         <small>Reward Points: 400</small>*/
/*                     </td>*/
/*                     <td class="text-left">Product 1</td>*/
/*                     <td class="text-left">*/
/*                         <div class="input-group btn-block" style="max-width: 200px;">*/
/*                             <p class="clearfix">*/
/*                                 <input type="text" name="quantity[YToyOntzOjEwOiJwcm9kdWN0X2lkIjtpOjI4O3M6Njoib3B0aW9uIjthOjI6e2k6MjM0O3M6MjoiMzciO2k6MjMzO3M6MjoiMzMiO319]" value="1" size="1" class="form-control cart-q" id="cart-q">*/
/*                             </p>*/
/*                             <div>*/
/*                                 <button type="submit" data-toggle="tooltip" title="" class="btn btn-primary" data-original-title="Update"><i class="fa fa-refresh"></i>*/
/*                                 </button>*/
/*                                 <button type="button" data-toggle="tooltip" title="" class="btn btn-danger" onclick="cart.remove('YToyOntzOjEwOiJwcm9kdWN0X2lkIjtpOjI4O3M6Njoib3B0aW9uIjthOjI6e2k6MjM0O3M6MjoiMzciO2k6MjMzO3M6MjoiMzMiO319');" data-original-title="Remove"><i class="fa fa-times-circle"></i>*/
/*                                 </button>*/
/*                             </div>*/
/*                         </div>*/
/*                     </td>*/
/*                     <td class="text-right">*/
/*                         <div class="price">$115.00</div>*/
/*                     </td>*/
/*                     <td class="text-right">*/
/*                         <div class="price price-total">$115.00</div>*/
/*                     </td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </form>*/
/* <br>*/
/* <div class="row">*/
/*     <div class="col-sm-4 col-sm-offset-8">*/
/*         <table class="table table-bordered">*/
/*             <tbody>*/
/*                 <tr>*/
/*                     <td class="text-right"><strong>Sub-Total:</strong>*/
/*                     </td>*/
/*                     <td class="text-right">*/
/*                         <div class="price">$115.00</div>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td class="text-right"><strong>Eco Tax (-2.00):</strong>*/
/*                     </td>*/
/*                     <td class="text-right">*/
/*                         <div class="price">$2.00</div>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td class="text-right"><strong>VAT (20%):</strong>*/
/*                     </td>*/
/*                     <td class="text-right">*/
/*                         <div class="price">$23.00</div>*/
/*                     </td>*/
/*                 </tr>*/
/*                 <tr>*/
/*                     <td class="text-right"><strong>Total:</strong>*/
/*                     </td>*/
/*                     <td class="text-right">*/
/*                         <div class="price">$140.00</div>*/
/*                     </td>*/
/*                 </tr>*/
/*             </tbody>*/
/*         </table>*/
/*     </div>*/
/* </div>*/
/* */
/* <div class="buttons">*/
/*     <div class="pull-left"><a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=common/home" class="btn btn-default">Continue Shopping</a>*/
/*     </div>*/
/*     <div class="pull-right"><a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=checkout/checkout" class="btn btn-primary">Checkout</a>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block boxes %}*/
/* */
/* {% endblock %}*/
