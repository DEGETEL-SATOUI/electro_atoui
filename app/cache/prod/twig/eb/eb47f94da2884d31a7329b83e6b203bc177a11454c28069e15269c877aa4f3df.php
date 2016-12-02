<?php

/* FrontendBundle:Default/products:display_categories.html.twig */
class __TwigTemplate_68ba9295423504340524147ad2fc7c34e0e8b2a2d9384968435e30c067ee72b2 extends Twig_Template
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
        // line 1
        echo "<div class=\"box category\">
    <div class=\"box-heading\">
        <h3>Categories</h3>
    </div>
    <div class=\"box-content\">
        <div class=\"box-category\">
            <ul class=\"menu\">
                ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 9
            echo "                  ";
            if ($this->getAttribute($context["category"], "hasParent", array())) {
                // line 10
                echo "                    <li>
                        <a href=\"\">";
                // line 11
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>
                        <ul>
                            ";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["category"], "childrens", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                    // line 14
                    echo "                                <li>
                                    <a href=\"\">";
                    // line 15
                    echo twig_escape_filter($this->env, $this->getAttribute($context["children"], "name", array()), "html", null, true);
                    echo "</a>
                                </li>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 18
                echo "                        </ul>
                    </li>
                  ";
            } else {
                // line 21
                echo "                    <li>
                        <a href=\"\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>
                    </li>
                  ";
            }
            // line 25
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "            </ul>
        </div>
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
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default/products:display_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 26,  73 => 25,  67 => 22,  64 => 21,  59 => 18,  50 => 15,  47 => 14,  43 => 13,  38 => 11,  35 => 10,  32 => 9,  28 => 8,  19 => 1,);
    }
}
/* <div class="box category">*/
/*     <div class="box-heading">*/
/*         <h3>Categories</h3>*/
/*     </div>*/
/*     <div class="box-content">*/
/*         <div class="box-category">*/
/*             <ul class="menu">*/
/*                 {% for category in categories %}*/
/*                   {% if category.hasParent %}*/
/*                     <li>*/
/*                         <a href="">{{ category.name }}</a>*/
/*                         <ul>*/
/*                             {% for children in category.childrens %}*/
/*                                 <li>*/
/*                                     <a href="">{{ children.name }}</a>*/
/*                                 </li>*/
/*                             {% endfor %}*/
/*                         </ul>*/
/*                     </li>*/
/*                   {% else %}*/
/*                     <li>*/
/*                         <a href="">{{ category.name }}</a>*/
/*                     </li>*/
/*                   {% endif %}*/
/*             {% endfor %}*/
/*             </ul>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
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
