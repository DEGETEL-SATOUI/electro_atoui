<?php

/* FrontendBundle:Default/contact:contact.html.twig */
class __TwigTemplate_fca1ba45829cd20aad093d1c99fe7b4c6cbe50a508b7e5edb1b5cc957f9a0ade extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FrontendBundle::base.html.twig", "FrontendBundle:Default/contact:contact.html.twig", 1);
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
        echo "<h1>Nous contacter</h1>
<h3>Notre Adresse</h3>
<div class=\"panel panel-default\">
    <div class=\"panel-body\">
        <div class=\"row\">
            <div class=\"col-sm-3\"><strong>Electro El Atoui</strong>
                <br>
                <address>Rue Mostabah Jarboua, 3212 Bir Lahmer - Tataouine </address>
                <a href=\"\" target=\"_blank\" class=\"btn btn-info\"><i class=\"fa fa-map-marker\"></i> Notre position</a>
            </div>
            <div class=\"col-sm-3\"><strong>Téléphone</strong>
                <br> 00 216 71 452 123<br><br>
                <strong>Fax</strong>
                <br> 00 216 71 452 124
            </div>
            <div class=\"col-sm-3\">
                <strong>Heures d'ouverture</strong>
                <br> Lundi : 8h-18h
                <br> Mardi : 8h-18h
                <br> Mercredi : 8h-18h
                <br> Jeudi : 8h-18h
                <br> Vendredi : 8h-18h
                <br> Samedi : 8h-18h
                <br> Dimanche : 8h-13h
            </div>
        </div>
    </div>
</div>

<form action=\"\" method=\"post\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
    <fieldset>
        <h3>Contact</h3>
        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-name\">Votre Nom</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"name\" value=\"\" id=\"input-name\" class=\"form-control\">
            </div>
        </div>
        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-email\">Votre Adresse mail</label>
            <div class=\"col-sm-10\">
                <input type=\"text\" name=\"email\" value=\"\" id=\"input-email\" class=\"form-control\">
            </div>
        </div>
        <div class=\"form-group required\">
            <label class=\"col-sm-2 control-label\" for=\"input-enquiry\">Message</label>
            <div class=\"col-sm-10\">
                <textarea name=\"enquiry\" rows=\"10\" id=\"input-enquiry\" class=\"form-control\"></textarea>
            </div>
        </div>
    </fieldset>
    <div class=\"buttons\">
        <div class=\"pull-right\">
            <input class=\"btn btn-primary\" type=\"submit\" value=\"Envoyer\">
        </div>
    </div>
</form>
";
    }

    // line 72
    public function block_boxes($context, array $blocks = array())
    {
        // line 73
        echo "
";
    }

    public function getTemplateName()
    {
        return "FrontendBundle:Default/contact:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 73,  105 => 72,  44 => 13,  41 => 12,  33 => 5,  30 => 4,  11 => 1,);
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
/* <h1>Nous contacter</h1>*/
/* <h3>Notre Adresse</h3>*/
/* <div class="panel panel-default">*/
/*     <div class="panel-body">*/
/*         <div class="row">*/
/*             <div class="col-sm-3"><strong>Electro El Atoui</strong>*/
/*                 <br>*/
/*                 <address>Rue Mostabah Jarboua, 3212 Bir Lahmer - Tataouine </address>*/
/*                 <a href="" target="_blank" class="btn btn-info"><i class="fa fa-map-marker"></i> Notre position</a>*/
/*             </div>*/
/*             <div class="col-sm-3"><strong>Téléphone</strong>*/
/*                 <br> 00 216 71 452 123<br><br>*/
/*                 <strong>Fax</strong>*/
/*                 <br> 00 216 71 452 124*/
/*             </div>*/
/*             <div class="col-sm-3">*/
/*                 <strong>Heures d'ouverture</strong>*/
/*                 <br> Lundi : 8h-18h*/
/*                 <br> Mardi : 8h-18h*/
/*                 <br> Mercredi : 8h-18h*/
/*                 <br> Jeudi : 8h-18h*/
/*                 <br> Vendredi : 8h-18h*/
/*                 <br> Samedi : 8h-18h*/
/*                 <br> Dimanche : 8h-13h*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* </div>*/
/* */
/* <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">*/
/*     <fieldset>*/
/*         <h3>Contact</h3>*/
/*         <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-name">Votre Nom</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="name" value="" id="input-name" class="form-control">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-email">Votre Adresse mail</label>*/
/*             <div class="col-sm-10">*/
/*                 <input type="text" name="email" value="" id="input-email" class="form-control">*/
/*             </div>*/
/*         </div>*/
/*         <div class="form-group required">*/
/*             <label class="col-sm-2 control-label" for="input-enquiry">Message</label>*/
/*             <div class="col-sm-10">*/
/*                 <textarea name="enquiry" rows="10" id="input-enquiry" class="form-control"></textarea>*/
/*             </div>*/
/*         </div>*/
/*     </fieldset>*/
/*     <div class="buttons">*/
/*         <div class="pull-right">*/
/*             <input class="btn btn-primary" type="submit" value="Envoyer">*/
/*         </div>*/
/*     </div>*/
/* </form>*/
/* {% endblock %}*/
/* */
/* {% block boxes %}*/
/* */
/* {% endblock %}*/
