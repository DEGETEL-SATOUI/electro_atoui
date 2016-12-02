<?php

/* FrontendBundle:Default:home.html.twig */
class __TwigTemplate_3e0c619d1a418e6874ee803057f1e4db568fecf50399804ff23736af04c9f159 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default:home.html.twig", 1);
        $this->blocks = array(
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body_class($context, array $blocks = array())
    {
        echo "common-home";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<script>
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
<div class=\"fluid_container\">
    <div class=\"camera_container\">
        <div id=\"camera_wrap_0\">
            <div title=\"slide-1\" data-thumb=\"http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-1-870x380.jpg\" data-src=\"http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-1-870x380.jpg\">
                <div class=\"camera_caption fadeIn\">
                    <h1>tempor incididunt <br/>ut labore</h1>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <a href=\"index.php?route=product/product&product_id=43\">Shop now</a>
                </div>
            </div>
            <div title=\"slide-2\" data-thumb=\"http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-2-870x380.jpg\" data-src=\"http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-2-870x380.jpg\">
                <div class=\"camera_caption fadeIn\">
                    <h1>voluptate velit <br/>esse cillu</h1>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <a href=\"index.php?route=product/product&product_id=42\">Shop now</a>
                </div>
            </div>
            <div title=\"slide-3\" data-thumb=\"http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-3-870x380.jpg\" data-src=\"http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-3-870x380.jpg\">
                <div class=\"camera_caption fadeIn\">
                    <h1>quis nostrud <br/>ullamco </h1>
                    <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                    <a href=\"index.php?route=product/product&product_id=28\">Shop now</a>
                </div>
            </div>
        </div>
    </div>
    <div class=\"clear\"></div>
</div>

";
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
        return array (  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
/* {% extends "FrontendBundle::base.html.twig" %}*/
/* */
/* {% block body_class %}common-home{% endblock %}*/
/* */
/* {% block body %}*/
/* <script>*/
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
/* <div class="fluid_container">*/
/*     <div class="camera_container">*/
/*         <div id="camera_wrap_0">*/
/*             <div title="slide-1" data-thumb="http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-1-870x380.jpg" data-src="http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-1-870x380.jpg">*/
/*                 <div class="camera_caption fadeIn">*/
/*                     <h1>tempor incididunt <br/>ut labore</h1>*/
/*                     <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>*/
/*                     <a href="index.php?route=product/product&product_id=43">Shop now</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div title="slide-2" data-thumb="http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-2-870x380.jpg" data-src="http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-2-870x380.jpg">*/
/*                 <div class="camera_caption fadeIn">*/
/*                     <h1>voluptate velit <br/>esse cillu</h1>*/
/*                     <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>*/
/*                     <a href="index.php?route=product/product&product_id=42">Shop now</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div title="slide-3" data-thumb="http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-3-870x380.jpg" data-src="http://staticlivedemo00-templatemonster.netdna-ssl.com/opencart_53708/image/cache/catalog/slide-3-870x380.jpg">*/
/*                 <div class="camera_caption fadeIn">*/
/*                     <h1>quis nostrud <br/>ullamco </h1>*/
/*                     <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>*/
/*                     <a href="index.php?route=product/product&product_id=28">Shop now</a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     <div class="clear"></div>*/
/* </div>*/
/* */
/* {% endblock %}*/
