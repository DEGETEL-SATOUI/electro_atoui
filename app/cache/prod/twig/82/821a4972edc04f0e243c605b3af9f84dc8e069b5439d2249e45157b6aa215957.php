<?php

/* FrontendBundle:Default/cart:steps.html.twig */
class __TwigTemplate_902dc5fb77c4ee2f404c95bba300c7c1be5c11721832730587c48ce16bda9f74 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default/cart:steps.html.twig", 1);
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
        echo "<h1>Checkout</h1>
<div class=\"panel-group\" id=\"accordion\">
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\"><a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">Step 1: Checkout Options <i class=\"fa fa-caret-down\"></i></a></h4>
        </div>
        <div class=\"panel-collapse collapse in\" id=\"collapse-checkout-option\" style=\"height: auto;\">
            <div class=\"panel-body\">
                <div class=\"row\">
                    <div class=\"col-sm-6\">
                        <h2>New Customer</h2>
                        <p>Checkout Options:</p>
                        <div class=\"radio\">
                            <label>
                                <input type=\"radio\" name=\"account\" value=\"register\" checked=\"checked\"> Register Account</label>
                        </div>
                        <div class=\"radio\">
                            <label>
                                <input type=\"radio\" name=\"account\" value=\"guest\"> Guest Checkout</label>
                        </div>
                        <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
                        <input type=\"button\" value=\"Continue\" id=\"button-account\" data-loading-text=\"Loading...\" class=\"btn btn-primary\">
                    </div>
                    <div class=\"col-sm-6\">
                        <h2>Returning Customer</h2>
                        <p>I am a returning customer</p>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-email\">E-Mail</label>
                            <input type=\"text\" name=\"email\" value=\"\" placeholder=\"E-Mail\" id=\"input-email\" class=\"form-control\">
                        </div>
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"input-password\">Password</label>
                            <input type=\"password\" name=\"password\" value=\"\" placeholder=\"Password\" id=\"input-password\" class=\"form-control\">
                            <a href=\"http://livedemo00.template-help.com/opencart_53708/index.php?route=account/forgotten\">Forgotten Password</a>
                        </div>
                        <input type=\"button\" value=\"Login\" id=\"button-login\" data-loading-text=\"Loading...\" class=\"btn btn-primary\">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">Step 2: Account &amp; Billing Details</h4>
        </div>
        <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
            <div class=\"panel-body\"></div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">Step 3: Delivery Details</h4>
        </div>
        <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
            <div class=\"panel-body\"></div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">Step 4: Delivery Method</h4>
        </div>
        <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
            <div class=\"panel-body\"></div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">Step 5: Payment Method</h4>
        </div>
        <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
            <div class=\"panel-body\"></div>
        </div>
    </div>
    <div class=\"panel panel-default\">
        <div class=\"panel-heading\">
            <h4 class=\"panel-title\">Step 6: Confirm Order</h4>
        </div>
        <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
            <div class=\"panel-body\"></div>
        </div>
    </div>
</div>
";
    }

    // line 98
    public function block_boxes($context, array $blocks = array())
    {
        // line 99
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default/cart:steps.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 99,  130 => 98,  44 => 13,  41 => 12,  33 => 5,  30 => 4,  11 => 1,);
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
/* <h1>Checkout</h1>*/
/* <div class="panel-group" id="accordion">*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h4 class="panel-title"><a href="#collapse-checkout-option" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">Step 1: Checkout Options <i class="fa fa-caret-down"></i></a></h4>*/
/*         </div>*/
/*         <div class="panel-collapse collapse in" id="collapse-checkout-option" style="height: auto;">*/
/*             <div class="panel-body">*/
/*                 <div class="row">*/
/*                     <div class="col-sm-6">*/
/*                         <h2>New Customer</h2>*/
/*                         <p>Checkout Options:</p>*/
/*                         <div class="radio">*/
/*                             <label>*/
/*                                 <input type="radio" name="account" value="register" checked="checked"> Register Account</label>*/
/*                         </div>*/
/*                         <div class="radio">*/
/*                             <label>*/
/*                                 <input type="radio" name="account" value="guest"> Guest Checkout</label>*/
/*                         </div>*/
/*                         <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>*/
/*                         <input type="button" value="Continue" id="button-account" data-loading-text="Loading..." class="btn btn-primary">*/
/*                     </div>*/
/*                     <div class="col-sm-6">*/
/*                         <h2>Returning Customer</h2>*/
/*                         <p>I am a returning customer</p>*/
/*                         <div class="form-group">*/
/*                             <label class="control-label" for="input-email">E-Mail</label>*/
/*                             <input type="text" name="email" value="" placeholder="E-Mail" id="input-email" class="form-control">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label class="control-label" for="input-password">Password</label>*/
/*                             <input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">*/
/*                             <a href="http://livedemo00.template-help.com/opencart_53708/index.php?route=account/forgotten">Forgotten Password</a>*/
/*                         </div>*/
/*                         <input type="button" value="Login" id="button-login" data-loading-text="Loading..." class="btn btn-primary">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h4 class="panel-title">Step 2: Account &amp; Billing Details</h4>*/
/*         </div>*/
/*         <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*             <div class="panel-body"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h4 class="panel-title">Step 3: Delivery Details</h4>*/
/*         </div>*/
/*         <div class="panel-collapse collapse" id="collapse-shipping-address">*/
/*             <div class="panel-body"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h4 class="panel-title">Step 4: Delivery Method</h4>*/
/*         </div>*/
/*         <div class="panel-collapse collapse" id="collapse-shipping-method">*/
/*             <div class="panel-body"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h4 class="panel-title">Step 5: Payment Method</h4>*/
/*         </div>*/
/*         <div class="panel-collapse collapse" id="collapse-payment-method">*/
/*             <div class="panel-body"></div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="panel panel-default">*/
/*         <div class="panel-heading">*/
/*             <h4 class="panel-title">Step 6: Confirm Order</h4>*/
/*         </div>*/
/*         <div class="panel-collapse collapse" id="collapse-checkout-confirm">*/
/*             <div class="panel-body"></div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* {% endblock %}*/
/* */
/* */
/* {% block boxes %}*/
/* */
/* {% endblock %}*/
