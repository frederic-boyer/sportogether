<?php

/* liste-membre.html.twig */
class __TwigTemplate_b83876ffdb181067d86e89986accec9e86c191bcd87a7fcd65cb73b182c3c8c6 extends Twig_Template
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
        $__internal_e77dbfc8f1cc247f32670b9e0df6b33a6b3864d0da32e79a1be1a42a7d2cbb4e = $this->env->getExtension("native_profiler");
        $__internal_e77dbfc8f1cc247f32670b9e0df6b33a6b3864d0da32e79a1be1a42a7d2cbb4e->enter($__internal_e77dbfc8f1cc247f32670b9e0df6b33a6b3864d0da32e79a1be1a42a7d2cbb4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "liste-membre.html.twig"));

        // line 1
        $this->loadTemplate("FOSUserBundle::layout.html.twig", "liste-membre.html.twig", 1)->display($context);
        // line 2
        echo "

<form class=\"container\" >
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-md-8 col-md-offset-2\">
        <h1 class=\"text-center\">Les derniers inscrits</h1>
      </div>
    </div>
    <div class=\"col-md-12 text-center\">
      <h4 class=\"col-md-3\">Pseudo </h4>
      <h4 class=\"col-md-3\">Prenom </h4>
      <h4 class=\"col-md-3\">Sexe </h4>
      <h4 class=\"col-md-3\">Sport pratiqué </h4>





      ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["user"]);
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 22
            echo "
      <div class=\"col-md-3\">";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
            echo "</div>
      <div class=\"col-md-3\">";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "prenom", array()), "html", null, true);
            echo "</div>
      <div class=\"col-md-3\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sexe", array()), "html", null, true);
            echo "</div>
      <div class=\"col-md-3\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "sport", array()), "html", null, true);
            echo "</div>


      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </div>
  </div>
</form>

";
        // line 34
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 35
            echo "
<div class=\"col-md-offset-4 col-md-2 text-center\">
<a href=\"";
            // line 37
            echo $this->env->getExtension('routing')->getPath("RencontrePublic_new");
            echo "\"><button type=\"button\" name=\"name\" value=\"\" class=\"btn-primary\">Créer une rencontre </button></a>
</div>

<div class=\"col-md-2 text-center\">
<a href=\"";
            // line 41
            echo $this->env->getExtension('routing')->getPath("RencontrePublic_show");
            echo "\"><button type=\"button\" name=\"name\" value=\"\" class=\"btn-primary\">Voir les rencontres publics </button></a>
</div>

";
        } else {
            // line 45
            echo "<div class=\"col-md-12 text-center\">
<a href=\"";
            // line 46
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><button type=\"button\" name=\"name\" value=\"\" class=\"btn-primary\">Inscrivez-vous !</button></a>
</div>

<div class=\"col-md-12 text-center\">
<p>
  Déjà inscrit ? <a href=\"";
            // line 51
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Connectez-vous !</a>
</p>
</div>
";
        }
        
        $__internal_e77dbfc8f1cc247f32670b9e0df6b33a6b3864d0da32e79a1be1a42a7d2cbb4e->leave($__internal_e77dbfc8f1cc247f32670b9e0df6b33a6b3864d0da32e79a1be1a42a7d2cbb4e_prof);

    }

    public function getTemplateName()
    {
        return "liste-membre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 51,  103 => 46,  100 => 45,  93 => 41,  86 => 37,  82 => 35,  80 => 34,  74 => 30,  64 => 26,  60 => 25,  56 => 24,  52 => 23,  49 => 22,  45 => 21,  24 => 2,  22 => 1,);
    }
}
/* {% include 'FOSUserBundle::layout.html.twig' %}*/
/* */
/* */
/* <form class="container" >*/
/*   <div class="container">*/
/*     <div class="row">*/
/*       <div class="col-md-8 col-md-offset-2">*/
/*         <h1 class="text-center">Les derniers inscrits</h1>*/
/*       </div>*/
/*     </div>*/
/*     <div class="col-md-12 text-center">*/
/*       <h4 class="col-md-3">Pseudo </h4>*/
/*       <h4 class="col-md-3">Prenom </h4>*/
/*       <h4 class="col-md-3">Sexe </h4>*/
/*       <h4 class="col-md-3">Sport pratiqué </h4>*/
/* */
/* */
/* */
/* */
/* */
/*       {% for user in user %}*/
/* */
/*       <div class="col-md-3">{{ user.username }}</div>*/
/*       <div class="col-md-3">{{ user.prenom }}</div>*/
/*       <div class="col-md-3">{{ user.sexe}}</div>*/
/*       <div class="col-md-3">{{ user.sport}}</div>*/
/* */
/* */
/*       {% endfor %}*/
/*     </div>*/
/*   </div>*/
/* </form>*/
/* */
/* {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/* */
/* <div class="col-md-offset-4 col-md-2 text-center">*/
/* <a href="{{ path('RencontrePublic_new') }}"><button type="button" name="name" value="" class="btn-primary">Créer une rencontre </button></a>*/
/* </div>*/
/* */
/* <div class="col-md-2 text-center">*/
/* <a href="{{ path('RencontrePublic_show') }}"><button type="button" name="name" value="" class="btn-primary">Voir les rencontres publics </button></a>*/
/* </div>*/
/* */
/* {% else %}*/
/* <div class="col-md-12 text-center">*/
/* <a href="{{ path('fos_user_registration_register') }}"><button type="button" name="name" value="" class="btn-primary">Inscrivez-vous !</button></a>*/
/* </div>*/
/* */
/* <div class="col-md-12 text-center">*/
/* <p>*/
/*   Déjà inscrit ? <a href="{{ path('fos_user_security_login') }}">Connectez-vous !</a>*/
/* </p>*/
/* </div>*/
/* {% endif %}*/
/* */
