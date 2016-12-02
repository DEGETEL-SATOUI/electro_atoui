<?php

/* FrontendBundle:Default:products/display_categories.html.twig */
class __TwigTemplate_c98a9006efaafe494629397cd16716e661b333b5b7533537d1d19632056ffd48 extends Twig_Template
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
        $__internal_f4eff000c1d884eb24fc9af37a2b8e25949621309bcdcdfd6740e60642c43eae = $this->env->getExtension("native_profiler");
        $__internal_f4eff000c1d884eb24fc9af37a2b8e25949621309bcdcdfd6740e60642c43eae->enter($__internal_f4eff000c1d884eb24fc9af37a2b8e25949621309bcdcdfd6740e60642c43eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FrontendBundle:Default:products/display_categories.html.twig"));

        // line 1
        echo "<div class=\"box category\">
    <div class=\"box-heading\">
        <h3>Categories</h3>
    </div>
    <div class=\"box-content\">
        <div class=\"box-category\">
            ";
        // line 8
        echo "              ";
        echo (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories"));
        echo "
            ";
        // line 10
        echo "        </div>
    </div>
</div>


<script>
    jQuery(document).ready(function() {
        jQuery('.box-category .menu').find('li>ul').before('<i class=\"fa fa-caret-right\"></i>');
        jQuery('.box-category .menu li i').on(\"click\", function() {
            if (jQuery(this).hasClass('fa-caret-down')) {
                jQuery(this).removeClass('fa-caret-down').parent('li').find('> ul').slideToggle();
            } else {
                jQuery(this).addClass('fa-caret-down').parent('li').find('> ul').slideToggle();
            }
        });
    });
</script>";
        
        $__internal_f4eff000c1d884eb24fc9af37a2b8e25949621309bcdcdfd6740e60642c43eae->leave($__internal_f4eff000c1d884eb24fc9af37a2b8e25949621309bcdcdfd6740e60642c43eae_prof);

    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default:products/display_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 10,  30 => 8,  22 => 1,);
    }
}
/* <div class="box category">*/
/*     <div class="box-heading">*/
/*         <h3>Categories</h3>*/
/*     </div>*/
/*     <div class="box-content">*/
/*         <div class="box-category">*/
/*             {% autoescape %}*/
/*               {{ categories|raw }}*/
/*             {% endautoescape %}*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* */
/* <script>*/
/*     jQuery(document).ready(function() {*/
/*         jQuery('.box-category .menu').find('li>ul').before('<i class="fa fa-caret-right"></i>');*/
/*         jQuery('.box-category .menu li i').on("click", function() {*/
/*             if (jQuery(this).hasClass('fa-caret-down')) {*/
/*                 jQuery(this).removeClass('fa-caret-down').parent('li').find('> ul').slideToggle();*/
/*             } else {*/
/*                 jQuery(this).addClass('fa-caret-down').parent('li').find('> ul').slideToggle();*/
/*             }*/
/*         });*/
/*     });*/
/* </script>*/
