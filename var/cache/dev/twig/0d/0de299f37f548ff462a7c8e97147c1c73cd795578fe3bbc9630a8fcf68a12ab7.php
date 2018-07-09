<?php

/* ERBundle:Default:add.html.twig */
class __TwigTemplate_53f2d7a302c760227ca3f6c183d128f7ec665d6111830e22a125daeee9992eb8 extends Twig_Template
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
        $__internal_38ad3577f27ad812b7d754dd7286d361343e911e92c3b57a621945af08fff70d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38ad3577f27ad812b7d754dd7286d361343e911e92c3b57a621945af08fff70d->enter($__internal_38ad3577f27ad812b7d754dd7286d361343e911e92c3b57a621945af08fff70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ERBundle:Default:add.html.twig"));

        // line 1
        echo "<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  ";
        // line 4
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 7
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "

  ";
        // line 10
        echo "  <div class=\"form-group\">
    ";
        // line 12
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'annonce"));
        echo "

    ";
        // line 15
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "

    <div class=\"col-sm-10\">
      ";
        // line 19
        echo "      ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  ";
        // line 24
        echo "  <div class=\"form-group\">
    ";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Contenu de l'annonce"));
        echo "
    ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
    <div class=\"col-sm-10\">
      ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <input type=\"submit\" name=\"Envoyer\">

  ";
        // line 34
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
</div>";
        
        $__internal_38ad3577f27ad812b7d754dd7286d361343e911e92c3b57a621945af08fff70d->leave($__internal_38ad3577f27ad812b7d754dd7286d361343e911e92c3b57a621945af08fff70d_prof);

    }

    public function getTemplateName()
    {
        return "ERBundle:Default:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 34,  74 => 28,  69 => 26,  65 => 25,  62 => 24,  54 => 19,  47 => 15,  41 => 12,  38 => 10,  32 => 7,  27 => 4,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<h3>Formulaire d'annonce</h3>

<div class=\"well\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {# Les erreurs générales du formulaire. #}
  {{ form_errors(form) }}

  {# Génération manuelle et éclatée : #}
  <div class=\"form-group\">
    {# Génération du label. #}
    {{ form_label(form.nom, \"Titre de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}

    {# Affichage des erreurs pour ce champ précis. #}
    {{ form_errors(form.nom) }}

    <div class=\"col-sm-10\">
      {# Génération de l'input. #}
      {{ form_widget(form.nom, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  {# Idem pour un autre champ. #}
  <div class=\"form-group\">
    {{ form_label(form.prenom, \"Contenu de l'annonce\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.prenom) }}
    <div class=\"col-sm-10\">
      {{ form_widget(form.prenom, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  <input type=\"submit\" name=\"Envoyer\">

  {{ form_end(form) }}
</div>", "ERBundle:Default:add.html.twig", "/opt/lampp/htdocs/user/src/ERBundle/Resources/views/Default/add.html.twig");
    }
}
